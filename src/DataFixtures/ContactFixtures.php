<?php
namespace App\DataFixtures;


use App\Entity\Contact;
use App\Entity\Departements;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\ORM\Doctrine\Populator;

class ContactFixtures extends Fixture {

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager) {
        $generator = \Faker\Factory::create('fr_FR');
        $populator = new Populator($generator, $manager);
        for ($i = 0; $i < 10; $i++) {
            $populator->addEntity('\App\Entity\Contact', 1, array(
                'nom' => function() use ($generator) {
                    return $generator->firstName();
                    },
                'prenom' => function() use ($generator) {
                    return $generator->lastName();
                },
                'mail' => function() use ($generator){
                    return $generator->email();
                },
                'message' => function() use($generator){
                    return $generator->realText(255);
                }
            ));

            $populator->execute();
        }
        $manager->flush();
    }
}