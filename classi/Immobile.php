<?php

require_once __dir__ .'/../trait/indirizzo.php';

class Immobile{
   use Indirizzo;
   public $nome;
   public $descrizione;
   public $numeroStanza;
   public $mq;
   public $classeEnergetica;
   public $prorietario;

   public function __construct($nome, $descrizione, $prorietario ,$mq= null , $numeroStanza= null )
   {
      $this->nome =$nome;
      $this->descrizione =$descrizione;
      $this->mq =$mq;
      $this->numeroStanza =$numeroStanza;
      $this->prorietario =$prorietario;


   }
   
 public function getImmobileInfo() {
   return $this->nome .' - '. $this->prorietario;
 }
   
}



?>