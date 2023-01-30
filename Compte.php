
<?php

class Compte
{
	// déclaration
	private string $_libelle;
	private float $_solde ;
	private string $_devise ;
	private Titulaire $_titulaire ;

	public function __construct($titulaire, $devise, $solde, $libelle)
	{
		$this->_titulaire = $titulaire;
		$this->_devise = $devise;
		$this->_solde = $solde;
		$this->_libelle = $libelle;
		$this->_titulaire ->ajoutCompte($this);
	}
	public function __toString()
	{
		$ecrire = $this->_titulaire ." ". $this->_devise ." ". $this->_solde ." ". $this->_libelle;
		return $ecrire;
	}

	public function getLibelle(): string
	{
		return $this->_libelle;
	}

	public function setLibelle(string $libelle)
	{
		$this->_libelle = $libelle;
	}

	public function getSolde(): float
	{
		return $this->_solde;
	}

	public function setSolde(float $solde)
	{
		$this->_solde = $solde;
	}

	public function getDevise(): string
	{
		return $this->_devise;
	}

	public function setDevise(string $devise)
	{
		$this->_devise = $devise;
	}

	public function getTitulaire(): Titulaire
	{
		return $this->_titulaire;
	}

	public function setTitulaire(Titulaire $titulaire)
	{
		$this->_titulaire = $titulaire;
	}
	
	public function crediterCompte(float $valCredit)
	{
		//Créditer le compte de X euros
		$this->_solde = $this->_solde + $valCredit;
	}

	public function debiterCompte(float $valCredit)
	{
		//Debiter le compte de X euros
		$this->_solde = $this->_solde - $valCredit;
	}
	

	//virement dun compte a un autre 
	public function virementCompte( Compte $compteSource,Compte $compteDestinataire,float $val)
	{	//test meme titulaire d'un compte 
		//Effectuer un virement d'un compte à l'autre.
		if($val < 100000){
			$compteSource->_solde = $compteSource->_solde - $val;
			$compteDestinataire->_solde = $compteDestinataire->_solde + $val;
			$compte->setSolde($compte->getSolde()  +  $val);
		}
		else{
			echo "Vous Avez Depassé la Limite de Virement";
		}
		
	}

	

	
	

	
	

	
}




