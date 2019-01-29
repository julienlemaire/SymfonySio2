<?php

namespace App\Form;

use App\Entity\Infosupplementaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InfosupplementaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('assurance')
            ->add('garantie')
            ->add('optiongarantie')
            ->add('typePaiement')
            ->add('demandeFacture')
            ->add('niveauTechnique')
            ->add('dateCreation')
            ->add('passJeune')
            ->add('dossierComplet')
            ->add('iduser')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Infosupplementaire::class,
        ]);
    }
}
