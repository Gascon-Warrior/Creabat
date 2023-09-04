<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use App\Form\ProductFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/admin/produits', name: 'admin_product_')]
class AdminProductController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('admin/product/index.html.twig', [
            'controller_name' => 'AdminProductController',
        ]);
    }

    #[Route('/ajout', name: 'add')]
    public function add(Request $request, EntityManagerInterface $em, SluggerInterface $slugger): Response
    {   
        // On crée un nouveau produit
        $product = new Product();

        //On crée le formulaire
        $productForm = $this->createForm(ProductFormType::class, $product);

        //On traite la requete du formulaire
        $productForm->handleRequest($request);

       
        //On verifie si le formulaire est soumis et valide
        if($productForm->isSubmitted() && $productForm->isValid()){
            //On génere le slug
            $slug = strtolower($slugger->slug($product->getName()));           
            $product->setSlug($slug);   
            
            //On stocke 
            $em->persist($product);
            $em->flush();

            //Ajout d'un message flash
            //$this->addFlash('succes', 'produit ajouté avec succès');

            //On redirige
            return $this->redirectToRoute('admin_product_index');
        }

        //syntaxe classique pour le render
        return $this->render('admin/product/add.html.twig', [
            'productForm' => $productForm->createView()
        ]);
       
    }

    #[Route('/edition/{id}', name: 'edit')]
    public function edit(Product $product, Request $request, EntityManagerInterface $em, SluggerInterface $slugger): Response
    {

                //On crée le formulaire
                $productForm = $this->createForm(ProductFormType::class, $product);

                //On traite la requete du formulaire
                $productForm->handleRequest($request);
        
               
                //On verifie si le formulaire est soumis et valide
                if($productForm->isSubmitted() && $productForm->isValid()){
                    //On génere le slug
                    $slug = strtolower($slugger->slug($product->getName()));           
                    $product->setSlug($slug);   
                    
                    //On stocke 
                    $em->persist($product);
                    $em->flush();
        
                    //Ajout d'un message flash
                    //$this->addFlash('succes', 'produit modifié avec succès');
        
                    //On redirige
                    return $this->redirectToRoute('admin_product_index');
                }
        
                //syntaxe classique pour le render
                return $this->render('admin/product/edit.html.twig', [
                    'productForm' => $productForm->createView()
                ]);
               
        
    }
}
