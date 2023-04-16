<?php

  $titol1 = "TEMA 3 - 2 : PHP. FUNCIONS I ESTRUCTURES DE CONTROL.";
  $titol2 = "NIVELL 2 - EXERCICI 2";

  echo $titol1."<br>";
  echo $titol2."<br>";
  echo "<br>";

  //Entrada de valors per provar la funció: 
   
  $minTrucada1 = 2;
  $minTrucada2 = 3;
  $minTrucada3 = 10;
  
  //Definim la funció:

  function preuTrucada(int $minTrucada) {

    if ($minTrucada <= 3) {
      $preuTrucada = 0.10;
    } else if ($minTrucada > 3) {
      $preuTrucada = 0.10 + 0.05*($minTrucada - 3); 
    }
    //Establim que doni el preu amb dos decimals
    $preuTrucadaF = number_format($preuTrucada,2);
    echo "La trucada ha durat ".$minTrucada. " minuts i el seu preu és de ".$preuTrucadaF." €. </br>";

  }
  
  //Invoquem la funció en tres casos:

  preuTrucada($minTrucada1);
  preuTrucada($minTrucada2);
  preuTrucada($minTrucada3);

?>