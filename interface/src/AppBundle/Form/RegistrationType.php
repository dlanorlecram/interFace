<?php
// src/AppBundle/Form/RegistrationType.php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder->remove('username');
        $builder->add('nom', null, array(
					'translation_domain' => false,
					'label' => 'Nom',));
        $builder->add('prenom', null, array(
					'translation_domain' => false,
					'label' => 'Prénom',));
        $builder->add('roles', 'collection', array(
					'translation_domain' => false,
					'label' => 'Rôle',
                    'type' => 'choice',
                    'options' => array(
                        'label' => false,
                        'choices' => array(
                            'ROLE_USER' => 'Référent',
                            'ROLE_ADMIN' => 'Administrateur'
                       )
                   )
               )
        );
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }

}
