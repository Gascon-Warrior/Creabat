<?php

namespace App\Entity;

use App\Repository\SupplierRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;



#[ORM\Entity(repositoryClass: SupplierRepository::class)]
#[UniqueEntity(fields:['company'], message:'Cette société existe déjà en base de donées.')]
class Supplier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: 'Veuillez renseigner ce champ.')]
    #[Assert\Length(min: 2, max: 100, minMessage:'Le nom de la société doit être faire 2 caractères minimum.', maxMessage:'Le nom de la société doit être faire 100 caractères maximum.')]
    private ?string $company = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Media $media = null;
 
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(string $company): static
    {
        $this->company = $company;

        return $this;
    }

    public function getMedia(): ?Media
    {
        return $this->media;
    }

    public function setMedia(Media $media): static
    {
        $this->media = $media;

        return $this;
    }

    public function getMediaAlt()
    {
        return $this->media ? $this->media->getAlt(): null;
    }

    public function getMediaCaption()
    {
        return $this->media ? $this->media->getCaption(): null;
    }
    public function getMediaPicture()
    {
        return $this->media ? $this->media->getPicture(): null;
    }
       
}
