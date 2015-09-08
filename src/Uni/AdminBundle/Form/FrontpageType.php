<?php

namespace Uni\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FrontpageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('frontpage_title', 'text', array(
                'label' =>  'frontpage_title',
            ))
            ->add('frontpage_subtitle', 'text', array(
                'label' =>  'frontpage_subtitle',
                'required' => false,
            ))
            ->add('frontpage_email', 'text', array(
                'label' =>  'frontpage_email',
                'required' => false,
            ))
            ->add('frontpage_phonenumber', 'text', array(
                'label' =>  'frontpage_phonenumber',
                'required' => false,
            ))
            ->add('frontpage_address', 'text', array(
                'label' =>  'frontpage_address',
                'required' => false,
            ))
            ->add('frontpage_mission', 'textarea', array(
                'label' =>  'frontpage_mission',
                'required' => false,
                'attr'  =>  array(
                    'class' =>  'tinymce',
                    'data-theme' => 'advanced',
                ),
            ))
            ->add('frontpage_vision', 'textarea', array(
                'label' =>  'frontpage_vision',
                'required' => false,
                'attr'  =>  array(
                    'class' =>  'tinymce',
                    'data-theme' => 'advanced',
                ),
            ))
            ->add('frontpage_special', 'textarea', array(
                'label' =>  'frontpage_special',
                'required' => false,
                'attr'  =>  array(
                    'class' =>  'tinymce',
                    'data-theme' => 'advanced',
                ),
            ))
            ->add('frontpage_active', null, array(
                'label' =>  'frontpage_active',
                'required' => false,
                'attr' => array(
                    'labeled' => true,
                ),
            ))
            ->add('frontpage_photos', 'bootstrap_collection', array(
                'label'                 =>  'frontpage_photos',
                'type'                  =>  new FrontpagePhotoType(),
                'allow_add'             =>  true,
                'allow_delete'          =>  true,
                'add_button_text'       =>  'frontpage_photo_add',
                'delete_button_text'    =>  'frontpage_photo_delete',
                'sub_widget_col'        =>  10,
                'button_col'            =>  2
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Uni\AdminBundle\Entity\Frontpage'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_adminbundle_frontpage';
    }
}
