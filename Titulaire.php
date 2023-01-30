
<?php


class Titulaire
{
	// déclaration
	private string $_nom;
	private string $_prenom;
	private string $_bDate;
	private string $_ville;
	private array $_listDesComptes ;
	

	public function __construct($nom, $prenom, $bDate,$ville)
	{
		$this->_nom = $nom;
		$this->_prenom = $prenom;
		$this->_bDate = $bDate;
		$this->_ville = $ville;
		//inititaliser aray vide 
		$this->_listDesComptes = [];
	}

	public function getNom(): string
	{
		return $this->_nom;
	}

	public function setNom(string $nom)
	{
		$this->_nom = $nom;
	}

	public function getPrenom(): string
	{
		return $this->_prenom;
	}

	public function setPrenom(string $prenom)
	{
		$this->_prenom = $prenom;
	}
	
	public function getBDate(): string
	{
		return $this->_bDate;
	}
	public function setBDate(string $bDate)
	{
		$this->_bDate = $bDate;
	}
	
	public function getVille(): string
	{
		return $this->_ville;
	}
	public function setVille(string $ville)
	{
		$this->_ville = $ville;
	}
	
	public function getListDesComptes()
	{
		return $this->_listDesComptes;
	}

	public function setListDesComptes($listDesComptes)
	{
		$this->_listDesComptes = $listDesComptes;
		return $this;
	}

	public function __toString()
	{
		$ecrire = $this->_nom ." " . $this->_prenom  ." " . $this->_ville;
		echo "<br>";
		return $ecrire;
	}

	public function ajoutCompte( Compte $compte)
	{
		//ajouter un element a la list des compte
		$this->_listDesComptes [] = $compte;
	}

	

	

}



