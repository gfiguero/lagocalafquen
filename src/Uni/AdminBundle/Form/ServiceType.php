<?php

namespace Uni\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ServiceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('service_title', null, array(
                'label' =>  'service_title',
            ))
            ->add('service_content', null, array(
                'label' =>  'service_content',
            ))
            ->add('service_rank', null, array(
                'label' =>  'service_rank',
            ))
            ->add('service_published', null, array(
                'label' =>  'service_published',
            ))
            ->add('service_photo_path', null, array(
                'label' =>  'service_photo_path',
            ))
            ->add('service_photo_file', null, array(
                'label' =>  'service_photo_file',
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Uni\AdminBundle\Entity\Service'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_adminbundle_service';
    }
}
