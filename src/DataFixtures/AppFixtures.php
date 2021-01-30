<?php

namespace App\DataFixtures;

use App\Entity\Conference;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $conference = new Conference();
        $conference
        ->setCity('Berlin')
        ->setYear('2020')
        ->setIsInternational(true);

        $manager->persist($conference);
        $manager->flush();
    }
}
