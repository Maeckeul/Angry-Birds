<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController {

    /**
    * @Route("/")
    */
    public function homepage() {
        //$response = new Response('<h1>Homepage</h1>');

        //return $response;

        return $this->render('homepage.html.twig');
    }

    /**
    * @Route("/contact")
    */
    public function contact() {
        
        $response = new Response('<h1>Contact</h1>');

        return $response;
    }

    /**
     * @Route("/product/{id}", name="product", requirements={"id"="\d+"})
     */
    public function product(int $id) {
        $response = new Response("<h1>Product $id</h1>");
        return $response;
    }
}