<?php

namespace App\DataFixtures;

use App\Entity\Message;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker;

class MessageFixtures extends Fixture  implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    { 

        $faker = Faker\Factory::create('fr_FR');
                        
        for ($i = 0; $i <= 10; $i++) {
            $message = new Message();
            $message->setSubject($faker->title);
            $message->setContent($faker->text(300)); 
            $message->setIsSeen(0);
            $user = $this->getReference(rand(15, 30));
            $message->setUser($user);
            $manager->persist($message);
        }
        
        $manager->flush();

    }

    public function getDependencies(): array
    {
        return[
            UserFixtures::class
        ];
    } 
}
