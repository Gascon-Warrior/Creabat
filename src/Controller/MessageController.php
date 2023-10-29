<?php

namespace App\Controller;

use App\Entity\Message;
use App\Form\MessageFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/contact', name: 'contact_')]
class MessageController extends AbstractController
{
    #[Route('/', name: 'message')]
    public function index(Request $request, EntityManagerInterface $em, MailerInterface $mailer): Response
    {
        $message = new Message;
        $form = $this->createForm(MessageFormType::class, $message);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
          $message = $form->getData();
          
          $em->persist($message);
          $em->flush();
          
          $email = (new TemplatedEmail())
          ->from($message->getEmail())
          ->to('you@example.com')
          ->cc('vincent.lacaze64@hotmail.fr')
          //->bcc('bcc@example.com')
          ->replyTo($message->getEmail())
          //->priority(Email::PRIORITY_HIGH)
          ->subject($message->getSubject())
          //->text('Sending emails is fun again!')
              // path of the Twig template to render
          ->htmlTemplate('emails/contact.html.twig')

          // pass variables (name => value) to the template
          ->context([
              'expiration_date' => new \DateTime('+7 days'),
              'message' => $message, 
            ]);

          $mailer->send($email);
            //ajouter message flash
          $this->addFlash('success', 'Votre message a bien été envoyé.');

          return $this ->redirectToRoute('contact_message');
        }  

        return $this->render('message/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
