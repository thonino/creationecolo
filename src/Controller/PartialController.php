<?php

namespace App\Controller;
use App\Entity\Menu;
use App\Repository\MenuRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PartialController extends AbstractController
{
    #[Route('/nav', name: 'app_partial_nav')]
    public function nav(MenuRepository $menuRepository): Response
    {
        return $this->render('partial/nav.html.twig', [
            'controller_name' => 'PartialController',
            'menus' => $menuRepository->findAll(),
        ]);
    }
    #[Route('/footer', name: 'app_partial_footer')]
    public function footer(): Response
    {
        return $this->render('partial/footer.html.twig', [
            'controller_name' => 'PartialController',
        ]);
    }
}
