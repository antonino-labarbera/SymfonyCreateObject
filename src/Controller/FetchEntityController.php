<?php

namespace App\Controller;


use App\Entity\Book;
use App\Entity\Author;
use App\Entity\Publisher;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FetchEntityController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){
       $this->entityManager = $entityManager;
    }
    
    const BOOK_ARRAY_MAPPING = [
        "id" =>"getId",
        "title" => "getTitle",
        "pages" => "getPages",
        "average_rating" => "getAverageRating",
        "isbn" => "getIsbn",
        "isbn13" => "getIsbn13",
        "leng" => "getLeng",
        "ratings_counts" => "getRatingsCounts",
        "text_reviews_count" => "getTextReviewsCount",
        "bookID" => "getBookID",
        "author" => "getAuthor",
        "publisher" => "getPublisher",
        "publicationDate" => "getPublicationDate",
    ];

    const AUTHOR_PUBLISHER_ARRAY_MAPPING = [
        "id" => "getId",
        "name" => "getName",
        "books" => "getBooks",
    ];

    private function fetchEntities(string $entityClass, array $entityMapping): array {
            $entities = $this->entityManager->getRepository($entityClass)->findBy([], ['id' => 'ASC']);

            $entityList = [];
            foreach ($entities as $entity){
                $entityData = [];
                foreach($entityMapping as $key => $getMethod){
                    $entityData[$key] = $entity->$getMethod();
                }
                $entityList[] = $entityData;
            }
            return $entityList;
        }

    #[Route('/books', name: 'app_book')]
    public function fetchBooks(): JsonResponse
    {
        $books = $this->fetchEntities(Book::class, self::BOOK_ARRAY_MAPPING);
        
        foreach ($books as &$bookData) {
            if (isset($bookData['author'])) {
                $author = $bookData['author'];
                $bookData['author'] = $author->getName();
            }
            if (isset($bookData['publisher'])) {
                $publisher = $bookData['publisher'];
                $bookData['publisher'] = $publisher->getName();
            }
        }
        return $this->json($books);
    }  

    #[Route('/authors', name: 'app_authors')]
    public function fetchAuthors(): JsonResponse
    {
        $authors = $this->fetchEntities(Author::class, self::AUTHOR_PUBLISHER_ARRAY_MAPPING);

        foreach ($authors as &$authorData) {
            if (isset($authorData['books'])) {
                $relatedBooks = [];
                foreach ($authorData['books'] as $book) {
                    $relatedBooks[] = $book->getTitle(); 
                }
                $authorData['books'] = $relatedBooks;
            }
            
        }
        return $this->json($authors);
    }  

    #[Route('/publishers', name: 'app_publishers')]
    public function fetchPublishers(): JsonResponse
    {
        $publishers = $this->fetchEntities(Publisher::class, self::AUTHOR_PUBLISHER_ARRAY_MAPPING);

        foreach ($publishers as &$publisherData) {
            if (isset($publisherData['books'])) {
                $relatedBooks = [];
                foreach ($publisherData['books'] as $book) {
                    $relatedBooks[] = $book->getTitle(); 
                }
                $publisherData['books'] = $relatedBooks;
            }
            
        }
        return $this->json($publishers);
    }  
    
    
}

