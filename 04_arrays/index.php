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

        "26812688n"  =>  "Pedro",
        "74657688p"  => "Juan",
        "12345678L"  => "Manué"
    ];

    echo "<br><br>";
    $dni["12345566m"] = "Rodolfo"; //ha añadido un elemento

    $dni["26812688n"] = "penelope"; //ha modificado un elemento

    unset($dni["12345678L"]); //ha borrado un elemento

    print_r($dni);
    echo "<br><br>"
    ?>



    <?php
    arsort($dni);//ordenado por valor

  

    echo "<table border>";
    echo "<tr>";
    echo "<th >Dni</th>";
    echo "<th >Nombre</th>";
    echo "</tr>";
    

    foreach ($dni as $nDni => $nombre){
        echo "<tr>";
        echo "<td>". $nDni . "</td>";
        echo "<td>". $nombre . "</td>";
        echo"</tr>";
    }

    echo "</table>";
    echo "<br><br>";

    ?>





    <table border>
        <tr>
            <th>DNI</th>
            <th>Nombre</th>
        </tr>
    <?php
    echo "<br><br>";
    ksort($dni);//ordenado alreves por la clave
    foreach($dni as $nDni => $nombre){
        ?>
        <tr>
        <td> <?php echo $nDni; ?> </td>
        <td> <?php echo $nombre; ?> </td>
        </tr>
        <?php
        
    }
    

?>
    </table>



    
<?php



    $series = [
        'el juego del calamar',
        'La casa de papel',
        'Alice in borderland',
        'The witcher'
    ];

    array_push($series, "Cuentame", "Dark");
    echo "<br><br>";
    $series[] = "Big bang theory"; //añadir elementos
    $series[10] = "LQSA"; //añadir elementos
    array_push($series, "Aqui no hay quien viva"); //añadir elementos
    unset($series[10]); //borrar elemento
    $series = array_values($series); //resetea todas las claves [0][1][2][3]...

    print_r($series);

    echo "<br><br>";
    echo count($series); //te hace un recuento de valores
    echo "<br><br>";

//Bucle foreach para las series
sort($series); //ordena en orden alfabetico normal
foreach($series as $clave => $valor){
    echo $clave . "=> ". $valor ."<br>";
}






?>

<!-- Bucle for para las series -->

    <ul>
        <?php
        rsort($series); //ordena alreves
        for ($i = 1; $i < count($series); $i++) {

        ?>
            <li>
                <?php
                echo $series[$i];
                ?>
            </li>

        <?php

        }

        ?>

    </ul>


            <!-- bucle while para las series-->
         <ol> 
    <?php
    $i=0;
    while($i<count($series)){
        ?>
        <li>
            <?php 
            echo $series[$i] 
            ?>
             </li>
             <?php 
             $i++;
    }
    ?>
         </ol>

  

<?php
echo "<br><br>";

$frutas_1=["Melocotón" => 0.5,"Sandía" => 3,"Kiwi"=>2];

$frutas_2=["Melocotón"=> 0.5,"kiwi"=>2,"Sandía" => 3];

if($frutas_1==$frutas_2 ||$frutas_1===$frutas_2){
    if($frutas_1===$frutas_2){
    echo "echo <p>Las frutas son las mismas y estan igual ordenadas</p>";
    }else{
    echo "<p>Las frutas son las mismas y estan igual ordenadas</p>";
    }
}else{
    echo "<p>Las frutas no son las mismas o no estan igual ordenadas</p>";
}



 if($frutas_1===$frutas_2){
    echo "<p>Las frutas son las mismas y estan igual ordenadas</p>";
} else {
    echo "<p>Las frutas no son las mismas o no estan igual ordenadas</p>";
} 

?>






</body>

</html>