<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController {

    /**
    * @Route("/")
    */
    public function homepage() {
        $response = new Response('<h1>Homepage</h1>');

        return $response;
    }

    /**
    * @Route("/contact")
    */
    public function contact() {
        
        $response = new Response('<h1>Contact</h1>');

        return $response;
    }
}