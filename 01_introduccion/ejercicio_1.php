<h1>Ejercicio 1</h1>

<?php

/*  EJERCICIO 1
Vamos a generar 10 numeros aleatorios entre 1 y 10

mostrar dichos numeros indican si son pares e impares

mostrarlo en una lista
*/

for ($i = 1; $i <= 10; $i++) :
    $numero_aleatorio = rand(1, 10);
    if ($numero_aleatorio % 2 == 0) :
        echo "<li>$numero_aleatorio es par</li>";
    else :
        echo "<li>$numero_aleatorio es impar</li>";
    endif;
endfor;


/*$i = rand(1, 10);

while ($i <= 10) {
    if ($i % 2 == 0) {
        echo "<li>$i es par</li>";
    } else {
        echo "<li>$i es impar</li>";
    }
    $i++;
}*/





    
?>
