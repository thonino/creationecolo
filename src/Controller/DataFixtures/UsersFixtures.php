<?php

namespace App\DataFixtures;
use App\Entity\Users;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class UsersFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
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

        // Roles Admin Aimerick 
        $users = new Users;
        $users->setEmail("Aimerickwaspro@gmail.com");
        $users->setPassword("$2y$13\$F0GjbSrK24CJqfq/jC64feraz/SkxsfFwlTqNlwDLOEHDpqan.YxG");
        $users->setFirstname("Aimrtick");
        $users->setLastname("Kinsumba");
        $users->setAddress("10 Résidence des champs Lasniers");
        $users->setZipcode("91940");
        $users->setCountry("France");
        $users->setCity("Les Ulis");
        $users->setPhone("0650935790");
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
