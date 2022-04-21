<?php

namespace App\Controller;

use App\Repository\MenuRepository;
use App\Repository\ProductsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(MenuRepository $menuRepository,ProductsRepository $productsRepository): Response
    {
        return $this->render('/home/index.html.twig', [
            'menus' => $menuRepository->findAll(),
            'products' => $productsRepository->findAll(),
        ]);
}
}
