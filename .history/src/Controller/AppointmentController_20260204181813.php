<?php

namespace App\Controller;

use App\Entity\Appointment;
use App\Form\AppointmentType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppointmentController extends AbstractController
{
    #[Route('/appointments', name: 'appointments')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        // On récupère tous les rendez-vous pour les afficher plus tard
        $appointments = $entityManager->getRepository(Appointment::class)->findAll();

        return $this->render('appointments/index.html.twig', [
            'appointments' => $appointments,
        ]);
    }

    #[Route('/appointments/new', name: 'appointments_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $appointment = new Appointment();
        // On crée le formulaire basé sur l'AppointmentType qu'on a généré
        $form = $this->createForm(AppointmentType::class, $appointment);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // On fixe un statut par défaut si tu ne l'as pas mis dans le formulaire
            if (!$appointment->getStatus()) {
                $appointment->setStatus('En attente');
            }

            $entityManager->persist($appointment);
            $entityManager->flush();

            $this->addFlash('success', 'Votre rendez-vous a bien été enregistré en base de données !');
            return $this->redirectToRoute('appointments');
        }

        return $this->render('appointments/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}