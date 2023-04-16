<?php

  $titol1 = "TEMA 3 - 2  : PHP. FUNCIONS I ESTRUCTURES DE CONTROL.";
  $titol2 = "NIVELL 1 - EXERCICI 3";

  echo $titol1."<br>";
  echo $titol2."<br>";
  echo "<br>";
     
  // Entrada de dades:

  $num1 = 50;
 
  // Definim la funció:

  function comptarParells(int $num) {
    for ($x = 2; $x <= $num; $x+=2) {
      echo $x." ";
    }
  } 

  // Apliquem la funció:
  echo "Comptarem fins a ".$num1.", de 2 en 2: </br>";
  comptarParells($num1);

?>