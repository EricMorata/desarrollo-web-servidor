<h1>Estructura IF</h1>

<?php

$numero = 3;

if($numero > 0 ) {
    echo "<p>El numero es positivo</p>";
} else if ($numero < 0){
    echo "<p>El numero es negativo</p>";
} else {
    echo "<p>El numero es 0</p>";
}


if($numero % 2 == 0){
echo "<p>El numero $numero es par</p>";
} else {
    echo "<p>El numero $numero es impar</p>";
}







?>