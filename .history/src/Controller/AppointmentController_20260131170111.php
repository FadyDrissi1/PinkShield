<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppointmentController extends AbstractController
{
    #[Route('/appointments', name: 'appointments')]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        return $this->render('appointments/index.html.twig');
    }

    #[Route('/appointments/new', name: 'appointments_new')]
    public function new(Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        if ($request->isMethod('POST')) {
            $this->addFlash('success', 'Rendez-vous enregistré (placeholder).');
            return $this->redirectToRoute('appointments');
        }

        return $this->render('appointments/new.html.twig');
    }
}
