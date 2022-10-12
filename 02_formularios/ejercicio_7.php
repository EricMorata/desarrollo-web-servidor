<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 prueba</title>
</head>

<body>
    <h1>Ejercicio 7 prueba</h1>
    <p>EJERCCIO 7:

        Crear un formulario que reciba el nombre de un videojuego, su consola, y si es edición especial.

        Se mostrará por pantalla el nombre del juego junto a su precio. El precio será:

        40€ si es de la consola Switch, 60€ si es de PS4, y 70€ si es de PS5. La consola se elegirá
        mediante un campo select.

        Si el juego es edición especial, valdrá un 25% más. La edición especial se marcará con un
        checkbox.
    </p>
    <form action="./ejercicio_7.php" method="POST">

        <label for="nombreVideojuego" id="nombreVideojuego">Nombre videojuego</label><br><br>
        <input type="text" name="nombreVideojuego"><br><br>
        <label for="consolas">Elige una consola:</label><br><br>
        <select name="consola" id="consola"><br><br>
            <option value="PS5">PS5</option>
            <option value="PS4">PS4</option>
            <option value="Switch">Switch</option>
        </select><br><br>
        <label>Elige una Opción</label><br><br>
        <input type="checkbox" id="edicionEspecial" name="especial" value="Edición Especial">
        <label for="edicionEspecial"> Edición especial</label><br><br>
        <input type="submit" value="Enviar">
    </form>
    <br>
    <br>
    <div>
        <a href="./index.php">Volver a la página principal</a>
    </div>
    <?php
   
   
    //esto es para enviar el formulario en la misma pagina
    //El if es para preguntarle al servidor si el metodo es POST en este caso 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $juego = $_POST["nombreVideojuego"];
        $consola = $_POST["consola"];
        $especial = "";
        if(isset($_POST["especial"])){
            $especial = $_POST["especial"];
        }
        

        echo "<p>$juego</p>";
        echo "<p>$consola</p>";
        echo "<p>$especial</p>";

        $precio = 0;

        if($consola == "PS4"){
            $precio = 60;
        } elseif ($consola == "PS5"){
            $precio = 70;
        } elseif($consola == "Switch"){
            $precio = 40;
        }
        
        if($especial == "Edición Especial"){
            $precio *= 1.25;
        }

        echo "<h3> el videojuego $juego vale $precio</h3>";
    }

    ?>

</body>

</html>