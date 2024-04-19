<?php

namespace App\Command;

use Carbon\Carbon;
use App\Entity\Book;
use App\Entity\Author;
use App\Entity\Publisher;
use App\Service\CsvFileReader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:book_importer',
    description: 'Update books database.',
    hidden: false,
    aliases: ['app:add-books']
    )]
    
    class Books_Importer_command extends Command {
        
        
        
        private $csvFile;
        private $entityManager;
        
        public function __construct(EntityManagerInterface $entityManager, CsvFileReader $csvFile){
            
            $this->entityManager = $entityManager;
            $this->csvFile = $csvFile;
            
            
            parent::__construct();
        }
        
        protected function configure(){
            $this->addArgument('FilePath', InputArgument::REQUIRED);

        }

        private function getOrCreateEntity($className, $value){
            $entity = $this->entityManager->getRepository($className)->findOneBy(['name' => $value]);

            if(!$entity){
                $entity = new $className();
                $entity->setName($value);
            }
            return $entity;
        }
        
        
        
        protected function execute(InputInterface $input, OutputInterface $output): int
        {
            $excelFullPath = $input -> getArgument('FilePath');
            
            $dataSets = $this->csvFile->readFile($excelFullPath);
            
            foreach ($dataSets as $dataSet) {
                foreach($dataSet as $item){
                    
                    $isbn = $item['isbn'];
                    $book = $this->entityManager->getRepository(Book::class)->findOneBy(['isbn' => $isbn]);
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
                    
                    $author = $this->getOrCreateEntity(Author::class, $item['authors']);
                   
                    $book->setAuthor($author);
                    
                    $publisher = $this->getOrCreateEntity(Publisher::class, $item['publisher']);
                    
                    $book->setPublisher($publisher);
                    
                    $this->entityManager->persist($author);
                    $this->entityManager->persist($publisher);
                    $this->entityManager->persist($book);
                    $this->entityManager->flush();
                    
                }
            }
            
            $output->writeln('Books updated');
            return Command::SUCCESS;
            
        }
        
        
    }
    