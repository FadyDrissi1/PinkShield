<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MedicalRecordController extends AbstractController
{
    #[Route('/medical/record', name: 'app_medical_record')]
    public function index(): Response
    {
        return $this->render('medical_record/index.html.twig', [
            'controller_name' => 'MedicalRecordController',
        ]);
    }
}
