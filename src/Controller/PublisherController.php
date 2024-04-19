<?php

namespace App\Controller;

use App\Entity\Publisher;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class PublisherController extends AbstractController
{
    #[Route('/publisher', name: 'app_publisher')]
    public function showPublishers(EntityManagerInterface $entityManager): JsonResponse
    {
        $publishers = $entityManager->getRepository(Publisher::class)->findAll();
        
        $publishersList = [];
        foreach ($publishers as $publisher) {
           
           $books = [];
           foreach ($publisher->getBooks() as $book) {
               $books[] = $book->getTitle();
           }
           
            $publishersList[] = [

               'id' => $publisher->getId(),
               'Name' => $publisher->getName(),
               'books' => $books,
            ];
        }
        return new JsonResponse($publishersList);
    }
}
