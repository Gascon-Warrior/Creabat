<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
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

    #[Route('/menuiseries-pvc', name: 'pvc')]
    public function pvc(): Response
    {
        return $this->render('category/pvc.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }

    #[Route('/menuiseries-alu', name: 'alu')]
    public function alu(): Response
    {
        return $this->render('category/alu.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }

    #[Route('/menuiseries-bois', name: 'bois')]
    public function bois(): Response
    {
        return $this->render('category/bois.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }

    #[Route('/{slug}', name: 'list')]
    public function list(Category $category, CategoryRepository $categoryRepository, $slug): Response
    {
        // On va chercher la liste des tous les produits de la categorie
        $products = $categoryRepository->findAllProductsAssociatedWithImages($slug);
        $media = $category->getMedia()->getPicture();

        return $this->render('category/list.html.twig', compact('category', 'products', 'media'));
    }

  
}
