<?php

namespace App\Controller;

use App\Entity\Appointment;
use App\Form\AppointmentType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
// Correction du souligné bleu : on utilise Attribute au lieu de Annotation
use Symfony\Component\Routing\Attribute\Route;

class AppointmentController extends AbstractController
{
    #[Route('/appointments', name: 'appointments')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        // IMPORTANT : On ne récupère plus TOUS les rendez-vous (findAll), 
        // mais seulement ceux de l'utilisateur connecté pour la confidentialité.
        $appointments = $entityManager->getRepository(Appointment::class)->findBy([
            'patient' => $this->getUser()
        ]);

        return $this->render('appointments/index.html.twig', [
            'appointments' => $appointments,
        ]);
    }

    #[Route('/appointments/new', name: 'appointments_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $appointment = new Appointment();
        
        $form = $this->createForm(AppointmentType::class, $appointment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Lier automatiquement le rendez-vous à l'utilisateur connecté (Toi !)
            $appointment->setPatient($this->getUser());

            if (!$appointment->getStatus()) {
                $appointment->setStatus('En attente');
            }

            $entityManager->persist($appointment);
            $entityManager->flush();

            $this->addFlash('success', 'Votre rendez-vous a bien été enregistré !');
            return $this->redirectToRoute('appointments');
        }

        return $this->render('appointments/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}