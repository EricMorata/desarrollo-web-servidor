<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Consolas</title>
</head>

<body>
    <div class="container">
        <h1>Index de consolas</h1>
        <a href="{{route('consolas.create')}}" class="btn btn-success">
            Crear Consola
        </a>

        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Año salida</th>
                            <th>Generación</th>
                            <th>Descripción</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($consolas as $consola)
                        <tr>
                            <td>{{$consola->nombre}}</td>
                            <td>{{$consola->Anio_salida}}</td>
                            <td>{{$consola->generacion}}</td>
                            <td>{{$consola->descripcion}}</td>
                            <td>
                                <form method="GET" action="{{ route('consolas.show', ['consola' => $consola -> id]) }}"></form>
                                <button class="btn btn-primary" type="submit">Ver</button>
                            </td>
                            <td>
                                <form method="get" action="{{ route('consolas.edit', ['consola' => $consola -> id]) }}">
                                    <button class="btn btn-success" type="submit">Editar</button>
                                </form>
                            </td>
                            <td>
                                <form method="POST" action="{{ route('consolas.destroy', ['consola' => $consola -> id]) }}">
                                    @csrf 
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger" type="submit">Borrar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>