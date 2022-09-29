<h1>Estructura Switch</h1>

<?php
// rand (a,b) => numero aleatorio entre a y b
$numero = rand(1,3);
//echo <p>El numero es $numero</p>;


switch ($numero){
     
    case 1:
        echo "<p>$numero es igual a 1</p>";

    case 2:
        echo "<p>$numero es igual a 2</p>";

    default:
        echo "<p>$numero es igual a 3</p>";

        break;

} 



/*
Hacer el ejercicio de las notas con Switch
*/

$alumno = "Pepe Luis";
$nota = 6;

switch ($nota){
    case 0:
    case 1:
    case 2:
    case 3:
    case 4:
        echo "<p>$alumno ha suspendido</p>";
         break;
    
    case 5:
    case 6:
        echo "<p>$alumno ha aprobado</p>";
        break;

    case 7:
    case 8:
        echo "<p>$alumno ha sacado notable</p>";
        break;
     
        
   default:
        echo "<p>$alumno ha sacado sobresaliente</p>";
        break;
}




?>