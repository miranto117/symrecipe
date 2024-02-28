<?php

namespace App\DataFixtures;

use App\Entity\Ingredient;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Generator;

class AppFixtures extends Fixture
{   
    //Creer un attribut pour faker
    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
    }

    public function load(ObjectManager $manager): void
    {   
        for ($i=0; $i <= 49; $i++) { 
            //Creer un instance de l'entité
            $ingredient = new Ingredient();
            //Affectation ou setters de notre proprieté
            $ingredient->setName($this->faker->word());
            $ingredient->setPrice(mt_rand(0, 100));

            //Persistance de notre instance avec manager Objectmanager
            $manager->persist($ingredient);
        }
        //Flusher notre instance
        $manager->flush();
    }
}
