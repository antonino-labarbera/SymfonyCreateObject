<?php

namespace App\Controller;

use App\Entity\Book;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BookController extends AbstractController
{
    #[Route('/book', name: 'app_book')]
    public function createBook(EntityManagerInterface $entityManager): JsonResponse
    {
        $csvFile = $this->getParameter('kernel.project_dir') .'/public/assets/books.csv';
        $file = fopen($csvFile, 'r');
        $booksData = [];
        $keys = fgetcsv($file);

        while(($data = fgetcsv($file)) !==false){
            $rowData = [];
            foreach ($keys as $index => $key) {
                $rowData[$key] = $data[$index] ?? '';
            }
            $booksData[] = $rowData ;
        }
        fclose($file);

        foreach ($booksData as $item) {
           $book = new Book();
           $book->setTitle($item['title']); 
           $book->setPages($item['num_pages']); 
           $book->setAuthor($item['authors']); 
           $book->setAverageRating($item['average_rating']); 
           $book->setIsbn($item['isbn']);
           $book->setIsbn13($item['isbn13']); 
           $book->setLeng($item['language_code']); 
           $book->setRatingsCounts($item['ratings_count']); 
           $book->setTextReviewsCount($item['text_reviews_count']); 
           $book->setPublicationDate($item['publication_date']); 
           $book->setPublisher($item['publisher']); 
           $book->setBookID($item['bookID']); 








           



        }
        // $existingBooks = $entityManager->getRepository(Book::class)->findAll();

        // if (!empty($existingBooks)) {
        //     return new JsonResponse('Books already exist in the database.');}
        
        
        return $this->json($booksData);
    }
}

