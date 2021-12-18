<?php

declare(strict_types=1); //bonne pratique de typer fort

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class StoreController extends AbstractController
{

    #[Route('/store/products', name: 'store')]
    public function store(): Response
    {
        return $this->render('store/store.html.twig');
    }

    #[Route('/store/product/{id}/details/{slug}', name: 'store_show_product', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function show_product(Request $request, int $id, string $slug): Response
    {
        return $this->render('store/show_product.html.twig', [ 
            'id' => $id,
            'slug' => $slug,
            // 'url' => $request->getUri(),
            // 'ip' => $request->getClientIp(),
            // 'from routing' => $this->generateUrl('store_show_product', [
            //     'id' => $id,
            //     'slug' => $slug  
            // ])

        ]);
    }

}
