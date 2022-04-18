<?php

namespace App\Controller;

use App\Repository\MenuRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/accueil', name: 'app_home')]
    public function index(MenuRepository $menuRepository): Response
    {
        return $this->render('/home/index.html.twig', [
            'menus' => $menuRepository->findAll(),
        ]);
}
}
