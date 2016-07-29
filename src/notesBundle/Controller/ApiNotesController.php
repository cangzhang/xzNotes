<?php

namespace notesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use notesBundle\Entity\Note;
use notesBundle\Form\NoteType;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @Route("/api/notes")
 */
class ApiNotesController extends Controller
{
    /*public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $notes = $em->getRepository('notesBundle:Note')->findAll();

        $response = new JsonResponse();
        $response->setData($notes);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }*/

    /**
     * @Route("/")
     * @Method("GET")
     * @return Response
     */
    public function userNotesIndex()
    {
	    $user = $this->get('security.token_storage')->getToken()->getUser();
	    $userId = $user->id;
        $em = $this->getDoctrine()->getManager();
        $userNotes = $em->getRepository('notesBundle:Note')->findBy(
            array('userId' => $userId)
        );

        $response = new JsonResponse();
        $response->setData($userNotes);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/create")
     * @Method("POST")
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $userId = 2;
        $note = new Note();
        $note->setUserId($userId);
        $note->setCreateAt(new \DateTime());
        $note->setUpdateAt(new \DateTime());

        $noteData = json_decode($request->getContent(), true);

        $note->title = $noteData['Title'];
        $note->content = $noteData['Content'];
//        print_r($note);

        $em = $this->getDoctrine()->getManager();
        $em->persist($note);
        $em->flush();

        $response = new Response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/update/{$noteId}")
     * @Method("PUT")
     * @param Request $request
     * @param $noteId
     */
    public function update(Request $request, $noteId)
    {
        $userId = 2;
        $note = new Note();

    }

}