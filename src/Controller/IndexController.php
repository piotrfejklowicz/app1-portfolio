<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
    /**
     * @Route("/kontakt", name="kontakt")
     */
    public function pageIndex(): Response
    {
        return $this->render("index/kontakt.html.twig", [
            'slug' => 'kontakt',
            'controller_name' => 'IndexController',
        ]);
    }
}
