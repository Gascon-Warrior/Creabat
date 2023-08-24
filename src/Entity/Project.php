<?php

namespace App\Entity;

use App\Entity\Trait\SlugTrait;
use App\Repository\ProjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    use SlugTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 15000)]
    private ?string $description = null;

    #[ORM\Column(options:['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeImmutable $date = null;

    #[ORM\OneToMany(mappedBy: 'project', targetEntity: Media::class)]
    #[ORM\JoinColumn(onDelete: 'CASCADE')]
    private Collection $media;

    #[ORM\OneToMany(mappedBy: 'test', targetEntity: Media::class)]
    private Collection $image; 

    public function __construct()
    {
        $this->media = new ArrayCollection();
        $this->image = new ArrayCollection();  
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

    /**
     * @return Collection<int, Media>
     */
    public function getImage(): Collection
    {
        return $this->image;
    }

    public function addImage(Media $image): static
    {
        if (!$this->image->contains($image)) {
            $this->image->add($image);
            $image->setTest($this);
        }

        return $this;
    }

    public function removeImage(Media $image): static
    {
        if ($this->image->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getTest() === $this) {
                $image->setTest(null);
            }
        }

        return $this;
    }  
 
}
