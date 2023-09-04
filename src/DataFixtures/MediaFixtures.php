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


        for ($k = 42; $k <= 62; $k++) {
            $media = new Media;
            $media->setPicture($faker->image);
            $media->setAlt($faker->text(30));
            $media->setCaption($faker->text(20));
            $this->addReference('media_' . $k, $media);

            $manager->persist($media);
        }

        for ($k = 0; $k <= 6; $k++) {
            $media = new Media;
            $media->setPicture($faker->image);
            $media->setAlt($faker->text(30));
            $media->setCaption($faker->text(20));
            $this->addReference('media_' . $k, $media);

            $manager->persist($media);
        }

        for ($k = 21; $k <= 41; $k++) {
            $media = new Media;
            $media->setPicture($faker->image);
            $media->setAlt($faker->text(30));
            $media->setCaption($faker->text(20));
            $this->addReference('media_' . $k, $media);

            $manager->persist($media);
        }

        /*for ($j = 0; $j <= 20; $j++) {
            $media = new Media;
            $media->setPicture($faker->image);
            $media->setAlt($faker->text(30));
            $media->setCaption($faker->text(20));

            $product = $this->getReference("product_" . rand(20, 40));
            $media->setProduct($product);


            $manager->persist($media);
        }*/

        /*for ($j = 0; $j <= 20; $j++) {
            $media = new Media;
            $media->setPicture($faker->image);
            $media->setAlt($faker->text(30));
            $media->setCaption($faker->text(20));

            $category = $this->getReference("category_" . rand(0, 20));
            $media->setCategory($category);
        


            $manager->persist($media);
        }*/


        $manager->flush();
    }
    public function getDependencies(): array
    {
        return [
            ProjectFixtures::class,
            /*ProductFixtures::class,*/
        ];
    }
}
