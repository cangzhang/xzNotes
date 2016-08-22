<?php

namespace notesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use notesBundle\Entity\Note;
use notesBundle\Form\NoteType;

/**
 * Note controller.
 *
 * @Route("/note")
 */
class NoteController extends Controller
{
    /**
     * List all notes.
     *
     * @Route("/", name="note_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        return $this->render('note/index.html.twig');
    }

    /**
     * Create a new note.
     *
     * @Route("/new", name="note_new")
     * @Method({"GET", "POST"})
     */
    public function newAction()
    {
        return $this->render('note/new.html.twig');
    }

    /**
     * Finds and displays a Note entity.
     *
     * @Route("/{id}", name="note_show")
     * @Method("GET")
     */
    public function showAction()
    {
        return $this->render('note/show.html.twig');
    }

}
