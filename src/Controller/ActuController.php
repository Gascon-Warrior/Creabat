<?php

namespace App\Controller;

use App\Entity\Actu;
use App\Repository\ActuRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/actualites', name: 'actu_')]
class ActuController extends AbstractController
{
    #[Route('/', name: 'all')]
    public function list(Actu $actu, ActuRepository $actuRepository): Response
    {   
        $actu = $actuRepository->findAll();
        return $this->render('actu/list.html.twig', compact('actu'));        
    }


    #[Route('/{slug}', name: 'single')]
    public function single(Actu $actu): Response
    {           
        //On va chercher l'image correspondante via la medthode getMedia
        $image = $actu->getMedia();
        return $this->render('actu/single.html.twig', compact('actu', 'image'));
    } 
}
