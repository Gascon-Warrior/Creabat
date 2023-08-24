<?php

namespace App\DataFixtures;

use App\Entity\Supplier;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class SupplierFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
                        
        for ($i = 40; $i <= 60; $i++) {
            $supplier = new Supplier;
            $supplier->setCompany($faker->company);                          
                     
            $this->addReference("supplier_" . $i, $supplier);

            $manager->persist($supplier);
        }

        $manager->flush();
    }
}
