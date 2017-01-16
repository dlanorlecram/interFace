<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class DemandeurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('prenom', null, array(
					'translation_domain' => false,
					'label' => 'Prénom*',))
				->add('nom', null, array(
					'translation_domain' => false,
					'label' => 'Nom*',))
				->add('status', null, array(
					'translation_domain' => false,
					'label' => 'Status',))
				->add('genre', null, array(
					'translation_domain' => false,
					'label' => 'Genre',))
				->add('dateNaissance', 'birthday', array(
					'format' => 'dd - MMMM - yyyy',
					'widget' => 'choice',
					'years' => range(date('Y'), date('Y')-100),
					'translation_domain' => false,
					'label' => 'Date de naissance',))
				->add('villeNaissance', null, array(
					'translation_domain' => false,
					'label' => 'Ville de naissance',))
				->add('deptNaissance', null, array(
					'translation_domain' => false,
					'label' => 'Département de naissance',))
				->add('paysNaissance', null, array(
					'translation_domain' => false,
					'label' => 'Pays de naissance',))
				->add('nationalite', null, array(
					'translation_domain' => false,
					'label' => 'Nationalité',))
				->add('titreSejour', null, array(
					'translation_domain' => false,
					'label' => 'Titre de Séjour',))
				->add('autorisationTravail', null, array(
					'translation_domain' => false,
					'label' => 'Autorisation de travail',))
				->add('adresse', null, array(
					'translation_domain' => false,
					'label' => 'Adresse',))
				->add('codePostal', null, array(
					'translation_domain' => false,
					'label' => 'Code postal',))
				->add('ville', null, array(
					'translation_domain' => false,
					'label' => 'Ville',))
				->add('QPV', null, array(
					'translation_domain' => false,
					'label' => 'QPV',))
				->add('QPVNom', null, array(
					'translation_domain' => false,
					'label' => 'Quartier',))
				->add('telFixe', null, array(
					'translation_domain' => false,
					'label' => 'Téléphone fixe',))
				->add('telPortable', null, array(
					'translation_domain' => false,
					'label' => 'Téléphone Portable*',))
				->add('email', null, array(
					'translation_domain' => false,
					'label' => 'Email',))
				->add('enfant', null, array(
					'translation_domain' => false,
					'label' => 'Nombre d’enfant',))
				->add('permisConduire', null, array(
					'translation_domain' => false,
					'label' => 'Permis de conduire',))
				->add('typePermisConduire', null, array(
					'translation_domain' => false,
					'label' => 'Type de permis de conduire',))
				->add('moyenLocomotion', null, array(
					'translation_domain' => false,
					'label' => 'Moyen de locomotion',))
				->add('moyenLocomotionAutre', null, array(
					'translation_domain' => false,
					'label' => 'Autre',))
				->add('idPoleEmploi', null, array(
					'translation_domain' => false,
					'label' => 'Identifiant Pôle Emploi',))
				->add('referent', null, array(
					'translation_domain' => false,
					'label' => 'Référent',))
				->add('structure', null, array(
					'translation_domain' => false,
					'label' => 'Structure',))
				->add('allocation', null, array(
					'translation_domain' => false,
					'label' => 'Allocation',))
				->add('allocationAutre', null, array(
					'translation_domain' => false,
					'label' => 'Autre',))
				->add('rqth', null, array(
					'translation_domain' => false,
					'label' => 'Reconnaissance RQTH',))
				->add('niveauEtude', null, array(
					'translation_domain' => false,
					'label' => 'Niveau d’étude',))
				->add('diplomePro', null, array(
					'translation_domain' => false,
					'label' => 'Diplôme professionel',))
				->add('categorieSocioPro', null, array(
					'translation_domain' => false,
					'label' => 'Catégorie Socio-professionel',))
				->add('metier', null, array(
					'translation_domain' => false,
					'label' => 'Métier',))
				->add('description', null, array(
					'translation_domain' => false,
					'label' => 'Description',))
				->add('imageFile', 'vich_file', array(
					'required'      => false,
					'allow_delete'  => true, // not mandatory, default is true
					'download_link' => true, // not mandatory, default is true
					'label' => 'Photo'
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
