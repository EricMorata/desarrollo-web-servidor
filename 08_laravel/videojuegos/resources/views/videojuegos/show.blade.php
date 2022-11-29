<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Mostrar videojuego</h1>
            <p>Título:  {{ $videojuego -> titulo }}</p>
            <p>Precio:  {{ $videojuego -> precio }}</p>
            <p>PEGI:  {{ $videojuego -> pegi }}</p>
            <p>Descripción:  {{ $videojuego -> descripcion }}</p>
            <form method="GET" action="{{ route('videojuegos.edit', ['videojuego' => $videojuego -> id]) }}">
                <button class="btn btn-primary" type="submit">Editar</button>
            </form>
    </div>
    
</body>
</html>