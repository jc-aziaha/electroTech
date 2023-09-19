<?php

namespace App\Controller\Visitor\Catalog;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogController extends AbstractController
{
    #[Route('/catalog', name: 'visitor.catalog.index', methods:['GET'])]
    public function index(): Response
    {
        return $this->render('pages/visitor/catalog/index.html.twig');
    }
}
