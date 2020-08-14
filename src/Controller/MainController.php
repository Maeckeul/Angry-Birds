<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class MainController {

    public function homepage() {
        $response = new Response('<h1>Homepage</h1>');

        return $response;
    }
}