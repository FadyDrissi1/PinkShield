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
    /**
     * CETTE MÉTHODE MANQUAIT : Elle permet d'afficher la liste des RDV
     * et règle l'erreur "Route appointments does not exist"
     */
    #[Route('/appointments', name: 'appointments')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        // On récupère uniquement les rendez-vous du patient connecté
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
            // On lie le RDV à l'utilisateur actuel (Relation demandée pour le PIDEV)
            $appointment->setPatient($this->getUser());
            $appointment->setStatus('En attente');

            $entityManager->persist($appointment);
            $entityManager->flush();

            $this->addFlash('success', 'Rendez-vous enregistré avec succès !');
            
            // Redirection vers la liste des rendez-vous après l'ajout
            return $this->redirectToRoute('appointments'); 
        }

        return $this->render('appointments/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}