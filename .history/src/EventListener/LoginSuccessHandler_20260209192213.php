<?php

namespace App\EventListener;

use Symfony\Component\HttpFoundation\RedirectResponse;
// ON CHANGE L'IMPORT ICI
use Symfony\Component\Security\Core\Event\AuthenticationSuccessEvent;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class LoginSuccessHandler
{
    private $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    // ON CHANGE LE TYPE D'ARGUMENT ICI
    public function onLoginSuccess(AuthenticationSuccessEvent $event): void
    {
        // On récupère l'utilisateur depuis le jeton (token)
        $user = $event->getAuthenticationToken()->getUser();
        $roles = $user->getRoles();

        if (in_array('ROLE_ADMIN', $roles)) {
            // Redirection vers SB Admin 2
            $response = new RedirectResponse($this->urlGenerator->generate('admin_dashboard'));
        } else {
            // Redirection vers ton Dashboard Rose
            $response = new RedirectResponse($this->urlGenerator->generate('dashboard'));
        }

        // Pour ce type d'évènement, la redirection peut nécessiter une logique différente 
        // selon ta version, mais teste déjà ce changement.
    }
}