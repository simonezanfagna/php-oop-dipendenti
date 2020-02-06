<?php
class Persona{

  public $nome;
  public $cognome;
  public $dataDiNascita;

  public function __construct($_nome, $_cognome, $_dataDiNascita = null){
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->dataDiNascita = $_dataDiNascita;
  }

}

// $persona = new Persona('simone', 'zanfagna', '0000');
//
// var_dump($persona);

?>
