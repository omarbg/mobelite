<?php

namespace App\Form;

use App\Entity\Etudiant;
use App\Entity\Classes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class EtudiantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('age')
            ->add('address')
            ->add('phone')
            ->add('email')
            ->add('classe',EntityType::class,['class'=>Classes::class,'choice_label'=>'label'])
            ->add('cv', FileType::class, ['label' => 'CV (PDF file)'])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Etudiant::class,
        ]);
    }
}
