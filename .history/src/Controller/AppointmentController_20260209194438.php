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
    #[Route('/appointments/new', name: 'appointments_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $appointment = new Appointment();
        $form = $this->createForm(AppointmentType::class, $appointment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $appointment->setPatient($this->getUser());
            $appointment->setStatus('En attente');

            $entityManager->persist($appointment);
            $entityManager->flush();

            $this->addFlash('success', 'Rendez-vous enregistré avec succès !');
            return $this->redirectToRoute('dashboard'); // Retour au dashboard rose
        }

        return $this->render('appointments/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}