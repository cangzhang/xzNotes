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
		if ($this->isLoggedIn() && $event->isMasterRequest())
		{
			$currentRoute = $event->getRequest()->attributes->get('_route');
			if ($this->isAuthenticatedUserOnAnonymousPage($currentRoute))
			{
				$response = new RedirectResponse($this->router->generate('note_index'));
				$event->setResponse($response);
			}
		}
	}
	
	private function isLoggedIn()
	{
		$user = $this->tokenStorage->getToken()->getUser();
		return $user instanceof User;
	}
	
	private function isAuthenticatedUserOnAnonymousPage($currentRoute)
	{
		return in_array(
			$currentRoute,
			['fos_user_security_login', 'fos_user_resetting_request', 'fos_user_registration_register', 'fos_user_security_check']
		);
	}
	
}