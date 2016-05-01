<?php

namespace notesBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use notesBundle\Entity\Note;
// use xznotesNoteBundle\DataFixtures\ORM\LoadUserData;

class LoadNoteData extends AbstractFixture implements OrderedFixtureInterface{
    public function load(ObjectManager $em){
        $note1 = new Note();
        $note1 ->setTitle('test')
               ->setContent("This is a test.")
               ->setCreatAt(new \DateTime('now'))
               ->setUpdateAt(new \DateTime('now'));

//        $note1->setUserId($User);

        $em->persist($note1);
        $em->flush();

        $this->addReference('note-note', $note1);

    }
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}