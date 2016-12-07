<?php
// src/AppBundle/Form/ProfileType.php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom');
        $builder->add('prenom');
        $builder->add('enabled');
        $builder->add('roles', 'collection', array(
                   'type' => 'choice',
                   'options' => array(
                        'label' => false,
                        'choices' => array(
                            'ROLE_USER' => 'Utilisateur',
                            'ROLE_ADMIN' => 'Administrateur'
                       )
                   )
               )
        );
        $builder->add('imageFile', 'vich_file', array(
            'required'      => false,
            'allow_delete'  => true, // not mandatory, default is true
            'download_link' => true, // not mandatory, default is true
        ));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\ProfileFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_profile';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}