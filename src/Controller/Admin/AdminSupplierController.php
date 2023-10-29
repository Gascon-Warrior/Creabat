<?php

namespace App\Controller\Admin;

use App\Entity\Media;
use App\Entity\Supplier;
use App\Form\SupplierFormType;
use App\Repository\SupplierRepository;
use App\Service\PictureService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/admin/fournisseurs', name: 'admin_supplier_')]
class AdminSupplierController extends AbstractController
{
    #[Route('/', name:'index')]
    public function index(SupplierRepository $supplierRepository): Response
    {
        $suppliers = $supplierRepository->findAllSuppliersWithImages();

        return $this->render('admin/supplier/index.html.twig', [
            'suppliers' => $suppliers
        ]);
    }

    #[Route('/ajout', name: 'add')]
    public function add(Request $request, EntityManagerInterface $em, SluggerInterface $slugger, PictureService $pictureService): Response
    {
        // On crée un nouveau produit
        $supplier = new Supplier();

        //On crée le formulaire
        $supplierForm = $this->createForm(SupplierFormType::class, $supplier);

        //On traite la requete du formulaire
        $supplierForm->handleRequest($request);
        //On verifie si le formulaire est soumis et valide
        if ($supplierForm->isSubmitted() && $supplierForm->isValid()) {

            //On récupere les images
            $image = $supplierForm->get('media_picture')->getData();
            $caption = $supplierForm->get('media_caption')->getData();
            $alt = $supplierForm->get('media_alt')->getData();

            //ON défini le dossier de destination 
            $folder = 'suppliers';

            //On appelle le service d'ajout
            $fichier = $pictureService->add($image, $folder, 300, 300);

            $img  = new Media();
            $img->setPicture($fichier);
            $img->setAlt($alt);
            $img->setCaption($caption);

            $supplier->setMedia($img);

            //On génere le slug
            $slug = strtolower($slugger->slug($supplier->getCompany()));
            //$supplier->setSlug($slug);

            //On stocke 
            $em->persist($supplier);
            $em->flush();

            //Ajout d'un message flash
            $this->addFlash('success', 'Fournisseur ajoutée avec succès');

            //On redirige
            return $this->redirectToRoute('admin_supplier_index');
        }

        return $this->render('admin/supplier/add.html.twig', [
            'supplierForm' => $supplierForm->createView(),
        ]);
    }

    #[Route('/edition/{id}', name: 'edit')]
    public function edit(Supplier $supplier, Request $request, SupplierRepository $supplierRepository, EntityManagerInterface $em, SluggerInterface $slugger, PictureService $pictureService): Response
    {
        $supplierForm = $this->createForm(SupplierFormType::class, $supplier);
        $supplierForm->handleRequest($request);

        if ($supplierForm->isSubmitted() && $supplierForm->isValid()) {
            // On récupère la nouvelle photo
            $newImage = $supplierForm->get('media_picture')->getData();

            if ($newImage) {
                // Traitement de la nouvelle image
                $folder = 'suppliers';
                $fichier = $pictureService->add($newImage, $folder, 300, 300);

                // On met à jour l'objet Media
                $media = $supplier->getMedia();
                $media->setPicture($fichier);
            }

            // On récupère les nouvelles valeurs des champs alt et caption
            $mediaAlt = $supplierForm->get('media_alt')->getData();
            $mediaCaption = $supplierForm->get('media_caption')->getData();

            // On met à jour les valeurs alt et caption 
            $media = $supplier->getMedia();
            $media->setAlt($mediaAlt);
            $media->setCaption($mediaCaption);

            // On Génère le slug, stocker et persister les changements            
            $em->persist($supplier);
            $em->flush();

            $this->addFlash('success', 'Fournisseur modifié avec succès');

            return $this->redirectToRoute('admin_supplier_index');
        }

        return $this->render('admin/supplier/edit.html.twig', [
            'supplierForm' => $supplierForm->createView(),
            'supplier' => $supplier
        ]);
    }

    #[Route('/suppression/{id}', name: 'delete')]
    public function delete(Supplier $supplier, EntityManagerInterface $em): Response
    {
        $em->remove($supplier);
        $em->flush();

        $this->addFlash('success', 'Fournisseur supprimé avec succès');
        
        return $this->redirectToRoute('admin_supplier_index');
    }
}
