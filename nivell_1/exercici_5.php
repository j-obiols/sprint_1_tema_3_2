<?php

  $titol1 = "TEMA 3 - 2 : PHP. FUNCIONS I ESTRUCTURES DE CONTROL.";
  $titol2 = "NIVELL 1 - EXERCICI 5";

  echo $titol1."<br>";
  echo $titol2."<br>";
  echo "<br>";

  // Entrada de dades a foc:

  $nota1 = 36;
  $nota2 = 45;
  $nota3 = 24;
  $nota4 = 95;

  //Definim la funció:

  function grau(int $nota) {
    if ($nota >= 60 ) {
      echo "Has obtingut un ".$nota."%. Grau: Primera Divisió.";
    } else if (45 <= $nota && $nota <= 59) {
      echo "Has obtingut un ".$nota."%. Grau: Segona Divisió.";
    } else if (33 <= $nota && $nota <= 44) {
      echo "Has obtingut un ".$nota."%. Grau: Tercera Divisió.";
    } else if ($nota <= 33) {
      echo "Has obtingut un ".$nota."%. Hauràs de repetir la prova.";
    }
  } 
  
  //Apliquem la funció a diferents valors:

  grau ($nota1);
  echo "</br>";
  grau ($nota2);
  echo "</br>";
  grau ($nota3);
  echo "</br>";
  grau ($nota4);

?>