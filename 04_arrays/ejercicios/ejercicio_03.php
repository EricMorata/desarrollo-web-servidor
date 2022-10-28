<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ejercicio 3</h1>
     <!--
    Ejercicio 3
Dada la lista de países y sus capitales mostrada 
en la siguiente página, muéstralos en 
una tabla ordenados por los nombres de sus países.
-->

<?php
    $paises = array(
        "Italy"      => "Rome",
        "Luxembourg" => "Luxembourg",
        "Belgium"    => "Brussels",
        "Denmark"    => "Copenhagen",
        "Finland"    => "Helsinki",
        "France"     => "Paris",
        "Slovakia"   => "Bratislava",
        "Slovenia"   => "Ljubljana",
        "Germany"    => "Berlin",
        "Greece"     => "Athens",
        "Ireland"    => "Dublin",
        "Netherlands"=> "Amsterdam",
        "Portugal"   => "Lisbon",
        "Spain"      => "Madrid",
        "Sweden"     => "Stockholm",
        "United Kingdom" => "London",
        "Cyprus"     => "Nicosia",
        "Lithuania"  => "Vilnius",
        "Czech Republic" => "Prague",
        "Estonia"    => "Tallin",
        "Hungary"    => "Budapest",
        "Latvia"     => "Riga",
        "Malta"      => "Valetta",
        "Austria"    => "Vienna",
        "Poland"     => "Warsaw"
    );

    ?>

<table>
        <tr>
            <th>País</th>
            <th>Capital</th>
        </tr>
        <?php
        foreach ($paises as $pais => $capital) {
        ?>
            <tr>
                <td><?php echo $pais ?></td>
                <td><?php echo $capital ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

</body>
</html>