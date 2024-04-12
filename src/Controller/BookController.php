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


        // $existingBooks = $entityManager->getRepository(Book::class)->findAll();

        // if (!empty($existingBooks)) {
        //     return new JsonResponse('Books already exist in the database.');}
        
        
        return $this->json($booksData);
    }
}

