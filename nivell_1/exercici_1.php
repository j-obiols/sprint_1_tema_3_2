<?php

    $titol1 = "TEMA 3 - 2 : PHP. FUNCIONS I ESTRUCTURES DE CONTROL.";
    $titol2 = "NIVELL 1 - EXERCICI 1";

    echo $titol1."<br>";
    echo $titol2."<br>";
    echo "<br>";

    $num1 = 24;
    $num2 = 35;
    $num3 = 4.84;
    
    //Definim la funció:
    
    Function parell($num) {
        if (is_int ($num)) {
            if ($num % 2 == 0) {
                echo "El nombre ".$num." és parell.";
            } else  {
                echo "El nombre ".$num." és imparell."; 
            }  
        } else {
            echo "Entrada invàlida: no és un nombre enter.";
        }
    }

    // Apliquem la funció a diferents valors:

    echo "</br>";
    echo "Núm.1 = ".$num1;
    echo "</br>";
    echo "Núm.2 = ".$num2;
    echo "</br>";
    echo "Núm.3 = ".$num3;
    echo "</br> </br>";
    parell($num1);
    echo "</br>";
    parell($num2);
    echo "</br>";
    parell($num3);

?>