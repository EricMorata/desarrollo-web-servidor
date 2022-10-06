<?php
echo date("l j \of Y");
/*
Mostrar la fecha y hora en el mismo formato
que el reloj del ordenador

10:39
06/10/2022
*/
echo "<br><br><br>";

echo date("H:i:s");
echo "<br>";
echo date("d/m/Y");

echo "<br><br><br>";

echo date("h:i A");
echo "<br>";
echo date("d/m/Y");

/*
Usar la estructura switch para mostrar
 el dia actual en español
"hoy es jueves 6 de octubre de 2022"
 */
echo "<br><br><br>";


    $d = date("l");

    switch($d) {
        case "Monday": 
            $dia = "Lunes";
            break;
        case "Tuesday": 
            $dia = "Martes";
            break;
        case "Thursday":
            $dia = "Jueves";
            break;
    }

    $ndia = date("j");

    $m = date("F");

    switch($m) {
        case "January":
            $mes = "Enero";
            break;
        case "February":
            $mes = "Febrero";
            break;
        case "October":
            $mes = "Octubre";
            break;
    }

    $anho = date("Y");

    echo "Hoy es $dia $ndia de $mes de $anho";
    
