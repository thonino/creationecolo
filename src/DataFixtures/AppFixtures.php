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
        $category->setName("Objets");
        $category->setMenu($menu);
        $manager->persist($category);
        $this->setObjets($category,$manager);
        $category = new Category;
        $category->setName("Chaussures");
        $category->setMenu($menu);
        $manager->persist($category);
        $this->setChaussures($category,$manager);
        $category = new Category;
        $category->setName("Assiettes");
        $category->setMenu($menu);
        $manager->persist($category);
        $this->setAssiettes($category,$manager);
        }
        public function setRangements(Menu $menu, ObjectManager $manager)
        {
        $category = new Category;
        $category->setName("Caisses");
        $category->setMenu($menu);
        $manager->persist($category);
        $this->setCaisses($category,$manager);
        $category = new Category;
        $category->setName("Paniers");
        $category->setMenu($menu);
        $manager->persist($category);
        $this->setPaniers($category,$manager);
        }
        public function setAccessoires(Menu $menu, ObjectManager $manager)
        {
        $category = new Category;
        $category->setName("Sacs");
        $category->setMenu($menu);
        $manager->persist($category);
        $this->setSacs($category,$manager);

        }

        public function setObjets(Category $category, ObjectManager $manager)
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
        public function setAssiettes(Category $category, ObjectManager $manager)
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
        public function setCaisses(Category $category, ObjectManager $manager)
        {
            $products = new Products;
            $products->setName("Pot A");
            $products->setPrice("25");
            $products->setImage("pot1");
            $products->setDescription("pot blabla");
            $products->setCategory($category);
            $manager->persist($products);
        }
        public function setPaniers(Category $category, ObjectManager $manager)
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
        public function setSacs(Category $category, ObjectManager $manager)
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



