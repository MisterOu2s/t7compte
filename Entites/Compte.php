<?php


/** @Entity
 *  @Table(name="compte")
 */
class Compte{
	
    /**
     * @Id 
     * @Column(type="integer")
     * @GeneratedValue
     */
	private $id;
	/**
	 * @Integer
	 */
	private $numeroDeCompte;
	/**
	 * @Column(type="integer")
	 */
	private $balance;
	/**
	 * @Column(type="string")
	 */
	private $typeCompte;
	/**
	 * @Column(type="integer")
	 */
	private $decouvertAutorise;

    /**
     * @ManyToMany(targetEntity="Utilisateur", mappedBy="compte")
     */
    private $utilisateurs;

    public function __construct() {
        $this->utilisateurs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getUtilisateurs()
    {
    	return $this->utilisateurs;
    }

    public function addUtilisateur($utilisateur)
    {
    	$this->utilisateurs->add($utilisateur);
    	return $this;
    }

    public function removeUtilisateur($utilisateur)
    {
    	$this->utilisateurs->remove($utilisateur);
    	return $this;
    }

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	public function getNumeroDeCompte()
	{
		return $this->numeroDeCompte;
	}

	public function setNumeroDeCompte($numeroDeCompte)
	{
		$this->numeroDeCompte = $numeroDeCompte;
		return $this;
	}

	public function getBalance()
	{
		return $this->balance;
	}

	public function setBalance($balance)
	{
		$this->balance = $balance;
		return $this;
	}

	public function getTypeCompte()
	{
		return $this->typeCompte;
	}

	public function setTypeCompte($typeCompte)
	{
		$this->typeCompte = $typeCompte;
		return $this;
	}

	public function getDecouvertAutorise()
	{
		return $this->decouvertAutorise;
	}

	public function setDecouvertAutorise($decouvertAutorise)
	{
		$this->decouvertAutorise = $decouvertAutorise;
		return $this;
	}

}