<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Practica 2</title>
</head>

<body>
    <h1>Práctica 2</h1>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    
}



function depurar($dato)
    {
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }
?>
    <p>
        Crea un formulario con los siguientes campos: DNI, Nombre,
        Primer apellido, Segundo apellido, Edad y Correo electrónico. Valida el formulario mediante PHP.
        Crea un archivo index.php dentro de una carpeta llamada "practica_02" donde se muestre el formulario.
    </p>

    <p>
        El DNI deberá contener 8 caracteres y una letra. Tenemos que comprobar que la letra sea correcta
    </p>
    <p>
        El nombre y los apellidos no deberán contener caracteres especiales y habrá que mostrarlos
        con la primera letra en mayúscula y las demás en minúscula, aunque se hayan introducido en mayúsculas o minúsculas.
    </p>
    <p>
        Si se es menor de 18 años se deberá mostrar un aviso de que se es menor de edad. Además,
        la edad deberá ser siempre un número, y nunca inferior a 0 o superior a 120.
    </p>
    <p>
        El correo electrónico deberá estar en formato correcto. No se permitirán además correos
        electrónicos que contengan palabras malsonantes (basta con que vetéis 3 palabras malsonantes).
        Utilizar la función str_contains.
    </p>

    <form action="" method="POST">

        <label for="dni">DNI:</label><br>
        <input type="text" name="dni" placeholder="8 carácteres y una letra"><br><br>

        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" placeholder="Nombre completo"><br><br>

        <label for="primerApellido">Primer apellido:</label><br>
        <input type="text" name="primerApellido" placeholder="Primer apellido"><br><br>

        <label for="segundoApellido">Segundo apellido:</label><br>
        <input type="text" name="segundoApellido" placeholder="Segundo apellido"><br><br>

        <label for="edad">Edad:</label><br>
        <input type="text" name="edad" placeholder="Indicame tu edad en Números"><br><br>

        <label for="email">Email:</label><br>
        <input type="text" name="email" placeholder="example@email.com"><br><br>

        <input type="submit" value="Enviar">

    </form>

</body>

</html>