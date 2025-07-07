<?php

namespace App\Entity;

use App\Repository\YetiRatingRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: YetiRatingRepository::class)]
class YetiRating
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $yetiId = null;

    #[ORM\Column]
    private ?bool $rating = null;

    #[ORM\Column]
    private ?\DateTime $timestamp = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getYetiId(): ?int
    {
        return $this->yetiId;
    }

    public function setYetiId(int $yetiId): static
    {
        $this->yetiId = $yetiId;

        return $this;
    }

    public function isRating(): ?bool
    {
        return $this->rating;
    }

    public function setRating(bool $rating): static
    {
        $this->rating = $rating;

        return $this;
    }

    public function getTimestamp(): ?\DateTime
    {
        return $this->timestamp;
    }

    public function setTimestamp(\DateTime $timestamp): static
    {
        $this->timestamp = $timestamp;

        return $this;
    }
}
