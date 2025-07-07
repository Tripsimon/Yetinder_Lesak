<?php

namespace App\Form;

use App\Entity\Yeti;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EnumType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Enum\Gender;

class YetiForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', )
            ->add('weight')
            ->add('age')
            ->add('height')
            ->add('placeOfStay')
            ->add('gender', EnumType::class,['class' => Gender::class])
            ->add('currentRating')
            ->add('submit', SubmitType::class, ['label'=> 'Vytvořit'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Yeti::class,
        ]);
    }
}
