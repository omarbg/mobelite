<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Universite;
use App\Entity\Classes;

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
        }
    
        // $product = new Product();
        // $manager->persist($product);
        for ($i = 0; $i < 40; $i++) {
            $class = new Classes();
            $k = rand(1, 20);
            $class->setLabel('Class '.$i);
            $univesite->setCreated($date);                 
            $class->setAddres("Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.");
            $class->setCreated($date);       
            $manager->persist($class);
            
            
        }
        // $product = new Product();
        // $manager->persist($product);
        for ($i = 0; $i < 20; $i++) {
            $univesite = new Universite();
            $univesite->setName('Universite '.$i);
            $univesite->setAddres("Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.");
            $date = \DateTime::createFromFormat('Y-m-d', date('Y-m-d'));              
            $univesite->setCreated($date);       
            $manager->persist($univesite);
        }
        $manager->flush();
    }
}
