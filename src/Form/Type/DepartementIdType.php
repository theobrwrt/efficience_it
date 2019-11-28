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
                'Développeur' => 'Développeur',
                'Communication' => 'Communication',
                'Ressources Humaines' =>'Ressources Humaines',
                'Direction' => 'Direction'

            ],
            'multiple' => true,
            'expanded' => true,
        ]);
    }


    public function getParent(){
        return ChoiceType::class;
    }

}