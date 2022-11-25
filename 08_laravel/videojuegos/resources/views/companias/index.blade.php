<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Compañias</h1>
        <a href="{{route('companias.create')}}" class="btn btn-success">
            Crear Compania
        </a>

        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Sede</th>
                            <th>Fecha fundación</th>
                            <th></th>
                            <th></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($companias as $compania)
                        <tr>
                            <td>{{$compania->nombre}}</td>
                            <td>{{$compania->sede}}</td>
                            <td>{{$compania->fecha_fundacion}}</td>
                            <td>
                                <form method="GET" action="{{ route('companias.show', ['compania' => $compania -> id]) }}"></form>
                                <button class="btn btn-primary" type="submit">Ver</button>
                            </td>
                            <td>
                                <form method="POST" action="{{ route('companias.destroy', ['compania' => $compania -> id]) }}">
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