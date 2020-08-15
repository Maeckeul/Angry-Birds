<?php

namespace App\Controller;

use App\Model\Bird;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController {

    /**
     * @Route("/api/birds", name="api_birds_list")
     */
    public function birdApi() {
        $birdModel = new Bird();
        $birds = $birdModel->getBirds();
        return $this->json($birds);
    }
}