<?php


/** @Entity
 * @Table(name="utilisateurs")
 */
class Utilisateur{
    /**
     * @Id @Column(type="integer")
     * @GeneratedValue
     */
	private $id;
	/**
	 * @Column(type="string")
	 */
	private $prenom;
	/** 
	 * @Column(type="string")
	 */
	private $nom;
	/** 
	 * @Column(type="string")
	 */
	private $motDePasse;
	/** 
	 * @Column(type="string")
	 */
	private $adresse;
	/** 
	 * @Column(type="string")
	 */
	private $complementAdresse;
	/** 
	 * @Column(type="integer")
	 */
	private $codePostal;
	/**
	 * @Column(type="string")
	 */
	private $ville;
	/**
	 * @Column(type="string")
	 */
	private $pays;
	/**
	 * @Column(type="integer")
	 */
	private $numeroDeTelephone;
	/**
	 * @Column(type="string")
	 */
	private $email;

	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}
	public function getPrenom()
	{
		return $this->prenom;
	}
	public function setPrenom($prenom)
	{
		$this->prenom = $prenom;
		return $this;
	}
	public function getNom()
	{
		return $this->nom;
	}
	public function setNom($nom)
	{
		$this->nom = $nom;
		return $this;
	}
	public function getMotDePasse()
	{
		return $this->motDePasse;
	}
	public function setMotDePasse($motDePasse)
	{
		$this->motDePasse = $motDePasse;
		return $this; 
	}
	public function getAdresse()
	{
		return $this->adresse;
	}
	public function setAdresse($adresse)
	{
		$this->adresse = $adresse;
		return $this;
	}
	public function getComplementAdresse()
	{
		return $this->complementAdresse;
	}
	public function setComplementAdresse($complementAdresse)
	{
		$this->complementAdresse = $complementAdresse;
		return $this;
	}
	public function getCodePostal()
	{
		return $this->codePostal;
	}
	public function setCodePostal($codePostal)
	{
		$this->codePostal = $codePostal;
		return $this;
	}
	public function getVille()
	{
		return $this->ville;
	}
	public function setVille($ville)
	{
		$this->ville = $ville;
		return $this;
	}
	public function getPays()
	{
		return $this->pays;
	}
	public function setPays($pays)
	{
		$this->pays = $pays;
		return $this;
	}
	public function getNumeroDeTelephone()
	{
		return $this->numeroDeTelephone;
	}
	public function setNumeroDeTelephone($numeroDeTelephone)
	{
		$this->numeroDeTelephone = $numeroDeTelephone;
		return $this;
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function setEmail($email)
	{
		$this->email = $email;
		return $this;
	}
}