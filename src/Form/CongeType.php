<?php

namespace App\Form;

use App\Entity\Conge;
use App\Entity\SoldeConge;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CongeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('employe')
            ->add('datedepart')
            ->add('dateretour')
            ->add('nb_jours')
            ->add('type', ChoiceType::class, [
                'choices'  => [
                    'maladie'=>"solde_maladie",
                    'annuel'=>"solde_annuel",
                    'exception'=>"solde_excepetion",
                    'compensation'=>"solde_compensation",
                ],])
            ->add('motif')
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Conge::class,
        ]);
    }
}
