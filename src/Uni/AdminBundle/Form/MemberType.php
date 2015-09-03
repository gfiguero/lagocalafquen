<?php

namespace Uni\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MemberType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('member_firstname', 'text', array(
                'label' =>  'member_firstname',
            ))
            ->add('member_lastname', 'text', array(
                'label' =>  'member_lastname',
                'required' => false,
            ))
            ->add('member_email', 'text', array(
                'label' =>  'member_email',
                'required' => false,
            ))
            ->add('member_phonenumber', 'text', array(
                'label' =>  'member_phonenumber',
                'required' => false,
            ))
            ->add('member_birthdate', 'birthday', array(
                'label' =>  'member_birthdate',
                'required' => false,
            ))
            ->add('member_admissiondate', 'birthday', array(
                'label' =>  'member_admissiondate',
                'required' => false,
            ))
            ->add('member_active', null, array(
                'label' =>  'member_active',
                'required' => false,
                'attr'  => array(
                    'labeled' => true,
                ),
            ))
            ->add('member_photo_file', 'file', array(
                'label' =>  'member_photo_file',
                'required' => false,
            ))
            ->add('member_role', 'entity', array(
                'label' =>  'member_role',
                'class' => 'UniAdminBundle:Role',
                'choice_label' => 'role_name',
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
            'data_class' => 'Uni\AdminBundle\Entity\Member'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_adminbundle_member';
    }
}
