<?php

namespace App\Controller\Visitor\AboutUs;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutUsController extends AbstractController
{
    #[Route('/about-us', name: 'visitor.about_us.index', methods:['GET'])]
    public function index(): Response
    {
        return $this->render('pages/visitor/about_us/index.html.twig');
    }
}
