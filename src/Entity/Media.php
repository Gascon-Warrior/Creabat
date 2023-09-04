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
    #[ORM\JoinColumn(onDelete: 'CASCADE')]
    private ?Project $project = null;

    #[ORM\OneToOne(mappedBy: 'media', cascade: ['persist', 'remove'])]
    private ?Category $category = null;

    #[ORM\ManyToOne(inversedBy: 'media')]
    private ?Product $product = null;
   

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
  
    public function getProject(): ?Project
    {
        return $this->project;
    }

    public function setProject(?Project $project): static
    {
        $this->project = $project;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): static
    {
        // unset the owning side of the relation if necessary
        if ($category === null && $this->category !== null) {
            $this->category->setMedia(null);
        }

        // set the owning side of the relation if necessary
        if ($category !== null && $category->getMedia() !== $this) {
            $category->setMedia($this);
        }

        $this->category = $category;

        return $this;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): static
    {
        $this->product = $product;

        return $this;
    }   

}
