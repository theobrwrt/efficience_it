<?php
namespace App\DataFixtures;


use App\Entity\Contact;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ContactFixtures extends Fixture implements DependentFixtureInterface{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */

    CONST ROLES = ['Direction', 'RH', 'Développement', 'Communication'];

    public function load(ObjectManager $manager) {
        $j=0;
        foreach(self::ROLES as $role )  {
            $contact = new Contact();
            $contact->setNom("Dubois".$j);
            $contact->setPrenom("Pierre".$j);
            $contact->setMail("Pierre".$j."dubois".$j."@orange.com");
            $contact->setMessage("Bonjour je suis un homme".$j);
            $contact->setDepartements([$role]);
            $j++;
            $manager->persist($contact);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            DepartementsFixtures::class
        );
    }
}