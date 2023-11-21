<?php

namespace App\Controller\Admin;

use App\Entity\Message;
use App\Repository\MessageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/messages', name: 'admin_message_')]
class AdminMessageController extends AbstractController
{   
    #[Route('/', name: 'index')]
    public function index(MessageRepository $messageRepository): Response
    {
        $messages =  $messageRepository->findBy([], ['id' => 'DESC']);

        return $this->render('admin/message/index.html.twig', [
            'messages' => $messages
        ]);
    }
    
    #[Route('/consulter/{id}', name:'read')]
    public function read($id, MessageRepository $messageRepository, Message $message, EntityManagerInterface $em): Response
    {
        $message = $messageRepository->find($id);
        $message->setIsSeen(true);

        $em->flush();

        return $this->render('admin/message/single.html.twig', compact('message'));
    }

    #[Route('/suppression/{id}', name: 'delete')]
    public function delete(Message $message, EntityManagerInterface $em): Response
    {   
        $em->remove($message);
        $em->flush(); 
        
        return $this->redirectToRoute('admin_message_index');   

    }
}
