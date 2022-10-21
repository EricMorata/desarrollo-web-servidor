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
    <p>
        Crea un formulario con los siguientes campos: DNI, Nombre,
        Primer apellido, Segundo apellido, Edad y Correo electrónico. Valida el formulario mediante PHP.
        Crea un archivo index.php dentro de una carpeta llamada "practica_02" donde se muestre el formulario.
    </p>

    <p> 
        El DNI deberá contener 8 caracteres y una letra. Tenemos que comprobar que la letra sea correcta.
        El nombre y los apellidos no deberán contener caracteres especiales y habrá que mostrarlos
        con la primera letra en mayúscula y las demás en minúscula,
        aunque se hayan introducido en mayúsculas o minúsculas.
        Si se es menor de 18 años se deberá mostrar un aviso de que se es menor de edad. Además,
        la edad deberá ser siempre un número, y nunca inferior a 0 o superior a 120.
    </p>
    <p>
        El correo electrónico deberá estar en formato correcto. No se permitirán además correos
        electrónicos que contengan palabras malsonantes (basta con que vetéis 3 palabras malsonantes).
        Utilizar la función str_contains.
    </p>

</body>

</html>