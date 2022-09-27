<?php

//importo le classi
require_once __DIR__ .'/classi/Agente.php';
require_once __DIR__ .'/classi/Cliente.php';
require_once __DIR__ .'/classi/Vendita.php';
require_once __DIR__ .'/classi/Affitto.php';


//istanzio l'oggetto

$Agente = new Agente('Napoleone','Buonaparte','BounaParte@gmail.fr','Waterloo');
$Cliente = new Cliente('Arthur','Wellington','Wellington@gmail.En','Waterloo');
$ImmobileInVendita = new Immobile('Torre Effel','Metallica in pieno centro',$Cliente,1000000);
$ImmobileInAffitto = new Affitto("Palazzo Ducale in piena campagna",'In piena campagna',$Cliente,34000);


var_dump($ImmobileInAffitto);


?>