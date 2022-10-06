<h1>Estructura for</h1>
<ul>
    <?php
    /*
for ($i = 1; $i <= 10; $i++){
    echo "<li>$i</li>";
}
*/

    /*
Mediante for mostrar la secuencia:
    5,10,15... hasta 50

*/

    for ($i = 5; $i <= 50; $i++) {
        if ($i % 5 == 0) {
            echo "<li>$i</li>";
        }
    }

    for ($i = 5; $i <= 50; $i += 5) {
        echo "<li>$i</li>";
    }




    ?>

</ul>


<br><br>


<?php
/*
    Generar dos numero aleatorios:
    - uno entre 1 y 10
    -otro entre 11 y 20

    crear un bucle for que se ejecute entre el primer numero y el segundo
    */
$a = rand(1, 10);
$b = rand(11, 20);
echo "<p>A = $a</p>";
echo "<p>B = $b</p>";

for ($i = $a; $i <= $b; $i++) {
    echo "<p>$i</p>";
}
?>