<?php

namespace App\Service;

use Carbon\Carbon;
use App\Entity\Book;
use App\Entity\Author;
use App\Entity\Publisher;
use App\Utils\ImporterUtils;
use Psr\Log\LoggerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class BookImporterService
 *
 * Service for importing book data from CSV files into the database.
 */
class BookImporterService
{
    private $entityManager;
    private $logger;
    private $importerUtils;

    /**
     * @var array Mapping of CSV column names to Book entity setter methods.
     */
    const BOOK_ARRAY_MAPPING = [
        "title" => "setTitle",
        "pages" => "setPages",
        "average_rating" => "setAverageRating",
        "isbn" => "setIsbn",
        "isbn13" => "setIsbn13",
        "leng" => "setLeng",
        "ratings_counts" => "setRatingsCounts",
        "text_reviews_count" => "setTextReviewsCount",
        "bookID" => "setBookID",
        "author" => "setAuthor",
        "publisher" => "setPublisher",
        "publicationDate" => "setPublicationDate",
    ];

    /**
     * BookImporterService constructor.
     *
     * @param EntityManagerInterface $entityManager The entity manager instance.
     * @param LoggerInterface $logger The logger instance.
     * @param ImporterUtils $importerUtils The importer utility instance.
     */
    public function __construct(EntityManagerInterface $entityManager, LoggerInterface $logger, ImporterUtils $importerUtils)
    {
        $this->entityManager = $entityManager;
        $this->importerUtils = $importerUtils;
        $this->logger = $logger;
    }

    /**
     * Handles creating or retrieving author/publisher entities based on the provided key and value.
     *
     * @param string $key The key representing the entity type (author or publisher).
     * @param mixed $value The value representing the entity name.
     * @return Author|Publisher|null The author or publisher entity, or null if an error occurred.
     */
    private function handleAuthorOrPublisher(string $key, $value)
    {
        $className = $key === "author" ? Author::class : Publisher::class;
        $entity = $this->importerUtils->getOrCreateEntity($className, "name", $value);
        if (!$entity) {
            $this->logger->error('An error occurred while creating a new ' . $key . ' entity.');
            return null;
        }
        $this->entityManager->persist($entity);
        return $entity;
    }
    
    /**
     * Handles processing the value based on the provided key.
     *
     * @param string $key The key representing the value type.
     * @param mixed $value The value to process.
     * @return mixed The processed value.
     */
    private function handleValue(string $key, $value)
    {
        switch ($key) {
            case "pages":
            case "ratings_counts":
            case "text_reviews_count":
            case "bookID":
                return (int) $value;
            case "average_rating":
                return (float) $value;
            case "publicationDate":
                return Carbon::createFromFormat('m/d/Y', $value);
            case "author":
            case "publisher":  
                return $this->handleAuthorOrPublisher($key, $value);
            default:
                return $value;
        }
    }

    /**
     * Imports book data from a CSV array into the database.
     *
     * @param array $booksData The array containing book data.
     * @return void
     */
    public function importData(array $booksData)
    {
        $book = $this->importerUtils->getOrCreateEntity(Book::class, "isbn", $booksData['isbn']);
        if (!$book) {
            $this->logger->error('An error occurred while creating a new book entity.');
            return;
        }
        foreach (self::BOOK_ARRAY_MAPPING as $key => $setMethodValue) {
            if (isset($booksData[$key])) {
                $value = $this->handleValue($key, $booksData[$key]);
                if ($value !== null) {
                    $book->$setMethodValue($value);
                }
            }
        }
        $this->entityManager->persist($book);
        $this->entityManager->flush();
       
    }
}