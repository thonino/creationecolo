<?php

namespace App\Controller;

use App\Repository\MenuRepository;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NavMenuController extends AbstractController
{

    public function navMenu(MenuRepository $menuRepository,CategoryRepository $categoryRepository): Response
    {
        $menus = $menuRepository->findAll();
        $cats = $categoryRepository->findAll();
        return $this->render('partial/navMenu.html.twig',[
            'menus'=>$menus,
            'cats'=>$cats,
        ]);
    }
}

