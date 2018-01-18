<?php

namespace Bio\BiodataBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RawType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('day')->add('duration')->add('baseline')->add('hEGLevel')->add('hEGAve')->add('hEGMax')->add('gain')->add('normedGain')->add('maxGain')->add('timeAboveBase')->add('percentSucess')->add('event')->add('eyes');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bio\BiodataBundle\Entity\Raw'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bio_biodatabundle_raw';
    }


}
