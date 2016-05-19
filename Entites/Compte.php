<?php


/** @Entity
 *  @Table(name="compte")
 */
class Compte{
	
    /**
     * @Id @Column(type="integer")
     * @GeneratedValue
     */
	private $id;
	/**
	 * @Integer
	 */
	private $numeroDeCompte;
	private $balance;
	private $typeCompte;
	private $decouvertAutorise;

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