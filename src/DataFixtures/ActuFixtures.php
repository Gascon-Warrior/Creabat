<?php

namespace App\DataFixtures;

use App\Entity\Actu;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;
use Faker;

class ActuFixtures extends Fixture implements DependentFixtureInterface
{
    public function __construct(
        private SluggerInterface $slugger,
    ) {
    }
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 42; $i <= 62; $i++) {
            $actu = new Actu;
            $actu->setTitle($faker->text(70));
            $actu->setContent($faker->text(600));
            $actu->setSlug($this->slugger->slug($actu->getTitle())->lower());
            $media = $this->getReference('media_' .$i);
            $actu->setMedia($media);

            $this->addReference("actu_" . $i, $actu);

            $manager->persist($actu);
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
