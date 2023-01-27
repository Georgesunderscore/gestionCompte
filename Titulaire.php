
<?php



class Titulaire
{
	// déclaration
	private string $_nom;
	private string $_prenom;
	private string $_date;
	private string $_ville;
	private array $_listDesComptes ;
	

	public function __construct($nom, $prenom, $date,$ville)
	{
		$this->_nom = $nom;
		$this->_prenom = $prenom;
		$this->_date = $date;
		$this->_ville = $ville;
		$this->_listDesComptes = [];
	}
	public function __toString()
	{
		$ecrire = $this->_nom . $this->_prenom  . $this->_ville;
		return $ecrire;
	}

	public function ajoutCompte( Compte $compte)
	{
		//ajouter a la list des compte
		// array_push($this->_listDesComptes, $compte);
		
		$this->_listDesComptes [] = $compte;
		
	}

	/**
	 * Get the value of _listDesComptes
	 */ 
	public function get_listDesComptes()
	{
		return $this->_listDesComptes;
	}

	
	public function set_listDesComptes($_listDesComptes)
	{
		$this->_listDesComptes = $_listDesComptes;
		return $this;
	}
	
}



