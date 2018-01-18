<?php

namespace Bio\BiodataBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//        $builder->add('username')->add('firstName')->add('lastName')->add('gender')->add('birthdate')->add('age')->add('email')->add('password')->add('salt')->add('diseases')->add('medications');
        $builder->add('username',TextType::class)->add('firstName',TextType::class)->add('lastName',TextType::class)->add('gender',ChoiceType::class, array(
                'choices'  => array(
                    'Male' => true,
                    'Female' => false,)))->add('birthdate',BirthdayType::class, array(
            'placeholder' => array('year' => 'Year', 'month' => 'Month', 'day' => 'Day',
            )))->add('age')->add('educationalAttainment')->add('email', EmailType::class)->add('phoneNumber', NumberType::class)->add('password', RepeatedType::class, array(
            'type' => PasswordType::class,
            'first_options'  => array('label' => 'Password'),
            'second_options' => array('label' => 'Repeat Password'),
            ))->add('diseases',TextareaType::class)->add('medications',TextareaType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bio\BiodataBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bio_biodatabundle_user';
    }


}
