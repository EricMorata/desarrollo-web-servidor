<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <?php
                $personas = [
                    ['26813688n', 'Eric'],
                    ['44697649r', 'Laura'],
                    ['29814567q', 'Jose'],
                ];
                ?>
                <br><br>
                <table class="table table-striped">
                    <thead class="table">
                        <tr>
                            <th>Dni</th>
                            <th>Nombre</th>
                            <th>Validar dni</th>
                        </tr>

                        <?php
                        foreach ($personas as $persona) {
                            list($dni, $nombre) = $persona;
                        ?>
                            <tr>
                                <td><?php echo $dni ?></td>
                                <td><?php echo $nombre ?></td>
                                <td><?php validacion($dni) ?></td>
                            </tr>

                        <?php
                        }
                        ?>
                        <?php
                        function validacion(string $temp_dni)
                        {
                            $letras = strtoupper(substr($temp_dni, -1));
                            $temp_dni = substr($temp_dni, 0, -1);
                            if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $temp_dni % 23, 1) == $letras && strlen($letras) == 1 &&  strlen($temp_dni) == 8) {
                                echo "<p>El DNI es correcto</p>";
                            } else {
                                echo "<p>El DNI no es correcto</p>";
                            }

                           /*  $resultado = match (true){
                                $temp_dni == (substr("TRWAGMYFPDXBNJZSQVHLCKE", $temp_dni % 23, 1) == $letras && strlen($letras) == 1 &&  strlen($temp_dni) == 8)
                                => "El DNI ES CORRECTO",
                                default => "No es correcto"
                            }; */
                            


                            return $temp_dni ;
                        }

                        ?>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>