<?php

namespace notesBundle\Listener;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use FOS\UserBundle\Event\GetResponseUserEvent;


class RegistrationConfirmListener implements EventSubscriberInterface
{
	private $router;
	
	public function __construct(UrlGeneratorInterface $router)
	{
		$this->router = $router;
	}
	
	/**
	 * {@inheritDoc}
	 */
	public static function getSubscribedEvents()
	{
		return array(
			FOSUserEvents::REGISTRATION_CONFIRM => 'onRegistrationConfirm'
		);
	}
	
	public function onRegistrationConfirm(GetResponseUserEvent $event)
	{
		$url = $this->router->generate('note_index');
		
		$event->setResponse(new RedirectResponse($url));
	}
}