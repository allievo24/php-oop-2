

<?php
trait Indirizzo {


   public $indirizzo;
   public $numeroCivico;
   public $provincia;
   public $cap;
   public $nazione;
  

 public function getIndirizzo() {
  return $this->$indirizzo .' '. $this->$numeroCivico .' '. $this->$provincia .' '. $this->$cap.' '. $this->$nazione;
   
 }

} 
