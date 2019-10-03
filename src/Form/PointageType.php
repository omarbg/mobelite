<?php

namespace App\Form;

use App\Entity\Pointage;
use App\Entity\Etudiant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class PointageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('createdAt')
            ->add('etudiant',EntityType::class,['class' => Etudiant::class,'choice_label' => function(Etudiant $etudiant ){
                return $etudiant->getFirstname().' '.$etudiant->getLastname();
                
            }])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Pointage::class,
        ]);
    }
}
