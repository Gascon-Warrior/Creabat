<?php

namespace App\Controller\Admin;

use App\Entity\Media;
use App\Entity\Project;
use App\Form\ProjectFormType;
use App\Repository\ProjectRepository;
use App\Service\PictureService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/admin/projets', name: 'admin_project_')]
class AdminProjectController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(Project $project, ProjectRepository $projectRepository): Response
    {
        $projects = $projectRepository->findAllprojectsWithImages();

        return $this->render('admin/project/index.html.twig', [
            'projects' => $projects            
        ]);
    }

    #[Route('/ajout', name: 'add')]
    public function add(Request $request, EntityManagerInterface $em, SluggerInterface $slugger, PictureService $pictureService): Response
    {
        $projet = new Project();

      
        $projectForm = $this->createForm(ProjectFormType::class, $projet);
        

        $projectForm->handleRequest($request);

        if ($projectForm->isSubmitted() && $projectForm->isValid()) {
            //On récupere les images
            $mediaForm = $projectForm->get('photo');
            $images = $mediaForm->get('picture')->getData();
           
            foreach ($images as $image) {

                $caption = $mediaForm->get('caption')->getData();
                $alt = $mediaForm->get('alt')->getData();

                //ON défini le dossier de destination 
                $folder = 'projets';

                //On appelle le service d'ajout
                $fichier = $pictureService->add($image, $folder, 300, 300);

                $img  = new Media();
                $img->setPicture($fichier);
                $img->setAlt($alt);
                $img->setCaption($caption);

                $projet->addMedium($img);
            }
            //On génere le slug
            $slug = strtolower($slugger->slug($projet->getTitle()));
            $projet->setSlug($slug);

            //On stocke 
            $em->persist($projet);
            $em->flush();

            //Ajout d'un message flash
            $this->addFlash('succes', 'projet ajouté avec succès');

            //On redirige
            return $this->redirectToRoute('admin_project_index');
        }
        return $this->render('admin/project/add.html.twig', [
            'projectForm' => $projectForm->createView(),
        ]);
    }

    #[Route('/edition/{id}', name: 'edit')]
    public function edit(Project $project, Request $request, EntityManagerInterface $em, SluggerInterface $slugger, PictureService $pictureService): Response
    {

        //On crée le formulaire
        $projectForm = $this->createForm(ProjectFormType::class, $project);
       
        //On traite la requete du formulaire
        $projectForm->handleRequest($request);

        //On verifie si le formulaire est soumis et valide
        if ($projectForm->isSubmitted() && $projectForm->isValid()) {

            //On récupere les images
            $mediaForm = $projectForm->get('photo');
            $images = $mediaForm->get('picture')->getData();

           
            foreach ($images as $image) {
                $caption = $mediaForm->get('caption')->getData();
                $alt = $mediaForm->get('alt')->getData();
                
                //ON défini le dossier de destination 
                $folder = 'projets';

                //On appelle le service d'ajout
                $fichier = $pictureService->add($image, $folder, 300, 300);

                $img  = new Media();
                $img->setPicture($fichier);
                $img->setAlt($alt);
                $img->setCaption($caption);


                $project->addMedium($img);
            }
            //On génere le slug
            $slug = strtolower($slugger->slug($project->getTitle()));
            $project->setSlug($slug);

            //On stocke 
            $em->persist($project);
            $em->flush();

            //Ajout d'un message flash
            //$this->addFlash('succes', 'produit modifié avec succès');

            //On redirige
            return $this->redirectToRoute('admin_project_index');
        }

        //syntaxe classique pour le render
        return $this->render('admin/project/edit.html.twig', [
            'projectForm' => $projectForm->createView(),
            'project' => $project
        ]);
    }

    #[Route('/suppression/{id}', name: 'delete')]
    public function delete(Project $project, EntityManagerInterface $em): Response
    {   
        $em->remove($project);
        $em->flush(); 

        return $this->redirectToRoute('admin_project_index');   
        
    }

}
