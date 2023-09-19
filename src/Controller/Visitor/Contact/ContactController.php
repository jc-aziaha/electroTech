<?php

namespace App\Controller\Visitor\Contact;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'visitor.contact.create', methods:['GET', 'POST'])]
    public function create(): Response
    {
        return $this->render('pages/visitor/contact/create.html.twig');
    }
}
