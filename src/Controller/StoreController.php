<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StoreController extends AbstractController
{

    #[Route('/store/product/{id}/details/{slug}', name: 'show_product', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function show_product(Request $request, int $id, string $slug): Response
    {
        $url = $this->generateUrl('show_product', [
            'id' => $id,
            'slug' => $slug
            
        ]);

        $ip= $request->getClientIp();

        return $this->render('store/show_product.html.twig', [ 
            'id' => $id,
            'slug' => $slug,
            'uri' => $url,
            'ip' => $ip
        ]);
    }

}
