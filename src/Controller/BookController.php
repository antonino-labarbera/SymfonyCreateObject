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
        
        $book = new Book();
        $book->setTitle('Harry Potter');
        $book->setDescription('A fantastic book');
        $book->setPages(352);
        $book->setAuthor('J.K. Rowling');

        $book2 = new Book();
        $book2->setTitle('1984');
        $book2->setDescription('A famous distopian story');
        $book2->setPages(328);
        $book2->setAuthor('GeorgeOrwell');

        $entityManager->persist($book);
        $entityManager->persist($book2);

        $entityManager->flush();

        return new JsonResponse('Saved new books with id '.$book->getId().$book2->getId());
    }
}
