<?php


namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DepartementIdType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'choices' => [
                "Développeur" => 3,
                "Communication" => 4,
                "Ressources Humaines" => 2,
                "Direction" => 1
            ],
            'multiple' => false,
            'expanded' => false,
        ]);
    }


    public function getParent(){
        return ChoiceType::class;
    }

}