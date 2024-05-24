<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Manga</title>
    @vite(['resources/css/Estilos.css',])
</head>

<body>
    <h1>Crear Manga</h1>
    <a href="/manga">Mangas</a>
    <a href="/manga/create">Crear Manga</a>
    <a href="/categoria">Categorias</a>
    <a href="/categoria/create">Crear Categoria</a>

    <form method="POST" action="/manga" id="formulario">
        @csrf

        <div class="">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
        </div>

        <div class="">
            <label for="autor">Autor</label>
            <input type="text" name="autor" id="autor">
        </div>

        <div class="">
            <label for="precio">Precio</label>
            <input type="number" name="precio" id="precio">
        </div>

        <label for="categorias">Categoria</label>
        <select id="categorias" name="categorias[]" multiple>
            <option value="" disabled selected>Categorias:</option>
            @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->categoria}}</option>
            @endforeach
        </select>

        <button type="submit" name="action" id="enviar">Crear</button>
    </form>
</body>

</html>