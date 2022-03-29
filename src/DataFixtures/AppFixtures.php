<?php

namespace App\DataFixtures;
use App\Entity\Menu;
use App\Entity\Category;
use App\Entity\Products;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // Creation Produits
        for ($i = 1; $i < 11; $i++){
            $products = new Products;
            $products->setName("Produit $i");
            $manager->persist($products);
        }
        // Creation Menu
        $menu = new Menu;
        $menu->setName("Nouveautés");
        $manager->persist($menu);
        $this->setCategory1($menu,$manager);
        $menu = new Menu;
        $menu->setName("Rangements");
        $manager->persist($menu);
        $this->setCategory2($menu,$manager);
        $menu = new Menu;
        $menu->setName("Accessoires");
        $manager->persist($menu);
        $this->setCategory3($menu,$manager);
    } 
        // Creation des Category
        public function setCategory1(Menu $menu, ObjectManager $manager)
        {
        $category = new Category;
        $category->setName("Plume");
        $category->setMenu($menu);
        $manager->persist($category);
        }
        public function setCategory2(Menu $menu, ObjectManager $manager)
        {
        $category = new Category;
        $category->setName("Caisse");
        $category->setMenu($menu);
        $manager->persist($category);
        $category = new Category;
        $category->setName("Panier");
        $category->setMenu($menu);
        $manager->persist($category);
        }
        public function setCategory3(Menu $menu, ObjectManager $manager)
        {
        $category = new Category;
        $category->setName("Sac");
        $category->setMenu($menu);
        $manager->persist($category);
        $manager->flush();
    }
}
