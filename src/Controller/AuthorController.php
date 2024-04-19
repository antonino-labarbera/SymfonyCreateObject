<?php

namespace App\Controller;

use App\Entity\Author;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class AuthorController extends AbstractController
{
    #[Route('/author', name: 'app_author')]
    public function showAuthors(EntityManagerInterface $entityManager): JsonResponse
    {
        $authors = $entityManager->getRepository(Author::class)->findAll();
        
        $authorsList = [];
        foreach ($authors as $author) {
           
           $books = [];
           foreach ($author->getBooks() as $book) {
               $books[] = $book->getTitle();
           }
           
            $authorsList[] = [

               'id' => $author->getId(),
               'Name' => $author->getName(),
               'books' => $books,
            ];
        }
        return new JsonResponse($authorsList);
        
    }
}
