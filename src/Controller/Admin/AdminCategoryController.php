<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Entity\Media;
use App\Form\CategoryFormType;
use App\Repository\MediaRepository;
use App\Repository\CategoryRepository;
use App\Service\PictureService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/admin/categories', name: 'admin_category_')]
class AdminCategoryController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findAllCategoriesWithImages();

        return $this->render('admin/category/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/ajout', name: 'add')]
    public function add(Request $request, EntityManagerInterface $em, SluggerInterface $slugger, PictureService $pictureService): Response
    {
        // On crée un nouveau produit
        $category = new Category();

        //On crée le formulaire
        $categoryForm = $this->createForm(CategoryFormType::class, $category);

        //On traite la requete du formulaire
        $categoryForm->handleRequest($request);
        //On verifie si le formulaire est soumis et valide
        if ($categoryForm->isSubmitted() && $categoryForm->isValid()) {

            //On récupere les images
            $image = $categoryForm->get('media_picture')->getData();
            $caption = $categoryForm->get('media_caption')->getData();
            $alt = $categoryForm->get('media_alt')->getData();

            //ON défini le dossier de destination 
            $folder = 'categories';

            //On appelle le service d'ajout
            $fichier = $pictureService->add($image, $folder, 300, 300);

            $img  = new Media();
            $img->setPicture($fichier);
            $img->setAlt($alt);
            $img->setCaption($caption);

            $category->setMedia($img);

            //On génere le slug
            $slug = strtolower($slugger->slug($category->getName()));
            $category->setSlug($slug);

            //On stocke 
            $em->persist($category);
            $em->flush();

            //Ajout d'un message flash
            $this->addFlash('success', 'Catégorie ajoutée avec succès');

            //On redirige
            return $this->redirectToRoute('admin_category_index');
        }

        return $this->render('admin/category/add.html.twig', [
            'categoryForm' => $categoryForm->createView(),
        ]);
    }

    #[Route('/edition/{id}', name: 'edit')]
    public function edit(Category $category, Request $request, CategoryRepository $categoryRepository, EntityManagerInterface $em, SluggerInterface $slugger, PictureService $pictureService): Response
    {
        $categoryForm = $this->createForm(CategoryFormType::class, $category);
        $categoryForm->handleRequest($request);

        if ($categoryForm->isSubmitted() && $categoryForm->isValid()) {
            // On récupère la nouvelle photo
            $newImage = $categoryForm->get('media_picture')->getData();

            if ($newImage) {
                // Traitement de la nouvelle image
                $folder = 'categories';
                $fichier = $pictureService->add($newImage, $folder, 300, 300);

                // On met à jour l'objet Media
                $media = $category->getMedia();
                $media->setPicture($fichier);
            }

            // On récupère les nouvelles valeurs des champs alt et caption
            $mediaAlt = $categoryForm->get('media_alt')->getData();
            $mediaCaption = $categoryForm->get('media_caption')->getData();

            // On met à jour les valeurs alt et caption 
            $media = $category->getMedia();
            $media->setAlt($mediaAlt);
            $media->setCaption($mediaCaption);

            // On Génère le slug, stocker et persister les changements            
            $em->persist($category);
            $em->flush();

            $this->addFlash('success', 'Catégorie modifiée avec succès');

            return $this->redirectToRoute('admin_category_index');
        }

        return $this->render('admin/category/edit.html.twig', [
            'categoryForm' => $categoryForm->createView(),
            'category' => $category
        ]);
    }

    #[Route('/suppression/{id}', name: 'delete')]
    public function delete(Category $category, EntityManagerInterface $em): Response
    {
        $em->remove($category);
        $em->flush();

        return $this->redirectToRoute('admin_category_index');
    }
}
