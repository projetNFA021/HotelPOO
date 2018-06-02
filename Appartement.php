<?php
require_once 'Chambre.php';

class Appartement extends Chambre{
	private $nbrePieces;
	private $balcon;

	public function __construct($numero, $superficie, $orientation, $nbrePieces, $balcon){
		parent::__construct($numero, $superficie, $orientation);
		$this->nbrePieces=$nbrePieces;
		$this->balcon=$balcon;
	}

	public function afficher(){
		parent::afficher();
		echo "le nmobre de pièce : ".$this->nbrePieces." Contient un balcon : ".$this->balcon."<br>";
	}
}

?>