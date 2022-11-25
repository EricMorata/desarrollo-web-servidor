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
        <h1>Editar videojuegos</h1>
        <div class="row">
            <div class="col-12">
                <form>
                    @csrf 
                    <div class="form-group mb-3">
                        <label class="form-label">Título</label>
                        <input class = "form-control" type="text" name="titulo" value="{{ $videojuego->titulo }}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Precio</label>
                        <input class = "form-control" type="number" name="precio" value="{{ $videojuego->precio }}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">PEGI</label>
                        <select class = "form-select" name="pegi" value="{{ $videojuego->pegi }}">
                            <option value="3">PEGI 3</option>
                            <option value="4">PEGI 4</option>
                            <option value="7">PEGI 7</option>
                            <option value="16">PEGI 16</option>
                            <option value="18">PEGI 18</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Descripción</label>
                        <textarea class = "form-control"  name="descripcion">{{ $videojuego->descripcion }}</textarea>
                    </div>
                    <div class="form-group  mt-3">
                    <button class="btn btn-primary">Editar</button>
                    <a href="http://localhost:8000/videojuegos/" class="btn btn-secondary">Volver</a>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>