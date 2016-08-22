<?php

namespace notesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/note", name="note")
 */
class NoteController extends Controller
{
    /**
     * @Route("/", name="note_index")
     */
    public function all() {
        return $this->render('notesBundle:Default:index.html.twig');
    }

}
