<?php
// src/AppBundle/Form/UserType.php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class UserType extends AbstractType
{

	/**
	* @var string
	*/
	private $class;
	
	/**
	* @param string $class The User class name
	*/
	public function __construct($class = 'AppBundle\Entity\User')
	{
		$this->class = $class;
	}
		
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder->add('enabled', null, array(
					'translation_domain' => false,
					'label' => 'Activer/Désactiver le compte',
				));
        $builder->add('roles', 'collection', array(
				   'translation_domain' => false,
				   'label' => 'Rôles',
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
    }

    public function getBlockPrefix()
    {
        return 'app_users_edit';
    }
}
