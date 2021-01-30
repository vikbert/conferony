<?php

namespace App\DataFixtures;

use App\Entity\Conference;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $con1 = (new Conference())
            ->setCity('Berlin')
            ->setYear('2020')
            ->setIsInternational(true)
            ->setTags('PHP, Symfony');

        $con2 = (new Conference())
            ->setCity('Peking')
            ->setYear('2021')
            ->setIsInternational(true)
            ->setTags('React.js, JavaScript');

        $con3 = (new Conference())
            ->setCity('Madrid')
            ->setYear('2021')
            ->setIsInternational(true)
            ->setTags('Python, Cloud');

        $manager->persist($con1);
        $manager->persist($con2);
        $manager->persist($con3);
        $manager->flush();
    }
}
