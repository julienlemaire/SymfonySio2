<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class FormUser extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('sexe', ChoiceType::class, array(
                'choices' => array(
                    'Homme' => true,
                    'Femme' => false
                ),))
            ->add('datenaissance')
            ->add('nationalite', ChoiceType::class, array(
                'choices' => array('chypriote' => 'chypriote', 'cubain' => 'cubain',
                '	africain	' =>'africain',
                '	algérien	' => 'algérien',
                '   allemand		' => '   allemand		',
                '	anglais		' => '	anglais		',
                '	argentin	' => '	argentin	',
                '	asiatique	' => '	asiatique	',
                '	australien	' => '	australien	',
                '	autrichien	' => '	autrichien	',
                '	égyptien	' => '	égyptien	',
                '	équatorien	' => '	équatorien	',
                '	espagnol	' => '	espagnol	',
                '	estonien	' => '	estonien	',
                '	européen	' => '	européen	',
                '	indien		' => '	indien		',
                '	indonésien	' => '	indonésien	',
                '	irlandais		' => '	irlandais		',
                '	italien		' => '	italien		',
                '    océanien	' => '    océanien	',
                '	uruguayen	' => '	uruguayen	',
                '	belge		' => '	belge		',
                '	bolivien	' => '	bolivien	',
                ' 	bulgare		' => ' 	bulgare		',
                ' 	chinois		' => ' 	chinois		',
                ' 	colombien	' => ' 	colombien	',
                ' 	coréen		' => ' 	coréen		',
                ' 	finlandais 	' => ' 	finlandais 	',
                ' 	français	' => ' 	français	',
                ' 	grec		' => ' 	grec		',
                ' 	hongrois	' => ' 	hongrois	',
                ' 	jamaïcain	' => ' 	jamaïcain	',
                ' 	tton		' => ' 	tton		',
                ' 	lituanien	' => ' 	lituanien	',
                ' 	norvégien	' => ' 	norvégien	',
                ' 	néo-calédonien	' => ' 	néo-calédonien	',
                ' 	néo-zéndais	' => ' 	néo-zéndais	',
                '	polonais	' => '	polonais	',
                ' 	congois		' => ' 	congois		',
                '	dominicain	' => '	dominicain	',
                '	tchèque		' => '	tchèque		',
                '	roumain		' => '	roumain		',
                '	russe		' => '	russe		',
                '	suédois		' => '	suédois		',
                '	suisse		' => '	suisse		',
                '	syrien		' => '	syrien		',
                '	tunisien	' => '	tunisien	',
                '	turc		' => '	turc		',
                '	brésilien	' => '	brésilien	',
                '	camerounais	' => '	camerounais	',
                '	canadien	' => '	canadien	',
                '	chilien		' => '	chilien		',
                '	costaricien	' => '	costaricien	',
                '	danois		' => '	danois		',
                '	guatémaltèque	' => '	guatémaltèque	',
                '	hondurien	' => '	hondurien	',
                '	japonais	' => '	japonais	',
                '	luxembourgeois	' => '	luxembourgeois	',
                '	marocain	' => '	marocain	',
                '	mexicain	' => '	mexicain	',
                '	pakistanais	' => '	pakistanais	',
                '	panaméen	' => '	panaméen	',
                '	paraguayen	' => '	paraguayen	',
                '	péruvien	' => '	péruvien	',
                ' 	portoricain	' => ' 	portoricain	',
                '	portugais	' => '	portugais	',
                '	salvadorien	' => '	salvadorien	',
                '	vénézuélien	' => '	vénézuélien	',
                '	vietnamien	' => '	vietnamien	',
                ' 	américain	' => ' 	américain	',
                '	holandais	' => '	holandais	',
                ' 	philippin	' => ' 	philippin	',
                '	maltais		' => '	maltais		',
                '	tahitien	' => '	tahitien	'),))
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
            ->add('save',SubmitType::class)
            ;      
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
