<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <?php

    $videojuegos1 = array(

        "juego1" => "Cyberpunk 2077",
        "juego2" => "fifa",
        "juego3" => "minecraft"
    );
    print_r($videojuegos1);

    echo "<br><br>";

    $consolas = [

        "consola1" => "ps4",
        "consola2" => "ps5",
        "consola3" => "xbox",
    ];
    print_r($consolas);

    echo "<br><br>";

    $dni = [

        "Pedro" => "26812688n",
        "Juan" => "74657688p",
        "Manué" => "12345678L",
    ];

    print_r($dni);
    ?>
</body>

</html>