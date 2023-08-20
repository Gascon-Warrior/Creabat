<?php

namespace App\Entity;

use App\Repository\MediaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MediaRepository::class)]
class Media
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 80)]
    protected ?string $picture = null;

    #[ORM\Column(length: 500)]
    protected ?string $alt = null;

    #[ORM\Column(length: 500, nullable: true)]
    protected ?string $caption = null;

    #[ORM\ManyToOne(inversedBy: 'media')]
    private ?Actu $actu = null;

    #[ORM\ManyToOne(inversedBy: 'media')]
    private ?Supplier $supplier = null;

    #[ORM\ManyToOne(inversedBy: 'media')]
    private ?Project $project = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    
    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): static
    {
        $this->picture = $picture;

        return $this;
    }

    public function getAlt(): ?string
    {
        return $this->alt;
    }

    public function setAlt(string $alt): static
    {
        $this->alt = $alt;

        return $this;
    }

    public function getCaption(): ?string
    {
        return $this->caption;
    }

    public function setCaption(?string $caption): static
    {
        $this->caption = $caption;

        return $this;
    }

    public function getActu(): ?Actu
    {
        return $this->actu;
    }

    public function setActu(?Actu $actu): static
    {
        $this->actu = $actu;

        return $this;
    }

    public function getSupplier(): ?Supplier
    {
        return $this->supplier;
    }

    public function setSupplier(?Supplier $supplier): static
    {
        $this->supplier = $supplier;

        return $this;
    }

    public function getProject(): ?Project
    {
        return $this->project;
    }

    public function setProject(?Project $project): static
    {
        $this->project = $project;

        return $this;
    }
}
