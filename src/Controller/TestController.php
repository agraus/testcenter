<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormFactory;
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
     * @Route("/add", methods={"GET"})
     */

    public function book()
    {
        $form = $this->createFormBuilder()
            ->add('name', TextType::class)
            ->add('date', DateTimeType::class)
            ->add('comment', TextareaType::class)
            ->add('pages', IntegerType::class)
            ->add('price', MoneyType::class)
            ->getForm();
        return $this->render('form.html.twig', array(
            'form' => $form->createView()));
    }

    /**
     * @Route("/add", methods={"POST"})
     */

    public function bookEdit($id)
    {

    }
}