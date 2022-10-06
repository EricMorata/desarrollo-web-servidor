<h1>Ejercicio 2 cutre</h1>

<?php

/*EJERCICIO 2

Imprimir los multiplos de 3 entro 0 y 30 en formato array


*/
/* 
echo "<br>";

$i = 0;
echo "[";
while ($i <= 30) {
    if ($i % 3 == 0) {
        echo "$i";
        echo ",";
    }
    $i++;
}

echo "]";

*/


    echo "[";
    for ($i = 3; $i <= 30; $i+=3) {
        if ($i < 30) {
            echo "$i,";
        } else {
            echo "$i";
        }
        
    }
    echo "]";
?>