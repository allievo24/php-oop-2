<?php
require_once __DIR__ .'/Immobile.php';

class Vendita extends Immobile{
 public $prezzoVendita;

public function __construct($nome,$prorietario,$prezzoVendita)
{
  parent::__construct($nome, $prorietario);
  $this->prezzoVendita = $prezzoVendita; 
}


}





?>