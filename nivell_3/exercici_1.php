<?php

  echo "TEMA 3 - 2 : PHP. FUNCIONS I ESTRUCTURES DE CONTROL <br>";
  echo "NIVELL 3 - EXERCICI 1 <br> <br>";
  echo "CRIBA D'ERASTOTENES <br> <br>";
  
  // Valors de prova:
  
  $num1 = 10;
  $num2 = 20;
  $num3 = 30;
  $num4 = 100;


  function cribaErastotenes(int $n): array {

    $ar = array();
    $arrayPrimers = array();

    for($f = 0; $f < ($n - 1); $f++) {

      //Construïm el grup de nombres a cribar:

      $ar[$f] = $f + 2;

    }
    
    //Algoritme de la criba:

    do {

      $numP = $ar[0];

      array_push($arrayPrimers, $numP);

      //Eliminem tots els múltiples del número declarat i guardat com a primer:

      foreach($ar as $key => $value) {
         
        if ($value % $numP == 0) {
        
          unset($ar[$key]);
        
        }
        
      }

      //Reorganitzem els índexs de l'array base abans de començar una altra vegada el cicle:

      $ar = array_values($ar);

    } while ($numP * $numP < $n);

    /*Un cop acabat el bucle segons la condició definida a la línea superior, 
    ajuntem l'array de primers amb els que queden
    a l'array base, que ja sabem que seran primers.*/

    $arrayPrimers = array_merge($arrayPrimers, $ar);

    return $arrayPrimers;
  }
   
  
  echo "Busquem tots els nombres primers més petits o iguals a ".$num1." : <br>";
  print_r(cribaErastotenes($num1));
  echo "<br> <br> ";

  echo "Busquem tots els nombres primers més petits o iguals a ".$num2." : <br>";
  print_r(cribaErastotenes($num2));
  echo "<br> <br>";

  echo "Busquem tots els nombres primers més petits o iguals a ".$num3." : <br>";
  print_r(cribaErastotenes($num3));
  echo "<br> <br>";

  echo "Busquem tots els nombres primers més petits o iguals a ".$num4." : <br>";
  print_r(cribaErastotenes($num4));
  echo "<br> <br>";
  
?>