<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 respuestas</title>
</head>

<body>
    <h1>Ejercicio 6 respuesta</h1>

    <?php

    $numero = $_POST["numero"];
    $factorial = 1;

    if($numero >=1){
        for ($i = 1; $i <= $numero; $i++) {
            $factorial = $factorial * $i;
          
        }
        echo"<br> La Factorizacion del numero ",$numero," es ",$factorial;
    } else{
        echo "<p>El número debe de ser igual o más que 1</p>";
    }
    
    


    ?>

</body>

</html>