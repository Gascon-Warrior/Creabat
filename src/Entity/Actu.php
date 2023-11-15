<?php

namespace App\Entity;

use App\Entity\Trait\SlugTrait;
use App\Repository\ActuRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: ActuRepository::class)]
#[UniqueEntity(fields:['title'], message:'Ce titre existe déjà en base de donées.')]
class Actu
{
    use SlugTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Veuillez renseigner ce champ.')]
    #[Assert\Length(min: 20, max: 255)]    
    private ?string $title = null;

    #[ORM\Column(length: 5000)]  
    #[Assert\NotBlank(message: 'Veuillez renseigner ce champ.')]
    private ?string $content = null;

    #[ORM\Column(options:['default' => 'CURRENT_TIMESTAMP'])]
    #[Assert\DateTime()]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(nullable: true)]
    #[Assert\DateTime()]
    private ?\DateTimeImmutable $modified_at = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false, onDelete:'CASCADE')]
    private ?Media $media = null;

    public function __construct()
    {       
        $this->created_at = new \DateTimeImmutable();
    }

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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getModifiedAt(): ?\DateTimeImmutable
    {
        return $this->modified_at;
    }

    public function setModifiedAt(?\DateTimeImmutable $modified_at): static
    {
        $this->modified_at = $modified_at;

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
