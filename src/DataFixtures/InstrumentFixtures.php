<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Instrument;
use App\Entity\Family;

class InstrumentFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $fam1 = new Family();
        $fam1->setName('strings');

        $fam2 = new Family();
        $fam2->setName('wind');

        $fam3 = new Family();
        $fam3->setName('percussion');

        $manager->persist($fam1);
        $manager->persist($fam2);
        $manager->persist($fam3);

        $manager->flush();

        $inst1 = new Instrument();
        $inst1->setName('guitar');
        $inst1->setFamily($fam1);

        $inst2 = new Instrument();
        $inst2->setName('cello');
        $inst2->setFamily($fam1);

        $inst3 = new Instrument();
        $inst3->setName('cymbal');
        $inst3->setFamily($fam3);

        $manager->persist($inst1);
        $manager->persist($inst2);
        $manager->persist($inst3);

        $manager->flush();
    }
}
