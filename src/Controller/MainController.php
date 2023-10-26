<?php

namespace App\Controller;

use App\Repository\ActuRepository;
use App\Service\BreadcrumbService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\RouterInterface;

class MainController extends AbstractController
{   

    private $router; // Déclarez une propriété pour le service Router

    public function __construct(RouterInterface $router) // Injectez le service Router dans le constructeur
    {
        $this->router = $router;
    }
    
    #[Route('/', name: 'app_main', options:["label" => "Accueil"])]
    public function index(ActuRepository $actuRepository, RequestStack $requestStack,  BreadcrumbService $breadcrumbService): Response
    {   
        //On résupère la route et le label pour les breadcrumbs
        $currentRoute = $requestStack->getCurrentRequest()->get('_route');
        $breadcrumb = $breadcrumbService->generateBreadcrumb($currentRoute);
        $route = $this->router->getRouteCollection()->get('app_main'); // Utilisez $this->router
        $label = $route->getOption('label');
        
        //Render les trois dernières actualités sur la pag d'accueil 
        $actu = $actuRepository->findLastActu();
        $lastActus = $actuRepository->findLastActu();       

        return $this->render('main/index.html.twig', [
            'actu' => $actu,
            'lastActus' => $lastActus,
            'breadcrumb' => $breadcrumb,
            'label' => $label
        ]);
    }



}
