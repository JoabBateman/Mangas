<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manga</title>
    @vite(['resources/css/Estilos.css',])
</head>

<body>
    <h1>Info del manga</h1>
    <a href="/manga">Mangas</a>
    <a href="/manga/create">Crear Manga</a>
    <a href="/categoria">Categorias</a>
    <a href="/categoria/create">Crear Categoria</a>

    <h3>{{$manga->nombre}}</h3>
    <h3>{{$manga->autor}}</h3>
    <h3>{{$manga->precio}}</h3>
    @foreach ($manga->categorias as $categoria)
    <h3>{{$categoria->categoria}}</h3>
    @endforeach

    <a href="/manga/{{$manga->id}}/edit">Modificar</a>
    <form method="POST" action="/manga/{{$manga->id}}" id="form">
        @csrf
        @method('DELETE')
        <input type="submit" name="action" value="Eliminar">
    </form>
</body>

</html>