<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Universite;
use App\Entity\Classes;
use App\Entity\Etudiant     ;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $date = \DateTime::createFromFormat('Y-m-d', date('Y-m-d'));              
        for ($i = 0; $i < 20; $i++) {
            $univesite = new Universite();
            $univesite->setName('Universite '.$i);
            $univesite->setAddres("Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.");
            $univesite->setCreated($date);       
            $manager->persist($univesite);
            
            for ($j = 0; $j < 7; $j++) {
            $class = new Classes();
            $class->setLabel('Class '.$j);
            $class->setCreated($date);                 
            $class->setUniversite($univesite);            
            $manager->persist($class);
            // create some students
            for ($k = 0; $k < 20; $k++) {
            $etudiant = new Etudiant();
            
            $etudiant->setFirstname('Etudiant '.$k);
            $etudiant->setLastname('Etudiant '.$k);
            $etudiant->setAddress("Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.");
            $etudiant->setCreated($date);       
            $etudiant->setClasse($class);       
            $etudiant->setAge(rand(21, 25));       
            $etudiant->setPhone(78154548545);       
            $etudiant->setEmail('etudiant '.$k.'gmail.com');       
            $manager->persist($etudiant);
        }
        }
        
        }
            $manager->flush();
    }
}
