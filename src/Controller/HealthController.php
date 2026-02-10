<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HealthController extends AbstractController
{
    #[Route('/health/habits', name: 'health_habits')]
    public function habits(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        return $this->render('health/habits.html.twig');
    }

    #[Route('/health/sleep', name: 'health_sleep')]
    public function sleep(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        return $this->render('health/sleep.html.twig');
    }

    #[Route('/health/activities', name: 'health_activities')]
    public function activities(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        return $this->render('health/activities.html.twig');
    }

    #[Route('/health/stress', name: 'health_stress')]
    public function stress(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        return $this->render('health/stress.html.twig');
    }

    #[Route('/health/emotions', name: 'health_emotions')]
    public function emotions(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        return $this->render('health/emotions.html.twig');
    }
}
