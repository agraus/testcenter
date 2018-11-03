<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
   /**
    * @Route("/", methods={"GET"})
    */

   public function home()
    {
        return $this->render('home.html.twig');
    }

    /**
     * @Route("/", methods={"POST"})
     */

    public function homeEdit()
    {

    }

    /**
     * @Route("/{id}", methods={"GET"})
     */

    public function author($id)
    {
        return new Response("<h1>$id</h1>");
    }

    /**
     * @Route("/{id}", methods={"POST"})
     */

    public function authorEdit($id)
    {

    }
}