<?php

namespace App\Twig;

use App\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

//Extension globale Twig pour recupérer les categories partout où j'en ai besoin
class CatExtension extends AbstractExtension
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('cat', [$this, 'getCategories'])
        ];
    }

    public function getCategories()
    {
        return $this->em->getRepository(Category::class)->findBy([], ['name' => 'ASC']);
    }

}