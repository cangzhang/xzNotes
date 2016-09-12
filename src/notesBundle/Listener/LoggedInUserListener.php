<?php

namespace notesBundle\Listener;

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use FOS\UserBundle\Model\User;

class LoggedInUserListener
{
    private $tokenStorage;
    private $router;

    public function __construct(TokenStorageInterface $tokenStorage, RouterInterface $router)
    {
        $this->tokenStorage = $tokenStorage;
        $this->router = $router;
    }

    public function onKernelRequest(GetResponseEvent $event)
    {
        $loggedUser = $this->getLoggedUser();
        if ($loggedUser && $event->isMasterRequest()) {
            $currentRoute = $event->getRequest()->attributes->get('_route');
            $redirectRoute = $this->getRedirectRoute($loggedUser, $currentRoute);
            if ($redirectRoute) {
                $response = new RedirectResponse($this->router->generate($redirectRoute));
                $event->setResponse($response);
            }
        }
    }

    private function getLoggedUser()
    {
        if ($this->tokenStorage->getToken()) {
            $user = $this->tokenStorage->getToken()->getUser();
            return $user instanceof User ? $user : null;
        }
    }

    private function getRedirectRoute($user, $currentRoute)
    {
        if ($this->isChangingPassword($user, $currentRoute)) {
            return 'fos_user_change_password';
        } elseif ($this->isAuthenticatedUserOnAnonymousPage($currentRoute)) {
            return 'note_index';
        }
    }

    private function isAuthenticatedUserOnAnonymousPage($currentRoute)
    {
        return in_array(
            $currentRoute,
            [
                'fos_user_security_login',
                'fos_user_resetting_request',
                'fos_user_registration_register',
                'fos_user_security_check'
            ]
        );
    }

    private function isChangingPassword($user, $currentRoute)
    {
        return $user->hasRole('ROLE_CHANGE_PASSWORD')
        && strpos($currentRoute, '_profiler') === false
        && !in_array($currentRoute, ['_wdt', 'fos_user_change_password']);
    }

}