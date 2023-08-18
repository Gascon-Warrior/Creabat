<?php

namespace App\Entity;

use App\Repository\ActuRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActuRepository::class)]
class Actu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 5000)]
    private ?string $content = null;

    #[ORM\Column(options:['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $modified_at = null;

    #[ORM\OneToMany(mappedBy: 'actu', targetEntity: MediaActu::class, orphanRemoval: true)]
    private Collection $mediaActus;

    public function __construct()
    {
        $this->mediaActus = new ArrayCollection();
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

    /**
     * @return Collection<int, MediaActu>
     */
    public function getMediaActus(): Collection
    {
        return $this->mediaActus;
    }

    public function addMediaActu(MediaActu $mediaActu): static
    {
        if (!$this->mediaActus->contains($mediaActu)) {
            $this->mediaActus->add($mediaActu);
            $mediaActu->setActu($this);
        }

        return $this;
    }

    public function removeMediaActu(MediaActu $mediaActu): static
    {
        if ($this->mediaActus->removeElement($mediaActu)) {
            // set the owning side to null (unless already changed)
            if ($mediaActu->getActu() === $this) {
                $mediaActu->setActu(null);
            }
        }

        return $this;
    }

}
