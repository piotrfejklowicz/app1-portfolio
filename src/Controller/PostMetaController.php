<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostMetaController extends AbstractController
{
    /**
     * @Route("/content/field", name="content_field")
     */
    public function index(): Response
    {
        return $this->render('content_field/index.html.twig', [
            'controller_name' => 'PostMetaController',
        ]);
    }
}
