<?php

   $titol1 = "TEMA 3 - 2 : PHP. FUNCIONS I ESTRUCTURES DE CONTROL.";
   $titol2 = "NIVELL 1 - EXERCICI 2";

   echo $titol1."<br>";
   echo $titol2."<br>";
   echo "<br>";

   echo "Comptarem fins a 10, de 2 en 2: </br>";
   
   function comptarParells10 () {
      for ($x = 2; $x <= 10; $x+=2) {
        echo $x."  ";
      }
   } 
   
   comptarParells10();
?>