<?php

  $titol1 = "TEMA 3 - 2 : PHP. FUNCIONS I ESTRUCTURES DE CONTROL.";
  $titol2 = "NIVELL 1 - EXERCICI 4";
 
  echo $titol1."<br>";
  echo $titol2."<br>";
  echo "<br>";

  // Entrada de dades a foc.

  $num1 = 72;

  // Definim la funció amb el paràmetre per defecte igual a 10.

  function comptarParells (int $num = 10) {
        for ($x = 2; $x <= $num; $x += 2) {
        echo $x." ";
        }
  } 

  /* Apliquem la funció dues vegades. En el primer cas, sense entrar valor, 
  per comprovar que funciona el valor per defecte que hem definit. */

  echo "Per defecte contarem fins a 10, de 2 en 2: " ;
  echo "</br>";
  comptarParells();
  echo "</br> </br>";
  echo "Ara contarem fins a ".$num1.", de 2 en 2:" ;
  echo "</br>";
  comptarParells($num1);

?>