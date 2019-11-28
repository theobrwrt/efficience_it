<?php
namespace App\DataFixtures;


use App\Entity\Departements;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class DepartementsFixtures extends Fixture
{
    CONST ROLES = ['Direction', 'RH', 'Développement', 'Communication'];
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        foreach(DepartementsFixtures::ROLES as $role) {
            $departements = new Departements();
            $departements->setDepNom($role);
            $departements->setDepMail('direction@orange.fr');
            $this->addReference($departements->getDepNom(), $departements);
            $manager->persist($departements);
        }

        $manager->flush();
    }

}