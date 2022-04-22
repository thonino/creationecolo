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
        $menu->setNumbre("1");
        $menu->setName("Nouveautés");
        $menu->setImage("nouveautes");
        $manager->persist($menu);
        $this->setNouveautes($menu,$manager);
        $menu = new Menu;
        $menu->setNumbre("2");
        $menu->setName("Rangements");
        $menu->setImage("rangements");
        $manager->persist($menu);
        $this->setRangements($menu,$manager);
        $menu = new Menu;
        $menu->setNumbre("3");
        $menu->setName("Luminaires");
        $menu->setImage("luminaires");
        $manager->persist($menu);
        $this->setLuminaires($menu,$manager);
        $menu = new Menu;
        $menu->setNumbre("4");
        $menu->setName("Textiles");
        $menu->setImage("textiles");
        $manager->persist($menu);
        $this->setTextiles($menu,$manager);
        $menu = new Menu;
        $menu->setNumbre("5");
        $menu->setName("Accessoires");
        $menu->setImage("accessoires");
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
        public function setLuminaires(Menu $menu, ObjectManager $manager)
        {
        $category = new Category;
        $category->setName("Suspensions");
        $category->setMenu($menu);
        $manager->persist($category);
        $this->setSuspensions($category,$manager);
        }
        public function setTextiles(Menu $menu, ObjectManager $manager)
        {
        $category = new Category;
        $category->setName("Tapis");
        $category->setMenu($menu);
        $manager->persist($category);
        $this->setTapis($category,$manager);
        }
        public function setAccessoires(Menu $menu, ObjectManager $manager)
        {
        $category = new Category;
        $category->setName("Sacs");
        $category->setMenu($menu);
        $manager->persist($category);
        $this->setSacs($category,$manager);
        $category = new Category;
        $category->setName("Plateaux");
        $category->setMenu($menu);
        $manager->persist($category);
        $this->setPlateaux($category,$manager);
        }


        // Creation Produits
        public function setObjets(Category $category, ObjectManager $manager)
        {
            $products = new Products;
            $products->setName("Cactus");
            $products->setPrice("20");
            $products->setImage("cactus1");
            $products->setDescription("Description");
            $products->setCategory($category);
            $manager->persist($products);
        }
        public function setChaussures(Category $category, ObjectManager $manager)
        {
            $products = new Products;
            $products->setName("Babouche");
            $products->setPrice("30");
            $products->setImage("babouche1");
            $products->setDescription("Description");
            $products->setCategory($category);
            $manager->persist($products);
        }
        public function setCaisses(Category $category, ObjectManager $manager)
        {
            $products = new Products;
            $products->setName("Pot A");
            $products->setPrice("25");
            $products->setImage("pot1");
            $products->setDescription("Description");
            $products->setCategory($category);
            $manager->persist($products);
        }
        public function setSuspensions(Category $category, ObjectManager $manager)
        {
            $products = new Products;
            $products->setName("Suspension A");
            $products->setPrice("25");
            $products->setImage("suspension1");
            $products->setDescription("Description");
            $products->setCategory($category);
            $manager->persist($products);
        }
        public function setTapis(Category $category, ObjectManager $manager)
        {
            $products = new Products;
            $products->setName("Tapis A");
            $products->setPrice("25");
            $products->setImage("tapis1");
            $products->setDescription("Description");
            $products->setCategory($category);
            $manager->persist($products);
        }
        public function setPaniers(Category $category, ObjectManager $manager)
        {

            $products = new Products;
            $products->setName("Pot B");
            $products->setPrice("25");
            $products->setImage("pot2");
            $products->setDescription("Description");
            $products->setCategory($category);
            $manager->persist($products);
            $products = new Products;
            $products->setName("Pot C");
            $products->setPrice("28");
            $products->setImage("pot3");
            $products->setDescription("Description");
            $products->setCategory($category);
            $manager->persist($products);
        }
        public function setSacs(Category $category, ObjectManager $manager)
        {
            $products = new Products;
            $products->setName("Sac");
            $products->setPrice("38");
            $products->setImage("sac1");
            $products->setDescription("Description");
            $products->setCategory($category);
            $manager->persist($products);
        }

        public function setPlateaux(Category $category, ObjectManager $manager)
        {
            $products = new Products;
            $products->setName("Plateau A");
            $products->setPrice("28");
            $products->setImage("plateau1");
            $products->setDescription("Description");
            $products->setCategory($category);
            $manager->persist($products);
            $products = new Products;
            $products->setName("Plateau B");
            $products->setPrice("31");
            $products->setImage("plateau2");
            $products->setDescription("Description");
            $products->setCategory($category);
            $manager->persist($products);
        $manager->flush();
    }
}



