<?php
require_once __dir__ .'/../trait/indirizzo.php';


class User{
    use Indirizzo;
    public $nome;
    public $email;
    public $password;
    public $cognome;
    public $telefono;

    public function __construct($nome, $cognome, $email, $password, $telefono = null )
    {
        $this->nome =$nome;
        $this->email=$email;
        $this->password =$password ;
        $this->cognome=$cognome;
    }

    public function getUserInfo() {
        return $this->$nome . ' '. $this->$cognome . ' '. $this->$email . ' '. $this->$telefono;
    }
   
 
    
 }
 