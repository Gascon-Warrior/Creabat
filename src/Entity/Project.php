<?php

namespace App\Entity;

use App\Entity\Trait\SlugTrait;
use App\Repository\ProjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


#[ORM\Entity(repositoryClass: ProjectRepository::class)]
#[UniqueEntity('title')]
#[UniqueEntity(fields:['title'], message:'Ce titre existe déjà en base de donées.')]

class Project
{
    use SlugTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]   
    #[Assert\NotBlank(message: 'Veuillez renseigner ce champ.')]
    #[Assert\length(min: 10, max: 255, minMessage:'Le titre doit être compris entre 10 et 255 caractères.',  maxMessage:'Le titre doit être compris entre 10 et 255 caractères.')]
    private ?string $title = null;

    #[ORM\Column(length: 500000)]
    #[Assert\NotBlank(message: 'Veuillez renseigner ce champ.')]
    private ?string $description = null;

    #[ORM\Column(options:['default' => 'CURRENT_TIMESTAMP'])]
    #[Assert\DateTime]
    private ?\DateTimeImmutable $date = null;

    #[ORM\OneToMany(mappedBy: 'project', targetEntity: Media::class, cascade:['persist'])]
    #[ORM\JoinColumn(onDelete: 'CASCADE')]
    private Collection $media;

    public function __construct()
    {
        $this->media = new ArrayCollection();     
        $this->date = new \DateTimeImmutable();      
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDate(): ?\DateTimeImmutable
    {
        return $this->date;
    }

    public function setDate(\DateTimeImmutable $date): static
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return Collection<int, Media>
     */
    public function getMedia(): Collection
    {
        return $this->media;
    }

    public function addMedium(Media $medium): static
    {
        if (!$this->media->contains($medium)) {
            $this->media->add($medium);
            $medium->setProject($this);
        }

        return $this;
    }

    public function removeMedium(Media $medium): static
    {
        if ($this->media->removeElement($medium)) {
            // set the owning side to null (unless already changed)
            if ($medium->getProject() === $this) {
                $medium->setProject(null);
            }
        }

        return $this;
    }  
 
}
