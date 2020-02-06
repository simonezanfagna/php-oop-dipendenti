<?php

include_once 'persona.php';

class Dipendente extends Persona{

  public $matricola;
  public $mansione;
  public $stipendio;

  public function __construct($_nome, $_cognome, $_matricola, $_mansione){

    parent::__construct($_nome, $_cognome, $_dataDiNascita = null);

    $this->matricola = $_matricola;
    $this->mansione = $_mansione;
  }

  public function stipendioAnnuo($stipendioMensile){
    if (!is_numeric($stipendioMensile)) {
      throw new Exception("Per calcolare lo stipendio annuo, inserire un valore numerico !");
    }
    else {
      return $this->stipendio = '€ ' . ($stipendioMensile * 12);
    }
  }

}


?>
