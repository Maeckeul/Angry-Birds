<?php

namespace App\Controller;

use App\Model\Bird;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController {

    /**
     * @Route("/", name="homepage")
     */
    public function homepage() {

        $birdModel = new Bird();
        $birds = $birdModel->getBirds();

        // $lastBirdId = $session->get('last_bird_id');

        return $this->render('homepage.html.twig', [
            "birds" => $birds,
        ]);
    }

    /**
     * @Route("/bird/{id}", name="bird_detail", requirements={"id" = "\d+"})
     */
    public function birdDetail(int $id, SessionInterface $session) {

        $birdModel = new Bird(); 
        $bird = $birdModel->getBird($id);

        if($bird == false) {
            throw $this->createNotFoundException('Cet oiseau n\'existe pas');
        }

        $session->set('last_bird_id', $id);

        return $this->render('bird-detail.html.twig', ["bird" => $bird]);
    }

    /**
     * @Route("/download_calendar", name="download_calendar")
     */
    public function downloadCalendar() {
        return $this->file('files/angry_birds_2015_calendar.pdf');
    }
}