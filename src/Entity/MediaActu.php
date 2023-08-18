<?php

namespace App\Entity;

use App\Repository\MediaActuRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MediaActuRepository::class)]
class MediaActu extends Media
{

    #[ORM\ManyToOne(inversedBy: 'mediaActus')]
    #[ORM\JoinColumn(nullable: false)]
    private ?actu $actu = null;   

    public function getActu(): ?actu
    {
        return $this->actu;
    }

    public function setActu(?actu $actu): static
    {
        $this->actu = $actu;

        return $this;
    }
}
