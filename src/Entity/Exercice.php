<?php

namespace App\Entity;

use App\Repository\ExerciceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExerciceRepository::class)]
class Exercice
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $dateDebut = null;

    #[ORM\Column(length: 59)]
    private ?string $dateFin = null;

    #[ORM\Column(length: 78)]
    private ?string $dateLimitePret = null;

    #[ORM\Column(length: 23)]
    private ?string $dateRestribution = null;

    #[ORM\Column(length: 23)]
    private ?string $statut = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDebut(): ?string
    {
        return $this->dateDebut;
    }

    public function setDateDebut(string $dateDebut): static
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?string
    {
        return $this->dateFin;
    }

    public function setDateFin(string $dateFin): static
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getDateLimitePret(): ?string
    {
        return $this->dateLimitePret;
    }

    public function setDateLimitePret(string $dateLimitePret): static
    {
        $this->dateLimitePret = $dateLimitePret;

        return $this;
    }

    public function getDateRestribution(): ?string
    {
        return $this->dateRestribution;
    }

    public function setDateRestribution(string $dateRestribution): static
    {
        $this->dateRestribution = $dateRestribution;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }
}
