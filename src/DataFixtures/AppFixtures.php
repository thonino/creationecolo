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
        $this->setNouveautes($menu,$manager);
        $menu = new Menu;
        $menu->setName("Rangements");
        $manager->persist($menu);
        $this->setRangements($menu,$manager);
        $menu = new Menu;
        $menu->setName("Accessoires");
        $manager->persist($menu);
        $this->setAccessoires($menu,$manager);
    } 
        // Creation des Category
        public function setNouveautes(Menu $menu, ObjectManager $manager)
        {
        $category = new Category;
        $category->setName("Object");
        $category->setMenu($menu);
        $manager->persist($category);
        $this->setObject($category,$manager);
        $category = new Category;
        $category->setName("Chaussures");
        $category->setMenu($menu);
        $manager->persist($category);
        $this->setChaussures($category,$manager);
        $category = new Category;
        $category->setName("Assiette");
        $category->setMenu($menu);
        $manager->persist($category);
        $this->setAssiette($category,$manager);
        }
        public function setRangements(Menu $menu, ObjectManager $manager)
        {
        $category = new Category;
        $category->setName("Caisse");
        $category->setMenu($menu);
        $manager->persist($category);
        $this->setCaisse($category,$manager);
        $category = new Category;
        $category->setName("Panier");
        $category->setMenu($menu);
        $manager->persist($category);
        $this->setPanier($category,$manager);
        }
        public function setAccessoires(Menu $menu, ObjectManager $manager)
        {
        $category = new Category;
        $category->setName("Sac");
        $category->setMenu($menu);
        $manager->persist($category);
        $this->setSac($category,$manager);

        }

        public function setObject(Category $category, ObjectManager $manager)
        {
            // Creation Produits
            $products = new Products;
            $products->setName("Cactus");
            $products->setPrice("20");
            $products->setImage("cactus1");
            $products->setDescription("cactus blabla");
            $products->setCategory($category);
            $manager->persist($products);
        }

        public function setChaussures(Category $category, ObjectManager $manager)
        {
            $products = new Products;
            $products->setName("Babouche");
            $products->setPrice("30");
            $products->setImage("babouche1");
            $products->setDescription("babouche blabla");
            $products->setCategory($category);
            $manager->persist($products);
        }
        public function setAssiette(Category $category, ObjectManager $manager)
        {
            $products = new Products;
            $products->setName("Assiette A");
            $products->setPrice("28");
            $products->setImage("assiette1");
            $products->setDescription("Assiette blabla");
            $products->setCategory($category);
            $manager->persist($products);
            $products = new Products;
            $products->setName("Assiette B");
            $products->setPrice("31");
            $products->setImage("assiette2");
            $products->setDescription("Assiette blabla");
            $products->setCategory($category);
            $manager->persist($products);
        }
        public function setCaisse(Category $category, ObjectManager $manager)
        {
            $products = new Products;
            $products->setName("Pot A");
            $products->setPrice("25");
            $products->setImage("pot1");
            $products->setDescription("pot blabla");
            $products->setCategory($category);
            $manager->persist($products);
        }
        public function setPanier(Category $category, ObjectManager $manager)
        {

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
        public function setSac(Category $category, ObjectManager $manager)
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



