<?php
require_once __DIR__ .'/User.php';

class Agente extends User{
  public $provigione = 4;

  public function __construct($nome, $cognome, $email, $password, $telefono = null, $provigione = 4)
  {
    parent::__construct($nome, $cognome, $email, $password, $telefono = null);
    $this->provigione = $provigione;
  }
  



}




?>