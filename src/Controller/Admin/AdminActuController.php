<?php

namespace App\Controller\Admin;

use App\Entity\Actu;
use App\Entity\Media;
use App\Form\ActuFormType;
use App\Repository\ActuRepository;
use App\Repository\MediaRepository;
use App\Service\PictureService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/admin/actus', name: 'admin_actus_')]
class AdminActuController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(Actu $actu, ActuRepository $actuRepository): Response
    {
       $actus = $actuRepository->findAllActusWithImages();

        return $this->render('admin/actu/index.html.twig', [
            'actus' => $actus,            
        ]);
    }

    #[Route('/ajout', name: 'add')]
    public function add(Request $request, EntityManagerInterface $em, SluggerInterface $slugger, PictureService $pictureService): Response
    {
        // On crée un nouveau produit
        $actu = new Actu();

        //On crée le formulaire

        $actuForm = $this->createForm(ActuFormType::class, $actu);

        //On traite la requete du formulaire
        $actuForm->handleRequest($request);
        //On verifie si le formulaire est soumis et valide
        if ($actuForm->isSubmitted() && $actuForm->isValid()) {

            //On récupere les images
            $image = $actuForm->get('media_picture')->getData();
            $caption = $actuForm->get('media_caption')->getData();
            $alt = $actuForm->get('media_alt')->getData();

            //ON défini le dossier de destination 
            $folder = 'actus';

            //On appelle le service d'ajout
            $fichier = $pictureService->add($image, $folder, 300, 300);

            $img  = new Media();
            $img->setPicture($fichier);
            $img->setAlt($alt);
            $img->setCaption($caption);

            $actu->setMedia($img);

            //On génere le slug
            $slug = strtolower($slugger->slug($actu->getTitle()));
            $actu->setSlug($slug);

            //On stocke 
            $em->persist($actu);
            $em->flush();

            //Ajout d'un message flash
            $this->addFlash('success', 'Actualité ajoutée avec succès');

            //On redirige
            return $this->redirectToRoute('admin_actus_index');
        }

        return $this->render('admin/actu/add.html.twig', [
            'actuForm' => $actuForm->createView(),
        ]);
    }

    #[Route('/edition/{id}', name: 'edit')]
    public function edit(Actu $actu, Request $request, MediaRepository $mediaRepository, EntityManagerInterface $em, SluggerInterface $slugger, PictureService $pictureService): Response
    {
        $actuForm = $this->createForm(ActuFormType::class, $actu);
        $actuForm->handleRequest($request);

        if ($actuForm->isSubmitted() && $actuForm->isValid()) {
            // On récupère la nouvelle photo
            $newImage = $actuForm->get('media_picture')->getData();

            if ($newImage) {
                // Traitement de la nouvelle image
                $folder = 'actus';
                $fichier = $pictureService->add($newImage, $folder, 300, 300);

                // On met à jour l'objet Media
                $media = $actu->getMedia();
                $media->setPicture($fichier);
            }

            // On récupère les nouvelles valeurs des champs alt et caption
            $mediaAlt = $actuForm->get('media_alt')->getData();
            $mediaCaption = $actuForm->get('media_caption')->getData();

            // On met à jour les valeurs alt et caption 
            $media = $actu->getMedia();
            $media->setAlt($mediaAlt);
            $media->setCaption($mediaCaption);

            // On Génère le slug, stocker et persister les changements            
            $em->persist($actu);
            $em->flush();

            $this->addFlash('success', 'Atualité modifiée avec succès');

            return $this->redirectToRoute('admin_actus_index');
        }

        return $this->render('admin/actu/edit.html.twig', [
            'actuForm' => $actuForm->createView(),
            'actu' => $actu
        ]);
    }


    #[Route('/suppression/{id}', name: 'delete')]
    public function delete(Actu $actu, EntityManagerInterface $em): Response
    {
        //On supprime l'actualité
        $em->remove($actu);
        $em->flush(); 

        $this->addFlash('success', 'Actualité suprimée avec succès');

        return $this->redirectToRoute('admin_actus_index');   
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

            if ($pictureService->delete($nom, 'actus', 300, 300)) {
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
