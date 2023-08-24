<?php

namespace App\DataFixtures;

use App\Entity\Media;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker;

class MediaFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
   
        $faker = Faker\Factory::create('fr_FR');
                        
        for ($i = 0; $i <= 20; $i++) {
            $media = new Media;
            $media->setPicture($faker->image);
            $media->setAlt($faker->text(30)); 
            $media->setCaption($faker->text(20)); 

            $project = $this->getReference("project_" . rand(0, 20));
            $media->setProject($project);
         
            $manager->persist($media);
        }
                          
        for ($i = 0; $i <= 20; $i++) {
            $media = new Media;
            $media->setPicture($faker->image);
            $media->setAlt($faker->text(30)); 
            $media->setCaption($faker->text(20)); 
           
            $actu = $this->getReference("actu_" . rand(20, 40));
            $media->setActu($actu);
         
         
            $manager->persist($media);
        }
                          
        for ($i = 0; $i <= 20; $i++) {
            $media = new Media;
            $media->setPicture($faker->image);
            $media->setAlt($faker->text(30)); 
            $media->setCaption($faker->text(20));      

            $supplier = $this->getReference("supplier_" . rand(40, 60));
            $media->setSupplier($supplier);

         
            $manager->persist($media);
        }
        
        $manager->flush();
    }
       public function getDependencies(): array
    {
        return[            
            ProjectFixtures::class,
            ActuFixtures::class,
            SupplierFixtures::class
           
        ];
    } 
}
