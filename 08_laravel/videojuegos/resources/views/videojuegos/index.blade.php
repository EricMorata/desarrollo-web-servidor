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
        <h1>Videojuegos</h1>
        <p>{{$mensaje}}</p>
        <a href="{{ route('videojuegos.create') }}" class="btn btn-primary">
            Crear videojuego
        </a>
        <a href="{{ route('videojuegos.search') }}" class="btn btn-dark">
            Buscar videojuego
        </a>
        <br><br>
        <form action="{{ route('videojuegos.search') }}" method="GET">
            <div class="row">
                <div class="col-2">
                    <label class="form-label">Buscar por título</label>
                </div>
                <div class="col-6">
                    <input class="form-control" type="text" name="titulo">
                </div>
                <div class="col-2">
                    <button class="btn btn-secondary" type="submit">Buscar</button>
                </div>
            </div>
        </form>
        <br><br>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr class="table-dark">
                            <th>Título</th>
                            <th>Precio</th>
                            <th>PEGI</th>
                            <th>Descripción</th>
                            <th>Compañia</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($videojuegos as $videojuego)
                            <tr class="table-light">
                                <td>{{ $videojuego -> titulo }}</td>
                                <td>{{ $videojuego -> precio }}</td>
                                <td>{{ $videojuego -> pegi }}</td>
                                <td>{{ $videojuego -> descripcion }}</td>
                                <td> {{$videojuego -> compania -> nombre}} </td>
                             
                                <td>
                                    <form method="get" action="{{ route('videojuegos.edit', ['videojuego' => $videojuego -> id]) }}">
                                        <button class="btn btn-success" type="submit">Editar</button>
                                    </form>
                                </td>

                                <td>
                                    <form method="post" action="{{ route('videojuegos.destroy', ['videojuego' => $videojuego -> id]) }}">
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