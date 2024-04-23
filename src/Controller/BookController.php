<?php

namespace App\Controller;


use App\Entity\Book;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BookController extends AbstractController
{

    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/books', name: 'app_book')]
    public function showBooks(): JsonResponse
    {
        $entity = $this->entityManager->getRepository(Book::class);
        return $this->json($entity->findAll());




        
    }
    
}

// $booksList = [];

// foreach($books as $book){
    //     $booksList[] = [
        
        //         'Id' => $book->getId(),
        //         'Title' => $book->getTitle(),
        //         'Pages' => $book->getPages(),
        //         'Book_Id' => $book->getBookId(),
        //         'AverageRating' => $book->getAverageRating(),
        //         'Isbn' => $book->getIsbn(),
        //         'Isbn13' => $book->getIsbn13(),
        //         'Lang' => $book->getLeng(),
        //         'Ratings_counts' => $book->getRatingsCounts(),
        //         'Reviews_Count' => $book->getTextReviewsCount(),
        //         'Publication_Date' => $book->getPublicationDate(),
        //         'Author' => $book->getAuthor()->getName(),
        //         'Publisher' => $book->getPublisher()->getName()
        //     ];
        // }
        
        
        
        
        // $booksList = [];
        // foreach ($books as $book) {
            //     $reflectionClass = new \ReflectionClass($book);
            //     $properties = $reflectionClass->getProperties();
            
            //     $bookData = [];
            //     foreach ($properties as $property) {
                //         $propertyName = $property->getName();
                //         $propertyValue = $property->getValue($book);
                //         $bookData[$propertyName] = $propertyValue;
                //     }
                
                //     $booksList[] = $bookData;
                // }
                
                // return new JsonResponse($booksList);