<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DemandeurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('prenom')
				->add('nom')
				->add('status')
				->add('genre')
				->add('dateNaissance')
				->add('villeNaissance')
				->add('deptNaissance')
				->add('paysNaissance')
				->add('nationalite')
				->add('titreSejour')
				->add('autorisationTravail')
				->add('adresse')
				->add('codePostal')
				->add('ville')
				->add('telFixe')
				->add('telPortable')
				->add('email')
				->add('enfant')
				->add('permisConduire')
				->add('typePermisConduire')
				->add('moyenLocomotion')
				->add('moyenLocomotionAutre')
				->add('idPoleEmploi')
				->add('referent')
				->add('structure')
				->add('allocation')
				->add('allocationAutre')
				->add('rqth')
				->add('niveauEtude')
				->add('diplomePro')
				->add('categorieSocioPro')
				->add('metier')
				->add('imageFile', 'vich_file', array(
					'required'      => false,
					'allow_delete'  => true, // not mandatory, default is true
					'download_link' => true, // not mandatory, default is true
				));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Demandeur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_demandeur';
    }
}
