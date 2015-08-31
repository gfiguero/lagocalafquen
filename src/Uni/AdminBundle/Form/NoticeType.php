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
            ->add('notice_title', null, array(
                'label' =>  'notice_title',
            ))
            ->add('notice_content', null, array(
                'label' =>  'notice_content',
            ))
            ->add('notice_published', null, array(
                'label' => 'notice_published',
                'attr' => array(
                    'labeled' => true,
                ),
            ))
            ->add('notice_noticecategory', 'entity', array(
                'class' => 'UniAdminBundle:NoticeCategory',
                'label' =>  'notice_noticecategory',
                'choice_label' => 'noticecategory_name',
                'multiple' => true,
                'expanded' => true,
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
