<?php

namespace App\Controller;

use App\Model\Bird;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController {

    /**
     * @Route("/", name="homepage")
     */
    public function homepage() {

        $birdModel = new Bird();
        $birds = $birdModel->getBirds();

        return $this->render('homepage.html.twig', [
            "birds" => $birds
        ]);
    }

    /**
     * @Route("/bird/{id}", name="bird_detail")
     */
    public function birdDetail(int $id) {

        $birdModel = new Bird(); 
        $bird = $birdModel->getBird($id);

        if($bird == false) {
            return $this->createNotFoundException('Cet oiseu n\'existe pas');
        }

        return $this->render('bird-detail.html.twig', ["bird" => $bird]);
    }
}