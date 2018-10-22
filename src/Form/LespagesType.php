<?php

namespace App\Form;

use App\Entity\Lespages;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LespagesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('letitre')
            ->add('letexte')
            ->add('ladate')
            ->add('auteurauteur')
            ->add('rubriquesrubriques')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Lespages::class,
        ]);
    }
}
