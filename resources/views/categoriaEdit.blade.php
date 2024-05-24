<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Categoria</title>
    @vite(['resources/css/Estilos.css',])
</head>

<body>
    <h1>Editar Categoria</h1>
    <a href="/manga">Mangas</a>
    <a href="/manga/create">Crear Manga</a>
    <a href="/categoria">Categorias</a>
    <a href="/categoria/create">Crear Categoria</a>

    <form action="/categoria/{{$categoria->id}}" method="POST" id="form">
        @csrf
        @method('PATCH')

        <div>
            <label for="categoria">Nombre de la categoria:</label>
            <input type="text" name="categoria" id="categoria" value="{{$categoria->categoria}}">
        </div>

        <button type="submit" class="btn center" name="action">Enviar<button>
    </form>
</body>

</html>