<?php

namespace Uni\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReportType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('report_title', null, array(
                'label' =>  'report_title',
            ))
            ->add('report_content', null, array(
                'label' =>  'report_content',
                'required' => false,
                'attr'  =>  array(
                    'class' =>  'tinymce',
                    'data-theme' => 'advanced',
                ),
            ))
            ->add('report_published', null, array(
                'label' =>  'report_published',
                'required' => false,
                'attr' => array(
                    'labeled' => true,
                ),
            ))
            ->add('report_photo_file', 'file', array(
                'label' =>  'report_photo_file',
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
            'data_class' => 'Uni\AdminBundle\Entity\Report'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_adminbundle_report';
    }
}
