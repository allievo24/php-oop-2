<?php

require_once __DIR__ . '/Immobile.php';

class Affitto extends Immobile{
 public $canoneMensile;
 public $tipoContratto;

 public function __construct($nome,$prorietario, $descrizione,$canoneMensile)
 {
    parent::__construct($nome, $descrizione, $prorietario);
    $this->canoneMensile = $canoneMensile;
 }


}






?>