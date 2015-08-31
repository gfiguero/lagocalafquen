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
            ->add('frontpage_title', null, array(
                'label' =>  'frontpage_title',
            ))
            ->add('frontpage_subtitle', null, array(
                'label' =>  'frontpage_subtitle',
            ))
            ->add('frontpage_email', null, array(
                'label' =>  'frontpage_email',
            ))
            ->add('frontpage_phonenumber', null, array(
                'label' =>  'frontpage_phonenumber',
            ))
            ->add('frontpage_mission', null, array(
                'label' =>  'frontpage_mission',
            ))
            ->add('frontpage_vision', null, array(
                'label' =>  'frontpage_vision',
            ))
            ->add('frontpage_active', null, array(
                'label' =>  'frontpage_active',
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
