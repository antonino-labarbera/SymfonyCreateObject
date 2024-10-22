<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookRepository::class)]
class Book
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column]
    private ?int $pages = null;

    #[ORM\Column]
    private ?float $rating = null;

    #[ORM\Column(length: 20)]
    private ?string $isbn = null;

    #[ORM\Column(length: 20)]
    private ?string $isbn13 = null;

    #[ORM\Column(length: 20)]
    private ?string $leng = null;

    #[ORM\Column]
    private ?int $ratings_score = null;

    #[ORM\Column]
    private ?int $text_reviews = null;

    #[ORM\Column]
    private ?int $bookID = null;

    #[ORM\ManyToOne(fetch: 'EAGER',cascade: ["persist"], inversedBy: 'books')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Author $author = null;

    #[ORM\ManyToOne(fetch: 'EAGER',cascade: ["persist"], inversedBy: 'books')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Publisher $publisher = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $publicationDate = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }


    public function getPages(): ?int
    {
        return $this->pages;
    }

    public function setPages(int $pages): static
    {
        $this->pages = $pages;

        return $this;
    }

    public function getRating(): ?float
    {
        return $this->rating;
    }

    public function setRating(float $rating): static
    {
        $this->rating = $rating;

        return $this;
    }

    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): static
    {
        $this->isbn = $isbn;

        return $this;
    }

    public function getIsbn13(): ?string
    {
        return $this->isbn13;
    }

    public function setIsbn13(string $isbn13): static
    {
        $this->isbn13 = $isbn13;

        return $this;
    }

    public function getLeng(): ?string
    {
        return $this->leng;
    }

    public function setLeng(string $leng): static
    {
        $this->leng = $leng;

        return $this;
    }

    public function getRatingsScore(): ?int
    {
        return $this->ratings_score;
    }

    public function setRatingsScore(int $ratings_score): static
    {
        $this->ratingsScore = $ratings_score;

        return $this;
    }

    public function getTextReviews(): ?int
    {
        return $this->text_reviews;
    }

    public function setTextReviews(int $text_reviews): static
    {
        $this->text_reviews = $text_reviews;

        return $this;
    }

    public function getBookID(): ?int
    {
        return $this->bookID;
    }

    public function setBookID(int $bookID): static
    {
        $this->bookID = $bookID;

        return $this;
    }

    public function getAuthor(): ?author
    {
        return $this->author;
    }

    public function setAuthor(?author $author): static
    {
        $this->author = $author;

        return $this;
    }

    public function getPublisher(): ?publisher
    {
        return $this->publisher;
    }

    public function setPublisher(?publisher $publisher): static
    {
        $this->publisher = $publisher;

        return $this;
    }

    public function getPublicationDate(): ?\DateTimeInterface
    {
        return $this->publicationDate;
    }

    public function setPublicationDate(\DateTimeInterface $publicationDate): static
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }
}
