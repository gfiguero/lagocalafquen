<?php

namespace Uni\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PublicationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('publication_title', null, array(
                'label' =>  'publication_title',
            ))
            ->add('publication_content', null, array(
                'label' =>  'publication_content',
                'required' => false,
                'attr'  =>  array(
                    'class' =>  'tinymce',
                    'data-theme' => 'advanced',
                ),
            ))
            ->add('publication_rank', null, array(
                'label' =>  'publication_rank',
            ))
            ->add('publication_active', null, array(
                'label' =>  'publication_active',
                'required' => false,
                'attr'  => array(
                    'labeled' => true,
                ),
            ))
            ->add('publication_photo_file', 'file', array(
                'label' =>  'publication_photo_file',
                'required' => false,
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Uni\AdminBundle\Entity\Publication'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_adminbundle_publication';
    }
}
