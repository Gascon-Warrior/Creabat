<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use Faker;
use Faker\Factory;

class UserFixtures extends Fixture
{
    public function __construct(
        private UserPasswordHasherInterface $passwordEncoder,
        private SluggerInterface $slugger,
    ) {
    }

    public function load(ObjectManager $manager): void
    {

        $admin = new User();
        $admin->setEmail('damien@test.fr');
        $admin->setFirstname('Damien');
        $admin->setLastname('Duquene');
        $admin->setPhone('0665656565');
        $admin->setPassword(
            $this->passwordEncoder->hashPassword($admin, 'admin')
        );
        $admin->setRoles(['ROLE_ADMIN']);

        $manager->persist($admin);

        $faker = Faker\Factory::create('fr_FR');
                        
        for ($i = 15; $i <= 30; $i++) {
            $user = new User();
            $user->setEmail($faker->email);
            $user->setFirstname($faker->firstName);
            $user->setLastname($faker->lastName);
            $user->setPhone($faker->phoneNumber);
            $user->setPassword(
                $this->passwordEncoder->hashPassword($user, 'secret')
            );   
            $this->setReference($i, $user);
            $manager->persist($user);
        }
        

        $manager->flush();
    }

}
  
