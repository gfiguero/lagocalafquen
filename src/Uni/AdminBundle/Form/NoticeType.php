<?php

namespace Uni\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NoticeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('notice_title', 'text', array(
                'label' =>  'notice_title',
            ))
            ->add('notice_content', 'textarea', array(
                'label' =>  'notice_content',
                'required' => false,
                'attr'  =>  array(
                    'class' =>  'tinymce',
                    'data-theme' => 'advanced',
                ),
            ))
            ->add('notice_published', null, array(
                'label' => 'notice_published',
                'required' => false,
                'attr' => array(
                    'labeled' => true,
                ),
            ))
            ->add('notice_noticecategory', 'entity', array(
                'class' => 'UniAdminBundle:NoticeCategory',
                'label' =>  'notice_noticecategory',
                'choice_label' => 'noticecategory_name',
                'required' => false,
                'multiple' => true,
                'expanded' => true,
            ))
            ->add('notice_photos', 'bootstrap_collection', array(
                'label'                 =>  'notice_photos',
                'type'                  =>  new NoticePhotoType(),
                'allow_add'             =>  true,
                'allow_delete'          =>  true,
                'add_button_text'       =>  'notice_photo_add',
                'delete_button_text'    =>  'notice_photo_delete',
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
            'data_class' => 'Uni\AdminBundle\Entity\Notice'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_adminbundle_notice';
    }
}
