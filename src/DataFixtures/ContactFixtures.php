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
    public function load(ObjectManager $manager) {
        for ($i = 0; $i < 10; $i++) {
            $contact = new Contact();
            $contact->setNom("Dubois".$i);
            $contact->setPrenom("Pierre".$i);
            $contact->setMail("Pierre".$i."dubois".$i."@orange.com");
            $contact->setMessage("Bonjour je suis un homme".$i);
            $contact->setDepartements($this->getReference(DepartementsFixtures::ROLES[\rand(0,3)]));
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