<?php

require_once 'Appartement.php';

class Hotel{
	private $nom;
	private $capacite;
	private $chambre = array();
	private $apparts=array();
	
	public function __construct($nom, $capacite){
		$this->nom=$nom;
		$this->capacite=$capacite;
	}
	public function getNom(){
		return $this->nom;
	}
	public function getCapacite(){
		return $this->capacite;
	}
	public function isEmpty(){
		return count($this->chambre)==0;
	}
	public function ChambreDisponible(){
		return ($this->capacite - count($this->chambre));
	}
	public function isFull(){
		return count($this->chambre)==$this->capacite;
	}
	public function TotalChambreReserve(){
		return count($this->chambre);
	}
	public function ReserverChambre(Chambre $chambre){
		if(!$this->isFull()){
			$this->chambre[]=$chambre;
		}
	}
	public function afficher(){
		echo "Le Nom de l'hôtel : ".$this->nom."<br>";
		echo "Le nombre de chambres reservées dans l'hôtel : ".$this->TotalChambreReserve()."<br>";
		echo "Le nombre de chambres disponibes : ".$this->ChambreDisponible()."<br>";
		echo "Le détail des réservations : <br>";
		if(!$this->isEmpty()){
			foreach ($this->chambre as $chambre){
				$chambre->afficher();
			}
		}else echo "Aucune réservation ! <br>";
	}
}




?>