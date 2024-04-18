<?php

namespace App\Command;

use Carbon\Carbon;
use App\Entity\Book;
use App\Entity\Author;
use App\Entity\Publisher;
use App\Service\BookService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:create-book')]

 class CreateBook extends Command {
    
   

    private $bookService;
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager, BookService $bookService){

        $this->entityManager = $entityManager;
        $this->bookService = $bookService;

        parent::__construct();
    }

    
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $csvFile = $this->getParameter('kernel.project_dir') .'/public/assets/books.csv';
        $booksData = $bookService->readFile($csvFile);


        
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

        return Command::SUCCESS;
        
    }
    

    }
 