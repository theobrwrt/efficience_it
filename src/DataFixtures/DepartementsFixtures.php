<?php
namespace App\DataFixtures;


use App\Entity\Departements;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\ORM\Doctrine\Populator;

class DepartementsFixtures extends Fixture
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $departements = new Departements();
        $departements->setDepNom('Direction');
        $departements->setDepMail('direction@orange.fr');
        $manager->persist($departements);

        $departements = new Departements();
        $departements->setDepNom('Ressources Humaines');
        $departements->setDepMail('rh@orange.fr');
        $manager->persist($departements);

        $departements = new Departements();
        $departements->setDepNom('Développement');
        $departements->setDepMail('dev@orange.fr');
        $manager->persist($departements);

        $departements = new Departements();
        $departements->setDepNom('Communication');
        $departements->setDepMail('com@orange.fr');
        $manager->persist($departements);

        $manager->flush();
    }
}