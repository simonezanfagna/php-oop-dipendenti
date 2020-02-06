<?php

include_once 'dipendente.php';

$dipendente1 = new Dipendente('Mario', 'Rossi', '437891', 'operaio');

// calcolo stipendio annuo inserendo la paga mensile

try {
  $dipendente1->stipendioAnnuo(2000);
} catch(Exception $e) {
  echo $e->getMessage();
}



echo "<pre>";
var_dump($dipendente1);
echo "</pre>";

?>
