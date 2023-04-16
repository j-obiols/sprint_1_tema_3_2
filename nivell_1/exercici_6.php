<?php

    $titol1 = "TEMA 3 - 2 : PHP. FUNCIONS I ESTRUCTURES DE CONTROL.";
    $titol2 = "NIVELL 1 - EXERCICI 6";
  
    echo $titol1."<br>";
    echo $titol2."<br>";
    echo "<br>";

    $personatge1 = "Mickey";
    $personatge2 = "Donald";
    $personatge3 = "Peter";
    $personatge4 = "Jack";

    //Definim la funció utilitzant un operador ternari:

    function isBitten(string $pers) {
        $num = rand(0,1);
        $resposta = ($num == 0? "En Charlie ha mossegat el dit a en ".$pers."!!" : "En Charlie no ha mossegat el dit a en ".$pers."!!") ;  
        echo $resposta;
    }
     
    /*Aquesta era una primera versió de la funció:

    function isBitten(string $pers) {
        $num = rand(0,1);
        if ($num == 0) {
            echo "En Charlie ha mossegat el dit a en ".$pers."!!";
        } else {
            echo "En Charlie no ha mossegat el dit a en ".$pers."!!";
        }
    }*/
    
    //Apliquem la funció als diferents personatges:

    isBitten("Mickey");
    echo "</br>";
    isBitten($personatge2);
    echo "</br>";
    isBitten("Peter");
    echo "</br>";
    isBitten("Jack");

?>