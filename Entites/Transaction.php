<?php


/** @Entity
 *  @Table(name="transaction")
 */
class Transaction{
	
    /**
     * @Id @Column(type="integer")
     * @GeneratedValue
     */
	private $id;
    /**
     * @ManyToOne(targetEntity="Compte")
     * @JoinColumn(name="compte_emission_id", referencedColumnName="id")
     */
	private $compteEmission;
	/**
	 * @ManyToOne(targetEntity="Compte")
	 * @JoinColumn(name="compte_reception_id", referencedColumnName="id")
	 */
	private $compteReception;
	/**
	 * @Column(type="integer")
	 */
	private $montant;
	/**
	 * @Column(type="datetime")
	 */
	private $dateTransaction;

	public function __construct()
	{
		$dateTransaction = new \DateTime();
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
	public function getCompteEmission()
	{
		return $this->compteEmission;
	}
	public function setCompteEmission($compteEmission)
	{
		$this->compteEmission = $compteEmission;
		return $this;
	}
	public function getCompteReception()
	{
		return $this->compteReception;
	}
	public function setCompteReception($compteReception)
	{
		$this->compteReception = $compteReception;
		return $this;
	}
	public function getMontant()
	{
		return $this->montant;
	}
	public function setMontant($montant)
	{
		$this->montant = $montant;
		return $this; 
	}
	public function getDateTransaction()
	{
		return $this->dateTransaction;
	}
	public function setDateTransaction($dateTransaction)
	{
		$this->dateTransaction = $dateTransaction;
		return $this;
	}
}