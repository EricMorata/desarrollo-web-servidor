<h1>Ejercicio 5</h1>

<?php
    $base = $_POST["base"];
    $exponente = $_POST["exponente"];

    $resultado = 1;

    if ($exponente < 0) {
        echo "<p>El exponente debe ser positivo</p>";
    } else if ($exponente == 0) {
        echo "<p>$resultado</p>";
    } else {
        for ($i = 1; $i <= $exponente; $i++) {
            $resultado = $resultado * $base;
        }
        echo "<p>$resultado</p>";
    }    
?>