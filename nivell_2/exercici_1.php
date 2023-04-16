<?php

    $titol1 = "TEMA 3 - 2 : PHP. FUNCIONS I ESTRUCTURES DE CONTROL.";
    $titol2 = "NIVELL 2 - EXERCICI 1";

    echo $titol1."<br>";
    echo $titol2."<br>";
    echo "<br>";
  
    $anyInicial = 1960;
    $anyFinal = 2016;

    function anysOlimpics(int $anyIni, int $anyFin) {
        for ($x = $anyIni; $x <= $anyFin; $x += 4) {
            echo $x."</br>";
        }
    }  

    echo "Anys dels Jocs Olímpics d'Estiu des de 1960 fins a 2016: </br> </br>";
    anysOlimpics($anyInicial, $anyFinal);

    
?>