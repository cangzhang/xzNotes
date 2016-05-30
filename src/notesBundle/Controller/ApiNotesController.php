<?php

namespace notesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use notesBundle\Entity\Note;
use notesBundle\Form\NoteType;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/api/notes")
 */
class ApiNotesController extends Controller
{
    /**
     * @Route("/")
     * @Method("GET")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $notes = $em->getRepository('notesBundle:Note')->findAll();

        $response = new Response();
        $response->setContent(json_encode($notes));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

}