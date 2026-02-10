<?php

namespace App\EventListener;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Http\Event\LoginSuccessEvent;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class LoginSuccessHandler
{
    private $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    public function onLoginSuccess(LoginSuccessEvent $event): void
    {
        $user = $event->getUser();
        $roles = $user->getRoles();

        if (in_array('ROLE_ADMIN', $roles)) {
            $response = new RedirectResponse($this->urlGenerator->generate('admin_dashboard'));
        } else {
            // C'est ton Dashboard Rose (Espace Patient)
            $response = new RedirectResponse($this->urlGenerator->generate('dashboard'));
        }

        $event->setResponse($response);
    }
}