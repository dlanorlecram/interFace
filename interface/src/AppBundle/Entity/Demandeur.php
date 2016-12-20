<?php
// src/AppBundle/Entity/Demandeur.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use AppBundle\DBAL\Types\DemandeurStatus;
use AppBundle\DBAL\Types\DemandeurMoyenLocomotion;
use AppBundle\DBAL\Types\DemandeurAllocation;
use AppBundle\DBAL\Types\DemandeurNiveauEtude;
use AppBundle\DBAL\Types\DemandeurCategorieSocioPro;
use Fresh\DoctrineEnumBundle\Validator\Constraints as DoctrineAssert;

/**
 * @ORM\Entity
 * @Vich\Uploadable
 * @ORM\Table(name="demandeur")
 */
class Demandeur
{
	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=1,
     *     max=255,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $prenom;
    
    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=1,
     *     max=255,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $nom;
    
    /**
     * @ORM\Column(name="position", type="DemandeurStatus", nullable=false)
     * @DoctrineAssert\Enum(entity="AppBundle\DBAL\Types\DemandeurStatus")     
     */
    protected $status;
    
    /**
     * @ORM\Column(type="date", nullable=true)
     *
     * @var \Date
     */
	protected $dateNaissance;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
	protected $villeNaissance;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
	protected $deptNaissance;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
	protected $paysNaissance;
	
	/**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
	protected $nationalite;
	
	/**
     * @ORM\Column(type="boolean")
     *
     */
	protected $titreSejour;
	
	/**
     * @ORM\Column(type="boolean")
     *
     */
	protected $autorisationTravail;
	
	/**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
	protected $adresse;
	
	/**
     * @ORM\Column(type="integer", nullable=true)
     *
     */
	protected $codePostal;
	
	/**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
	protected $ville;
	
	/**
     * @ORM\Column(type="integer", nullable=true)
     *
     */
	protected $telFixe;
	
	/**
     * @ORM\Column(type="integer", nullable=false)
     *
     */
	protected $telPortable;
	
	/**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
	protected $email;
	
	/**
     * @ORM\Column(type="integer", nullable=true)
     *
     */
	protected $enfant;
	
	/**
     * @ORM\Column(type="boolean")
     *
     */
	protected $permisConduire;
	
	/**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
	protected $typePermisConduire;
	
	/**
     * @ORM\Column(name="moyenLocomotion", type="DemandeurMoyenLocomotion", nullable=true)
     * @DoctrineAssert\Enum(entity="AppBundle\DBAL\Types\DemandeurMoyenLocomotion")     
     */
    protected $moyenLocomotion;
	
	/**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
	protected $moyenLocomotionAutre;
	
	/**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
	protected $idPoleEmploi;
	
	/**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
	protected $referent;
	
	/**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
	protected $structure;
	
	/**
     * @ORM\Column(name="allocation", type="DemandeurAllocation", nullable=true)
     * @DoctrineAssert\Enum(entity="AppBundle\DBAL\Types\DemandeurAllocation")     
     */
    protected $allocation;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
	protected $allocationAutre;
	
	/**
     * @ORM\Column(type="boolean")
     *
     */
	protected $rqth;
	
	/**
     * @ORM\Column(name="niveauEtude", type="DemandeurNiveauEtude", nullable=true)
     * @DoctrineAssert\Enum(entity="AppBundle\DBAL\Types\DemandeurNiveauEtude")     
     */
    protected $niveauEtude;
	
	/**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
	protected $diplomePro;
	
	/**
     * @ORM\Column(name="categorieSocioPro", type="DemandeurCategorieSocioPro", nullable=true)
     * @DoctrineAssert\Enum(entity="AppBundle\DBAL\Types\DemandeurCategorieSocioPro")     
     */
    protected $categorieSocioPro;
	
	/**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
	protected $metier;
	
	/**
     * {@inheritdoc}
     */
	public function getId()
	{
		return $this->id;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getNom()
	{
		return $this->nom;
	}
     
	/**
     * {@inheritdoc}
     */
	public function getPrenom()
	{
		return $this->prenom;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getStatus()
	{
		return $this->status;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getDateNaissance()
	{
		return $this->dateNaissance;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getVilleNaissance()
	{
		return $this->villeNaissance;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getDeptNaissance()
	{
		return $this->deptNaissance;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getPaysNaissance()
	{
		return $this->paysNaissance;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getNationalite()
	{
		return $this->nationalite;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getTitreSejour()
	{
		return $this->titreSejour;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getAutorisationTravail()
	{
		return $this->autorisationTravail;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getAdresse()
	{
		return $this->adresse;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getCodePostal()
	{
		return $this->codePostal;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getVille()
	{
		return $this->ville;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getTelFixe()
	{
		return $this->telFixe;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getTelPortable()
	{
		return $this->telPortable;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getEmail()
	{
		return $this->email;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getEnfant()
	{
		return $this->enfant;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getPermisConduire()
	{
		return $this->permisConduire;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getTypePermisConduire()
	{
		return $this->typePermisConduire;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getMoyenLocomotion()
	{
		return $this->moyenLocomotion;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getMoyenLocomotionAutre()
	{
		return $this->moyenLocomotionAutre;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getIdPoleEmploi()
	{
		return $this->idPoleEmploi;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getReferent()
	{
		return $this->referent;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getStructure()
	{
		return $this->structure;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getAllocation()
	{
		return $this->allocation;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getAllocationAutre()
	{
		return $this->allocationAutre;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getRqth()
	{
		return $this->rqth;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getNiveauEtude()
	{
		return $this->niveauEtude;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getDiplomePro()
	{
		return $this->diplomePro;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getCategorieSocioPro()
	{
		return $this->categorieSocioPro;
	}
	
	/**
     * {@inheritdoc}
     */
	public function getMetier()
	{
		return $this->metier;
	}
	
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="product_image", fileNameProperty="imageName")
     * 
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @var string
     */
    private $imageName;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Product
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return File|null
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param string $imageName
     *
     * @return Product
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getImageName()
    {
        return $this->imageName;
    }
}