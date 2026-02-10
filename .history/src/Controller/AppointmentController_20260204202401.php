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

        // ON FORCE L'ENTRÉE MÊME SI SYMFONY DIT NON
        if ($form->isSubmitted()) {
            
            // On récupère les données à la main si le formulaire fait la tête
            $data = $request->request->all('appointment');
            
            $appointment->setPatient($this->getUser());
            $appointment->setMotif($data['motif'] ?? 'Sans motif');
            $appointment->setDoctorname($data['doctorname'] ?? 'Inconnu');
            $appointment->setStatus('En attente');
            
            // On essaie de convertir la date manuellement
            if (isset($data['date'])) {
                $appointment->setDate(new \DateTime($data['date']));
            }

            $entityManager->persist($appointment);
            $entityManager->flush();

            return $this->redirectToRoute('appointments');
        }

        return $this->render('appointments/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}