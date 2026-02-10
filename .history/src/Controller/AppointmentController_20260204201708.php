<?php

namespace App\Controller;

use App\Entity\Appointment;
use App\Form\AppointmentType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AppointmentController extends AbstractController
{
    #[Route('/appointments', name: 'appointments')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        // On filtre pour que l'utilisateur ne voie que SES rendez-vous
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

        // On vérifie la soumission et la validité sans bloquer l'affichage
        if ($form->isSubmitted() && $form->isValid()) {
            
            // Attribution automatique de l'utilisateur connecté au rendez-vous
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