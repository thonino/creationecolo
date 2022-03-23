<?php

namespace App\DataFixtures;

use App\Entity\Menu;
use App\Entity\Users;
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
        $menu->setName("Accessoires");
        $manager->persist($menu);
        $menu = new Menu;
        $menu->setName("Paniers");
        $manager->persist($menu);
        $menu = new Menu;
        $menu->setName("Suspension");
        $manager->persist($menu);

        // Creation Category
        for ($i = 0; $i < 5; $i++){
            $category = new Category;
            $category->setName("Category $i");
            $manager->persist($category);
        }
        // Creation Produits
        for ($i = 0; $i < 20; $i++){
            $products = new Products;
            $products->setName("Produit $i");
            $manager->persist($products);
        }
        // Roles Admin 
        $users = new Users;
        $users->setEmail("thonino@gmail.com");
        $users->setPassword("$2y$13\$Wd31Kq5FzYD70ewiB1b/MOI0IP7ts5YrhQJAjFz40iGjHxhPXFxm.");
        $users->setFirstname("Thonino");
        $users->setLastname("Ben");
        $users->setAddress("1 rue de la joie");
        $users->setZipcode("75001");
        $users->setCountry("France");
        $users->setCity("Paris");
        $users->setPhone("0616956773");
        $users->setRoles(['ROLE_ADMIN']);
        $manager->persist($users);
        // Roles User 
        $users = new Users;
        $users->setEmail("toky@gmail.com");
        $users->setPassword("$2y$13\$cPBmRKhQFiRxk3i8B.hUCubyMm3m0umy8aNs2S/AKhh1pMpPnVKHu");
        $users->setFirstname("Toky");
        $users->setLastname("Ben");
        $users->setAddress("2 rue de la joie");
        $users->setZipcode("75002");
        $users->setCountry("France");
        $users->setCity("Paris");
        $users->setPhone("0616956773");
        $manager->persist($users);
        $manager->flush();
    }
}
