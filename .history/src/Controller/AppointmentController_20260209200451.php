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
    // --- PARTIE FRONT-OFFICE (PATIENT) ---

    #[Route('/appointments', name: 'appointments')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

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
            $appointment->setPatient($this->getUser());
            $appointment->setStatus('En attente');

            $entityManager->persist($appointment);
            $entityManager->flush();

            $this->addFlash('success', 'Rendez-vous enregistré avec succès !');
            return $this->redirectToRoute('appointments'); 
        }

        return $this->render('appointments/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // --- PARTIE BACK-OFFICE (ADMIN) ---

    #[Route('/admin/appointments', name: 'admin_appointments_list')]
    public function adminIndex(EntityManagerInterface $entityManager): Response
    {
        // Sécurité : Seul l'admin accède à cette liste globale
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        // L'admin voit TOUS les rendez-vous de la base de données
        $appointments = $entityManager->getRepository(Appointment::class)->findAll();

        return $this->render('admin/appointments/index.html.twig', [
            'appointments' => $appointments,
        ]);
    }

    #[Route('/admin/appointments/delete/{id}', name: 'admin_appointment_delete', methods: ['POST'])]
    public function delete(Request $request, Appointment $appointment, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if ($this->isCsrfTokenValid('delete'.$appointment->getId(), $request->request->get('_token'))) {
            $entityManager->remove($appointment);
            $entityManager->flush();
            $this->addFlash('success', 'Rendez-vous supprimé.');
        }

        return $this->redirectToRoute('admin_appointments_list');
    }
}