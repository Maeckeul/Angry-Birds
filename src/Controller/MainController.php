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

        return $this->render('homepage.html.twig', []);
    }
}