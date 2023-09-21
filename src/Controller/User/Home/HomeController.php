<?php

namespace App\Controller\User\Home;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/user')]
class HomeController extends AbstractController
{
    #[Route('/home', name: 'user.home.index', methods:['GET'])]
    public function index(): Response
    {
        return $this->render('pages/user/home/index.html.twig');
    }
}
