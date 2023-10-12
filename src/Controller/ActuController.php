<?php

namespace App\Controller;

use App\Entity\Actu;
use App\Repository\ActuRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/actualites', name: 'actu_')]
class ActuController extends AbstractController
{
    #[Route('/', name: 'all')]
    public function list(Actu $actu, ActuRepository $actuRepository, Request $request): Response
    {     
        //Je vais chercher le numéro de page dans l'url 
        $page = $request->query->getInt('page', 1);
        
        $actus = $actuRepository->findActusPaginated($page, 3);        
        return $this->render('actu/list.html.twig', compact('actus'));        
    }


    #[Route('/{slug}', name: 'single')]
    public function single(Actu $actu): Response
    {           
        //On va chercher l'image correspondante via la medthode getMedia
        $image = $actu->getMedia();
        return $this->render('actu/single.html.twig', compact('actu', 'image'));
    } 
}
