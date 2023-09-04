<?php

namespace App\DataFixtures;

use App\Entity\Supplier;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker;

class SupplierFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
                        
        for ($i = 21; $i <= 41; $i++) {
            $supplier = new Supplier;
            $supplier->setCompany($faker->company);                          
            $media= $this->getReference('media_' . $i);
            $supplier->setMedia($media);
            $this->addReference("supplier_" . $i, $supplier);

            $manager->persist($supplier);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            MediaFixtures::class,
        ];
    }
    
}
