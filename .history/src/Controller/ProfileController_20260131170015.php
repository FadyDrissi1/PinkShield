<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'profile')]
    public function view(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        return $this->render('profile/view.html.twig');
    }

    #[Route('/profile/edit', name: 'profile_edit')]
    public function edit(Request $request, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $user = $this->getUser();

        if ($request->isMethod('POST')) {
            $user->setFirstName($request->request->get('firstName'));
            $user->setLastName($request->request->get('lastName'));
            $user->setPhone($request->request->get('phone'));
            $user->setGender($request->request->get('gender'));

            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Informations mises à jour.');
            return $this->redirectToRoute('profile');
        }

        return $this->render('profile/edit.html.twig', ['user' => $user]);
    }
}
