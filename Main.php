<?php

include_once 'Hotel.php';
include_once 'Appartement.php';
include_once 'Chambre.php';


$hotelBordeaux=new Hotel("Hôtel Bordeaux", 50);
$hotelBordeaux->afficher();
echo "--------------------------------<br>";
$hotelBordeaux->ReserverChambre(new Chambre(4116, "15", "Est"));
$hotelBordeaux->ReserverChambre(new Chambre(4117, "15", "Nord"));
$hotelBordeaux->ReserverChambre(new Chambre(4118, "30", "Sud"));
$hotelBordeaux->afficher();

?>