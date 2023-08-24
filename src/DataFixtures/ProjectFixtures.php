<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use Symfony\Component\String\Slugger\SluggerInterface;

class ProjectFixtures extends Fixture 
{
    public function __construct(      
        private SluggerInterface $slugger,
    ) {
    }
    public function load(ObjectManager $manager): void
    {  
        $faker = Faker\Factory::create('fr_FR');
                        
        for ($i = 0; $i <= 20; $i++) {
            $project = new Project;
            $project->setTitle($faker->text(70));
            $project->setDescription($faker->text(600)); 
            $project->setSlug($this->slugger->slug($project->getTitle())->lower());        
                     
            $this->addReference("project_" . $i, $project);

            $manager->persist($project);
        }

        $manager->flush();
    }
}
