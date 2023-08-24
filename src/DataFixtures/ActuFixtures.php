<?php

namespace App\DataFixtures;

use App\Entity\Actu;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;
use Faker;

class ActuFixtures extends Fixture
{
    public function __construct(      
        private SluggerInterface $slugger,
    ) {
    }
    public function load(ObjectManager $manager): void
    {  
        $faker = Faker\Factory::create('fr_FR');
                        
        for ($i = 20; $i <= 40; $i++) {
            $actu = new Actu;
            $actu->setTitle($faker->text(70));
            $actu->setContent($faker->text(600));
            $actu->setSlug($this->slugger->slug($actu->getTitle())->lower());                 
                     
            $this->addReference("actu_" . $i, $actu);

            $manager->persist($actu);
        }

        $manager->flush();
    }
}
