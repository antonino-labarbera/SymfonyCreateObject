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
    public function createAuthor(EntityManagerInterface $entityManager): JsonResponse
    {

        $author = new Author();
        $author->setName('J.K. Rowling');

        $author2 = new Author();
        $author2->setName('George Orwell');

        $entityManager->persist($author);
        $entityManager->persist($author2);
        $entityManager->flush();

        return new JsonResponse('Saved new authors with id '.$author->getId().$author2->getId());
    }
}
