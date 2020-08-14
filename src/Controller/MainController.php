<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class MainController {
    
    public function homepage() {
        $response = new Response('Homepage');

        return $response;
    }
}