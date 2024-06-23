<?php

namespace App\Form;

use App\Entity\Enseignant;
use App\Entity\Matiere;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddMatiereToEnseignantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('enseignant', EntityType::class, [
                'class' => Enseignant::class,
                'choice_label' => 'email',
                'label' => 'Enseignant',
            ])
            ->add('matieres', EntityType::class, [
                'class' => Matiere::class,
                'choice_label' => 'nom',
                'multiple' => true,
                'expanded' => true,
                'label' => 'Matières',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([]);
    }
}
