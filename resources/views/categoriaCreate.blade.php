<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear categoria</title>
    @vite(['resources/css/Estilos.css',])
</head>

<body>
    <h1>Crear Categoria</h1>
    <a href="/manga">Mangas</a>
    <a href="/manga/create">Crear Manga</a>
    <a href="/categoria">Categorias</a>
    <a href="/categoria/create">Crear Categoria</a>

    <form method="POST" action="/categoria" id="formulario">
        @csrf

        <div class="">
            <label for="categoria">Nombre de la categoria</label>
            <input type="text" name="categoria" id="categoria">
        </div>

        <input type="submit" name="action" id="enviar">
    </form>
</body>

</html>