<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', []);
    }

    #[Route('/products', name: 'app_home_products')]
    public function products(): Response
    {
        return $this->render('home/products.html.twig', [
            'product_name' => 'abc'
        ]);
    }i
}
