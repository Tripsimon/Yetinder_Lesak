<?php

namespace App\DataFixtures;

use App\Entity\Yeti;
use App\Enum\Gender;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        for ($i=1; $i < 11; $i++) { 
            $newYeti = new Yeti;
            $newYeti->setName("Fixture Yeti - " . $i);
            $newYeti->setWeight(250.10);
            $newYeti->setAge(18 + $i);
            $newYeti->setHeight(240.20);
            $newYeti->setGender(($i % 2) == 0 ? Gender::Male : Gender::Female);
            $newYeti->setPlaceOfStay("Horní Kalná");
            $newYeti->setCurrentRating(0);
            $manager->persist($newYeti);
        }



        $manager->flush();
    }
}
