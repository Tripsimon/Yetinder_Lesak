<?php

namespace App\Entity;

use App\Enum\Gender;
use App\Repository\YetiRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: YetiRepository::class)]
class Yeti
{
    // Vygenerovaná entita yetiho
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 128)]
    private ?string $name = null;

    #[ORM\Column(nullable: true)]
    private ?float $weight = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $age = null;

    #[ORM\Column(nullable: true)]
    private ?float $height = null;

    #[ORM\Column(length: 128, nullable: true)]
    private ?string $placeOfStay = null;

    #[ORM\Column(enumType: Gender::class)]
    private ?Gender $gender = null;

    #[ORM\Column]
    private ?int $currentRating = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(?float $weight): static
    {
        $this->weight = $weight;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function setHeight(?float $height): static
    {
        $this->height = $height;

        return $this;
    }

    public function getPlaceOfStay(): ?string
    {
        return $this->placeOfStay;
    }

    public function setPlaceOfStay(?string $placeOfStay): static
    {
        $this->placeOfStay = $placeOfStay;

        return $this;
    }

    public function getGender(): ?Gender
    {
        return $this->gender;
    }

    public function setGender(Gender $gender): static
    {
        $this->gender = $gender;

        return $this;
    }

    public function getCurrentRating(): ?int
    {
        return $this->currentRating;
    }

    public function setCurrentRating(int $currentRating): static
    {
        $this->currentRating = $currentRating;

        return $this;
    }
}
