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
     * @Route("/{slug}", name="kontakt")
     */
    public function pageIndex($slug): Response
    {
        return $this->render("index/$slug.html.twig", [
            'slug' => $slug,
            'controller_name' => 'IndexController',
        ]);
    }
}
