<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $hasher): Response
    {
        if ($request->isMethod('POST')) {
            $email = (string) $request->request->get('email', '');
            $plain = (string) $request->request->get('password', '');
            $firstName = trim((string) $request->request->get('firstName', '')) ?: null;
            $lastName = trim((string) $request->request->get('lastName', '')) ?: null;
            $phone = trim((string) $request->request->get('phone', '')) ?: null;
            $gender = trim((string) $request->request->get('gender', '')) ?: null;

            if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($plain) < 6) {
                $this->addFlash('error', 'Invalid email or password too short (min 6).');
                return $this->redirectToRoute('app_register');
            }

            $existing = $em->getRepository(User::class)->findOneBy(['email' => $email]);
            if ($existing) {
                $this->addFlash('error', 'An account with this email already exists.');
                return new RedirectResponse($this->generateUrl('app_register'));
            }

            $user = new User();
            $user->setEmail($email);
            $user->setFirstName($firstName);
            $user->setLastName($lastName);
            $user->setPhone($phone);
            $user->setGender($gender);

            $hashed = $hasher->hashPassword($user, $plain);
            $user->setPassword($hashed);

            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Account created. You can now login.');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('security/register.html.twig');
    }
}
