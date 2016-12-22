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
     * @ORM\Column(name="genre", type="DemandeurGenre", nullable=false)
     * @DoctrineAssert\Enum(entity="AppBundle\DBAL\Types\DemandeurGenre")     
     */
    protected $genre;
    
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
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
	protected $telFixe;
	
	/**
     * @ORM\Column(type="string", length=255)
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
	
	public function getId()
	{
		return $this->id;
	}
	
	public function getNom()
	{
		return $this->nom;
	}
 
	public function getPrenom()
	{
		return $this->prenom;
	}

	public function getStatus()
	{
		return $this->status;
	}
	
	public function getGenre()
	{
		return $this->genre;
	}
	
	public function getDateNaissance()
	{
		return $this->dateNaissance;
	}

	public function getVilleNaissance()
	{
		return $this->villeNaissance;
	}

	public function getDeptNaissance()
	{
		return $this->deptNaissance;
	}

	public function getPaysNaissance()
	{
		return $this->paysNaissance;
	}

	public function getNationalite()
	{
		return $this->nationalite;
	}

	public function getTitreSejour()
	{
		return $this->titreSejour;
	}

	public function getAutorisationTravail()
	{
		return $this->autorisationTravail;
	}

	public function getAdresse()
	{
		return $this->adresse;
	}

	public function getCodePostal()
	{
		return $this->codePostal;
	}

	public function getVille()
	{
		return $this->ville;
	}

	public function getTelFixe()
	{
		return $this->telFixe;
	}

	public function getTelPortable()
	{
		return $this->telPortable;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getEnfant()
	{
		return $this->enfant;
	}

	public function getPermisConduire()
	{
		return $this->permisConduire;
	}

	public function getTypePermisConduire()
	{
		return $this->typePermisConduire;
	}

	public function getMoyenLocomotion()
	{
		return $this->moyenLocomotion;
	}

	public function getMoyenLocomotionAutre()
	{
		return $this->moyenLocomotionAutre;
	}

	public function getIdPoleEmploi()
	{
		return $this->idPoleEmploi;
	}

	public function getReferent()
	{
		return $this->referent;
	}

	public function getStructure()
	{
		return $this->structure;
	}

	public function getAllocation()
	{
		return $this->allocation;
	}

	public function getAllocationAutre()
	{
		return $this->allocationAutre;
	}

	public function getRqth()
	{
		return $this->rqth;
	}

	public function getNiveauEtude()
	{
		return $this->niveauEtude;
	}

	public function getDiplomePro()
	{
		return $this->diplomePro;
	}

	public function getCategorieSocioPro()
	{
		return $this->categorieSocioPro;
	}

	public function getMetier()
	{
		return $this->metier;
	}

	public function setNom($nom)
	{
		$this->nom = $nom;
		return $this;
	}
 
	public function setPrenom($prenom)
	{
		$this->prenom = $prenom;
		return $this;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		return $this;
	}
	
	public function setGenre($genre)
	{
		$this->genre = $genre;
		return $this;
	}

	public function setDateNaissance($dateNaissance)
	{
		$this->dateNaissance = $dateNaissance;
		return $this;
	}
	
	public function setVilleNaissance($villeNaissance)
	{
		$this->villeNaissance = $villeNaissance;
		return $this;
	}

	public function setDeptNaissance($deptNaissance)
	{
		$this->deptNaissance = $deptNaissance;
		return $this;
	}

	public function setPaysNaissance($paysNaissance)
	{
		$this->paysNaissance = $paysNaissance;
		return $this;
	}

	public function setNationalite($nationalite)
	{
		$this->nationalite = $nationalite;
		return $this;
	}

	public function setTitreSejour($titreSejour)
	{
		$this->titreSejour = $titreSejour;
		return $this;
	}

	public function setAutorisationTravail($autorisationTravail)
	{
		$this->autorisationTravail = $autorisationTravail;
		return $this;
	}

	public function setAdresse($adresse)
	{
		$this->adresse = $adresse;
		return $this;
	}

	public function setCodePostal($codePostal)
	{
		$this->codePostal = $codePostal;
		return $this;
	}

	public function setVille($ville)
	{
		$this->ville = $ville;
		return $this;
	}

	public function setTelFixe($telFixe)
	{
		$this->telFixe = $telFixe;
		return $this;
	}

	public function setTelPortable($telPortable)
	{
		$this->telPortable = $telPortable;
		return $this;
	}

	public function setEmail($email)
	{
		$this->email = $email;
		return $this;
	}

	public function setEnfant($enfant)
	{
		$this->enfant = $enfant;
		return $this;
	}

	public function setPermisConduire($permisConduire)
	{
		$this->permisConduire = $permisConduire;
		return $this;
	}

	public function setTypePermisConduire($typePermisConduire)
	{
		$this->typePermisConduire = $typePermisConduire;
		return $this;
	}

	public function setMoyenLocomotion($moyenLocomotion)
	{
		$this->moyenLocomotion = $moyenLocomotion;
		return $this;
	}

	public function setMoyenLocomotionAutre($moyenLocomotionAutre)
	{
		$this->moyenLocomotionAutre = $moyenLocomotionAutre;
		return $this;
	}

	public function setIdPoleEmploi($idPoleEmploi)
	{
		$this->idPoleEmploi = $idPoleEmploi;
		return $this;}

	public function setReferent($referent)
	{
		$this->referent = $referent;
		return $this;
	}

	public function setStructure($structure)
	{
		$this->structure = $structure;
		return $this;
	}

	public function setAllocation($allocation)
	{
		$this->allocation = $allocation;
		return $this;
	}

	public function setAllocationAutre($allocationAutre)
	{
		$this->allocationAutre = $allocationAutre;
		return $this;
	}

	public function setRqth($rqth)
	{
		$this->rqth = $rqth;
		return $this;
	}

	public function setNiveauEtude($niveauEtude)
	{
		$this->niveauEtude = $niveauEtude;
		return $this;
	}

	public function setDiplomePro($diplomePro)
	{
		$this->diplomePro = $diplomePro;
		return $this;
	}

	public function setCategorieSocioPro($categorieSocioPro)
	{
		$this->categorieSocioPro = $categorieSocioPro;
		return $this;
	}

	public function setMetier($metier)
	{
		$this->metier =$metier;
		return $this;
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
