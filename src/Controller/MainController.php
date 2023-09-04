<?php

namespace App\Controller;

use App\Repository\ActuRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{   
    
    #[Route('/', name: 'app_main')]
    public function index(ActuRepository $actuRepository): Response
    {   
        //Reender les trois dernières actualités sur la pag d'accueil 
        $actu = $actuRepository->findLastActu();
        return $this->render('main/index.html.twig', compact('actu'));
    }
}
