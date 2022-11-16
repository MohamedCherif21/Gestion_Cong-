<?php

namespace App\Form;

use App\Entity\SoldeConge;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SoldeCongeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('employe')
            ->add('solde_compensation')
            ->add('solde_maladie')
            ->add('solde_exception')
            ->add('solde_annuel')
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SoldeConge::class,
        ]);
    }
}
