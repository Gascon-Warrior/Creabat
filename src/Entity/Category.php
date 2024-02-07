<?php

namespace App\Entity;

use App\Entity\Trait\SlugTrait;
use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


#[ORM\Entity(repositoryClass: CategoryRepository::class)]
#[UniqueEntity('name')]
class Category
{
    use SlugTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]    
    #[Assert\NotBlank(message: 'Veuillez renseigner ce champ.')]
    #[Assert\Length(min: 4, max: 100, minMessage:'La catégorie doit faire un minimu 4 caractères.', maxMessage:'La catégorie doit faire un maximum 100 caractères.')]
    private ?string $name = null;

    #[ORM\OneToOne(inversedBy: 'category', cascade: ['persist', 'remove'])]
    private ?Media $media = null;

    #[ORM\OneToMany(mappedBy: 'category', targetEntity: Product::class)]
    private Collection $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

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

    public function getMedia(): ?Media
    {
        return $this->media;
    }

    public function setMedia(?Media $media): static
    {
        $this->media = $media;

        return $this;
    }

    /**
     * @return Collection<int, Product>
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(Product $product): static
    {
        if (!$this->products->contains($product)) {
            $this->products->add($product);
            $product->setCategory($this);
        }

        return $this;
    }

    public function removeProduct(Product $product): static
    {
        if ($this->products->removeElement($product)) {
            // set the owning side to null (unless already changed)
            if ($product->getCategory() === $this) {
                $product->setCategory(null);
            }
        }

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


    // Dans la classe App\Entity\Product

    public function __toString()
    {
        return $this->getName(); // Vous devriez remplacer getName() par la méthode qui retourne le nom du produit
    }
}
