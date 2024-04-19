<?php

namespace App\Controller;


use App\Entity\Book;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BookController extends AbstractController
{
    #[Route('/books', name: 'app_book')]
    public function showBooks(EntityManagerInterface $entityManager): JsonResponse
    {
        $books = $entityManager->getRepository(Book::class)->findAll();
        
        $booksList = [];

        foreach($books as $book){
            $booksList[] = [

                'Id' => $book->getId(),
                'Title' => $book->getTitle(),
                'Pages' => $book->getPages(),
                'Book_Id' => $book->getBookId(),
                'AverageRating' => $book->getAverageRating(),
                'Isbn' => $book->getIsbn(),
                'Isbn13' => $book->getIsbn13(),
                'Lang' => $book->getLeng(),
                'Ratings_counts' => $book->getRatingsCounts(),
                'Reviews_Count' => $book->getTextReviewsCount(),
                'Publication_Date' => $book->getPublicationDate(),
                'Author' => $book->getAuthor()->getName(),
                'Publisher' => $book->getPublisher()->getName()
            ];
        }
    
       return new JsonResponse($booksList);
    }
}

