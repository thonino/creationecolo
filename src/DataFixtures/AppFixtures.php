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
        $this->setProducts1($category,$manager);
        }
        public function setCategory2(Menu $menu, ObjectManager $manager)
        {
        $category = new Category;
        $category->setName("Caisse");
        $category->setMenu($menu);
        $manager->persist($category);
        $this->setProducts2($category,$manager);
        $category = new Category;
        $category->setName("Panier");
        $category->setMenu($menu);
        $manager->persist($category);
        $this->setProducts3($category,$manager);
        }
        public function setCategory3(Menu $menu, ObjectManager $manager)
        {
        $category = new Category;
        $category->setName("Sac");
        $category->setMenu($menu);
        $manager->persist($category);
        $this->setProducts4($category,$manager);

        }

        public function setProducts1(Category $category, ObjectManager $manager)
        {
            // Creation Produits
            $products = new Products;
            $products->setName("Cactus");
            $products->setPrice("20");
            $products->setImage("cactus1");
            $products->setDescription("cactus blabla");
            $products->setCategory($category);
            $manager->persist($products);

            $products = new Products;
            $products->setName("Chaussures");
            $products->setPrice("30");
            $products->setImage("chaussure1");
            $products->setDescription("chaussures blabla");
            $products->setCategory($category);
            $manager->persist($products);
        }
        public function setProducts2(Category $category, ObjectManager $manager)
        {
            $products = new Products;
            $products->setName("Panier A");
            $products->setPrice("35");
            $products->setImage("panier1");
            $products->setDescription("Panier blabla");
            $products->setCategory($category);
            $manager->persist($products);
            $products = new Products;
            $products->setName("Panier B");
            $products->setPrice("32");
            $products->setImage("panier2");
            $products->setDescription("Panier blabla");
            $products->setCategory($category);
            $manager->persist($products);
        }
        public function setProducts3(Category $category, ObjectManager $manager)
        {
            $products = new Products;
            $products->setName("Pot A");
            $products->setPrice("25");
            $products->setImage("pot1");
            $products->setDescription("pot blabla");
            $products->setCategory($category);
            $manager->persist($products);
            $products = new Products;
            $products->setName("Pot B");
            $products->setPrice("25");
            $products->setImage("pot2");
            $products->setDescription("pot blabla");
            $products->setCategory($category);
            $manager->persist($products);
            $products = new Products;
            $products->setName("Pot C");
            $products->setPrice("28");
            $products->setImage("pot3");
            $products->setDescription("pot blabla");
            $products->setCategory($category);
            $manager->persist($products);
        }
        public function setProducts4(Category $category, ObjectManager $manager)
        {
            $products = new Products;
            $products->setName("Sac");
            $products->setPrice("38");
            $products->setImage("sac1");
            $products->setDescription("Sac blabla");
            $products->setCategory($category);
            $manager->persist($products);

            $manager->flush();
    }
}



