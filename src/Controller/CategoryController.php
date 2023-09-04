<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/categories', name: 'category_')]
class CategoryController extends AbstractController
{   
    #[Route('/', name: 'all')]
    public function index(): Response
    {
        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }

    #[Route('/{slug}', name:'list')]
    public function list(Category $category): Response
    {           // On va chercher la liste des tous les produits de la categorie
        $products = $category->getProducts();

        return $this->render('category/list.html.twig', compact('category', 'products'));
    }

}
