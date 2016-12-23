<?php
// src/AppBundle/Form/UserType.php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;

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
		$builder->add('nom', null, array(
					'translation_domain' => false,
					'label' => 'Nom',));
        $builder->add('prenom', null, array(
					'translation_domain' => false,
					'label' => 'Prénom',));
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
