<?php

namespace App\Form;

use App\Entity\Yeti;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EnumType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\Positive;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;;
use App\Enum\Gender;

class YetiForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
    'label' => 'Jméno',
])
            ->add('weight', IntegerType::class, [
                'label' => 'Váha',
                'constraints' => [
                    new Positive([
                        'message' => 'Hodnota musí být kladné číslo.',
                    ]),
                ],
            ])
            ->add('age', IntegerType::class, [
                'label' => 'Věk',
                'constraints' => [
                    new Positive([
                        'message' => 'Hodnota musí být kladné číslo.',
                    ]),
                ],
            ])
            ->add('height', IntegerType::class, [
                'label' => 'Výška',
                'constraints' => [
                    new Positive([
                        'message' => 'Hodnota musí být kladné číslo.',
                    ]),
                ],
            ])
            ->add('placeOfStay')
            ->add('gender', EnumType::class, ['class' => Gender::class])
            ->add('currentRating')
            ->add('submit', SubmitType::class, ['label' => 'Vytvořit'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Yeti::class,
        ]);
    }
}
