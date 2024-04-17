<?php

namespace App\Service;

use Carbon\Carbon;
use App\Entity\Book;
use App\Entity\Author;
use App\Entity\Publisher;
use Doctrine\ORM\EntityManagerInterface;

class BookService{
    
    
    
    public function createBookService(EntityManagerInterface $entityManager,$csvFile){
        
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
            $isbn = $item['isbn'];
            $book = $entityManager->getRepository(Book::class)->findOneBy(['isbn' => $isbn]);
            if (!$book) {
                $book = new Book();
            }
            $book->setTitle($item['title']); 
            $book->setPages((int) $item['num_pages']); 
            $book->setAverageRating((float)$item['average_rating']); 
            $book->setIsbn($isbn);
            $book->setIsbn13($item['isbn13']); 
            $book->setLeng($item['language_code']); 
            $book->setRatingsCounts((int)$item['ratings_count']); 
            $book->setTextReviewsCount((int)$item['text_reviews_count']); 
            $date = Carbon::createFromFormat('m/d/Y', $item['publication_date']);
            $book->setPublicationDate($date); 
            $book->setBookID((int)$item['bookID']); 
            
            $authorName = $item['authors'];
            $author = $entityManager->getRepository(Author::class)->findOneBy(['name' => $authorName]);
            if (!$author) {
                $author = new Author();
                $author->setName($authorName);
                $entityManager->persist($author);
            }else {
                $author->setName($authorName);
            }
            $book->setAuthor($author);
            
            $publisherName = $item['publisher'];
            $publisher = $entityManager->getRepository(Publisher::class)->findOneBy(['name' => $publisherName]);
            if (!$publisher) {
                $publisher = new Publisher();
                $publisher->setName($item['publisher']);
                $entityManager->persist($publisher);
            }else {
                $publisher->setName($publisherName);
            }
            $book->setPublisher($publisher);
            
            $entityManager->persist($book);
            $entityManager->flush();
            
        }
    }
}