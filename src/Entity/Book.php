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
    private ?string $pages = null;

    #[ORM\Column]
    private ?string $average_rating = null;

    #[ORM\Column(length: 20)]
    private ?string $isbn = null;

    #[ORM\Column(length: 20)]
    private ?string $isbn13 = null;

    #[ORM\Column(length: 20)]
    private ?string $leng = null;

    #[ORM\Column(length: 255)]
    private ?string $ratings_counts = null;

    #[ORM\Column(length: 255)]
    private ?string $text_reviews_count = null;

    #[ORM\Column(length: 255)]
    private ?string $publication_date = null;

    #[ORM\Column(length: 255)]
    private ?string $bookID = null;

    #[ORM\ManyToOne(inversedBy: 'books')]
    #[ORM\JoinColumn(nullable: false)]
    private ?author $author = null;

    #[ORM\ManyToOne(inversedBy: 'books')]
    #[ORM\JoinColumn(nullable: false)]
    private ?publisher $publisher = null;

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


    public function getPages(): ?string
    {
        return $this->pages;
    }

    public function setPages(string $pages): static
    {
        $this->pages = $pages;

        return $this;
    }

    public function getAverageRating(): ?string
    {
        return $this->average_rating;
    }

    public function setAverageRating(string $average_rating): static
    {
        $this->average_rating = $average_rating;

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

    public function getRatingsCounts(): ?string
    {
        return $this->ratings_counts;
    }

    public function setRatingsCounts(string $ratings_counts): static
    {
        $this->ratings_counts = $ratings_counts;

        return $this;
    }

    public function getTextReviewsCount(): ?string
    {
        return $this->text_reviews_count;
    }

    public function setTextReviewsCount(string $text_reviews_count): static
    {
        $this->text_reviews_count = $text_reviews_count;

        return $this;
    }

    public function getPublicationDate(): ?string
    {
        return $this->publication_date;
    }

    public function setPublicationDate(string $publication_date): static
    {
        $this->publication_date = $publication_date;

        return $this;
    }

    public function getBookID(): ?string
    {
        return $this->bookID;
    }

    public function setBookID(string $bookID): static
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
}
