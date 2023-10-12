<?php

namespace App\Controller;

use App\Entity\Message;
use App\Form\MessageFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/contact', name: 'contact_')]
class MessageController extends AbstractController
{
    #[Route('/', name: 'message')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $message = new Message;
        $form = $this->createForm(MessageFormType::class, $message);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
          $message = $form->getData();

          $em->persist($message);
          $em->flush();
          
            //ajouter message flash

          return $this ->redirectToRoute('contact_message');
        }  

        return $this->render('message/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
