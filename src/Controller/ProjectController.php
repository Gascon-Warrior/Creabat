<?php

namespace App\Controller;

use App\Entity\Project;
use App\Repository\ProjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/realisations', name: 'project_')]
class ProjectController extends AbstractController
{
    #[Route('/', name: 'all')]
    public function index(Project $project, ProjectRepository $projectRepository, Request $request): Response
    {
           //Je vais chercher le numéro de page dans l'url 
           $page = $request->query->getInt('page', 1);
        
           $projects = $projectRepository->findProjectsPaginated($page, 3);        
           return $this->render('project/index.html.twig', compact('projects'));  
    }

    #[Route('/{slug}', name: 'single')]
    public function single(ProjectRepository $projectRepository, string $slug): Response
    {
        $project = $projectRepository->findProjectBySlug($slug);
        return $this->render('project/single.html.twig', [
            'project' => $project,
        ]);
    }
}
