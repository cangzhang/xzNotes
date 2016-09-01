<?php

namespace notesBundle\Controller;

use notesBundle\Repository\NoteRepository;
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
        return $this->json($userNotes);
    }

    /**
     * @Route("/{noteId}/content")
     * @Method("GET")
     * @param $noteId
     * @return JsonResponse
     */
    public function getOneNote($noteId)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $userId = $user->id;
        $em = $this->getDoctrine()->getManager();
        $userNote = $em->getRepository('notesBundle:Note')->findOneBy(
            array('userId' => $userId,
                'id' => $noteId));
        return $this->json($userNote);
    }

    /**
     * @Route("/create")
     * @Method("POST")
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $userId = $user->id;
        $note = new Note();
        $note->setUserId($userId);
        $note->setCreateAt(new \DateTime());
        $note->setUpdateAt(new \DateTime());

        $noteData = json_decode($request->getContent(), true);
        $note->title = $noteData['title'];
        $note->content = $noteData['content'];

        $em = $this->getDoctrine()->getManager();
        $em->persist($note);
        $em->flush();

        $response = new Response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/{noteId}/edit")
     * @Method("PUT")
     * @param Request $request
     * @param $noteId
     * @return Response
     */
    public function update(Request $request, $noteId)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $userId = $user->id;

        $em = $this->getDoctrine()->getManager();
        $userNote = $em->getRepository('notesBundle:Note')->findOneBy(
            array('userId' => $userId,
                  'id' => $noteId));
        $noteData = json_decode($request->getContent(), true);
        $userNote->title = $noteData['title'];
        $userNote->content = $noteData['content'];
        $userNote->updateAt = new \DateTime();

        $em->persist($userNote);
        $em->flush();

        $response = new Response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

}