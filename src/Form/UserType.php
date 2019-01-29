<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('sexe')
            ->add('datenaissance')
            ->add('nationalite')
            ->add('telephone')
            ->add('addresse')
            ->add('codepostale')
            ->add('ville')
            ->add('email')
            ->add('mdp')
            ->add('recevoirmail')
            ->add('accident')
            ->add('droitimage')
            ->add('infocomplementaire')
            ->add('idrole')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
