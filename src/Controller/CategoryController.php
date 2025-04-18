<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CategoryController extends AbstractController
{
    #[Route('/category', name: 'app_category', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }

    #[Route('/category/{id<\d+>}', name: 'app_category_show', methods: ['GET'])]
    public function getCategories(int $id, LoggerInterface $logger): Response
    {
        $category = [
            'id' => $id,
            'name' => 'Mobile',
            'url' => 'abc',
        ];

        $logger->info('Return API response for category {category-id}',[
            'category-id' => $id
        ]);
        return $this->json([$category]);
    }
}
