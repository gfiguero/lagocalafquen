<?php

namespace Uni\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user_username', 'text', array(
                'label' => 'user_username',
            ))
            ->add('user_firstname', 'text', array(
                'label' => 'user_firstname',
                'required' => false,
            ))
            ->add('user_lastname', 'text', array(
                'label' => 'user_lastname',
                'required' => false,
            ))
            ->add('user_phonenumber', 'text', array(
                'label' => 'user_phonenumber',
                'required' => false,
            ))
            ->add('email', 'text', array(
                'label' => 'email',
            ))
            ->add('password', 'text', array(
                'label' => 'password',
            ))
            ->add('enabled', 'checkbox', array(
                'label' => 'enabled',
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
            'data_class' => 'Uni\AdminBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_adminbundle_user';
    }
}
