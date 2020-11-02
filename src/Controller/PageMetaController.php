<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageMetaController extends AbstractController
{
    /**
     * @Route("/page/meta", name="page_meta")
     */
    public function index(): Response
    {
        return $this->render('page_meta/index.html.twig', [
            'controller_name' => 'PageMetaController',
        ]);
    }
}
