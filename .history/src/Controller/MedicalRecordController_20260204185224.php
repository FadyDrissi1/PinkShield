<?php

namespace App\Controller;

use App\Entity\MedicalRecord;
use App\Form\MedicalRecordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MedicalRecordController extends AbstractController
{
    #[Route('/medical/records', name: 'medical_records')]
    public function index(EntityManagerInterface $em): Response
    {
        // Seul le médecin ou l'admin devrait voir ça idéalement
        $records = $em->getRepository(MedicalRecord::class)->findAll();
        return $this->render('medical_record/index.html.twig', [
            'records' => $records,
        ]);
    }

    #[Route('/medical/record/new', name: 'medical_record_new')]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $record = new MedicalRecord();
        $record->setUpdatedAt(new \DateTime()); // Date auto
        
        $form = $this->createForm(MedicalRecordType::class, $record);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($record);
            $em->flush();
            return $this->redirectToRoute('medical_records');
        }

        return $this->render('medical_record/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}