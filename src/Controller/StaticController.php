<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaticController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('static/index.html.twig', []);
    }

    /**
     * @Route("/qui-sommes-nous", name="site:about")
     */
    public function qui_sommes_nous(): Response
    {
        return $this->render('static/qui_sommes_nous.html.twig', []);
    }

    /**
     * @Route("/contact", name="site:contact")
     */
    public function contact(): Response
    {
        return $this->render('static/contact.html.twig', []);
    }
}
