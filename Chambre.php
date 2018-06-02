<?php
class Chambre{
	protected $numero;
	protected $superficie;
	protected $orientation;

	public function __construct($numero, $superficie, $orientation){
		$this->numero=$numero;
		$this->superficie=$superficie;
		$this->orientation=$orientation;
	}

	public function afficher(){
		echo "La chambre numéro : ".$this->numero." superficie : ".$this->superficie." orientation : ".$this->orientation."<br>";
	}
}

?>