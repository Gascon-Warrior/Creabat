<?php

namespace App\Controller\Admin;

use App\Entity\Media;
use App\Entity\Product;
use App\Form\ProductFormType;
use App\Repository\ProductRepository;
use App\Service\PictureService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/admin/produits', name: 'admin_product_')]
class AdminProductController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(Product $product, ProductRepository $productRepository): Response
    {
        $products = $productRepository->findAll();
        $images = $product->getMedia();

        return $this->render('admin/product/index.html.twig', [
            'products' => $products,
            'images' => $images
        ]);
    }

    #[Route('/ajout', name: 'add')]
    public function add(Request $request, EntityManagerInterface $em, SluggerInterface $slugger, PictureService $pictureService): Response
    {
        // On crée un nouveau produit
        $product = new Product();
       //dd($product);
        //On crée le formulaire
        $productForm = $this->createForm(ProductFormType::class, $product);
        
        //On traite la requete du formulaire
        $productForm->handleRequest($request);


        //On verifie si le formulaire est soumis et valide
        if ($productForm->isSubmitted() && $productForm->isValid()) {

            //On récupere les images
            $mediaForm = $productForm->get('photo');
            $images = $mediaForm->get('picture')->getData();
            
            foreach ($images as $image) {               
                $caption = $mediaForm->get('caption')->getData();
                $alt = $mediaForm->get('alt')->getData();

                //ON défini le dossier de destination 
                $folder = 'products';

                //On appelle le service d'ajout
                $fichier = $pictureService->add($image, $folder, 300, 300);

                $img  = new Media();
                $img->setPicture($fichier);
                $img->setAlt($alt);
                $img->setCaption($caption);

                $product->addMedium($img);
            }
            //On génere le slug
            $slug = strtolower($slugger->slug($product->getName()));
            $product->setSlug($slug);
           
            //On stocke 
            $em->persist($product);
            $em->flush();

            //Ajout d'un message flash
            $this->addFlash('success', 'Produit ajouté avec succès');

            //On redirige
            return $this->redirectToRoute('admin_product_index');
        }

            return $this->render('admin/product/add.html.twig', [
            'productForm' => $productForm->createView(),
        ]);
    }

    #[Route('/edition/{id}', name: 'edit')]
    public function edit(Product $product, Request $request, EntityManagerInterface $em, SluggerInterface $slugger, PictureService $pictureService): Response
    {

        //On crée le formulaire
        $productForm = $this->createForm(ProductFormType::class, $product);
       
        //On traite la requete du formulaire
        $productForm->handleRequest($request);

        //On verifie si le formulaire est soumis et valide
        if ($productForm->isSubmitted() && $productForm->isValid()) {

            //On récupere les images
            $mediaForm = $productForm->get('photo');
            $images = $mediaForm->get('picture')->getData();

           
            foreach ($images as $image) {
                $caption = $mediaForm->get('caption')->getData();
                $alt = $mediaForm->get('alt')->getData();
                
                //ON défini le dossier de destination 
                $folder = 'products';

                //On appelle le service d'ajout
                $fichier = $pictureService->add($image, $folder, 300, 300);

                $img  = new Media();
                $img->setPicture($fichier);
                $img->setAlt($alt);
                $img->setCaption($caption);


                $product->addMedium($img);
            }
            //On génere le slug
            $slug = strtolower($slugger->slug($product->getName()));
            $product->setSlug($slug);

            //On stocke 
            $em->persist($product);
            $em->flush();

            //Ajout d'un message flash
            $this->addFlash('success', 'Produit modifié avec succès');

            //On redirige
            return $this->redirectToRoute('admin_product_index');
        }

        //syntaxe classique pour le render
        return $this->render('admin/product/edit.html.twig', [
            'productForm' => $productForm->createView(),
            'product' => $product
        ]);
    }

    #[Route('/suppression/{id}', name: 'delete')]
    public function delete(Product $product, EntityManagerInterface $em): Response
    {   
        $em->remove($product);
        $em->flush(); 

        $this->addFlash('success', 'Produit supprimé avec succès');

        return $this->redirectToRoute('admin_product_index');   
        
    }

    #[Route('/suppression/image/{id}', name: 'delete_image', methods: ['DELETE'])]
    public function deleteImage(Media $media, Request $request, EntityManagerInterface $em, PictureService $pictureService): JsonResponse
    {
        //On récupère le contennu de la requete
        $data = json_decode($request->getContent(), true);

        if ($this->isCsrfTokenValid('delete' . $media->getId(), $data['_token'])) {
            //Le token Csrf est valide
            //On récupère le nom de l'image
            $nom = $media->getPicture();

            if ($pictureService->delete($nom, 'products', 300, 300)) {
                //On supprime l'image de la base de données
                $em->remove($media);
                $em->flush();

                return new JsonResponse(['success' => true], 200);
            }
            //La suppression a échoué
            return new JsonResponse(['error' => 'Erreur de suppression'], 400);
        }
        return new JsonResponse(['error' => 'Token invalide'], 400);
    }
}
