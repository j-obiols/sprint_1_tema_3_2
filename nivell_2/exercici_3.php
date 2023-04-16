<?php
  $titol1 = "TEMA 3 - 2 : PHP. FUNCIONS I ESTRUCTURES DE CONTROL.";
  $titol2 = "NIVELL 2 - EXERCICI 3";

  echo $titol1."<br>";
  echo $titol2."<br>";
  echo "<br>";

  //Compres del client:

  $uniXocolata = 3;
  $uniXiclets = 5;
  $uniCaramels = 4;

  //Funcions, sense considerar de moment el preu com a variable...

  function preuXoco(int $uniXoco) {
    $preuXoco = 1 * $uniXoco;
    $preuXocoF = number_format($preuXoco, 2);
    return $preuXocoF;
  }

  function preuXic(int $uniXic) {
    $preuXic = 0.50 * $uniXic;
    $preuXicF = number_format($preuXic, 2);
   return $preuXicF;
  }

  function preuCara(int $uniCara) {
    $preuCara = 1.50 * $uniCara;
    $preuCaraF = number_format($preuCara, 2);
    return $preuCaraF;
  }

  //Aquest programa emetria un tiquet de compra que es podria anar ampliant amb altres productes:

  function preuTotal(int $uniXo = 0, int $uniXi = 0, int $uniCa = 0) {

    if ($uniXo > 0) {
      echo $uniXo. " XOCOLATA 1.00 €/ut : ".preuXoco($uniXo)." €</br>";
    } 
    
    if ($uniXi > 0) {
      echo $uniXi. " XICLET 0.50 €/ut : ".preuXic($uniXi)." €</br>";
    } 
    
    if ($uniCa > 0) {
     echo $uniCa. " CARAMEL 1.50 €/ut : ".preuCara($uniCa)." €</br>";
    }

    $preuTotal = preuXoco($uniXo) + preuXic($uniXi) + preuCara($uniCa);
    $preuTotalF = number_format($preuTotal, 2);
    echo "TOTAL: ".$preuTotalF." € <br>";
    echo "Gràcies per la seva compra!";
  }
  
  //Invoquem la funció:

  preuTotal($uniXocolata, $uniXiclets, $uniCaramels);

?>
  