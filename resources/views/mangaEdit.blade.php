<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Manga</title>
    @vite(['resources/css/Estilos.css',])
</head>

<body>
    <h1>Editar manga</h1>
    <a href="/manga">Mangas</a>
    <a href="/manga/create">Crear Manga</a>
    <a href="/categoria">Categorias</a>
    <a href="/categoria/create">Crear Categoria</a>

    <form action="/manga/{{$manga->id}}" method="POST" id="form">
        @csrf
        @method('PATCH')

        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="{{$manga->nombre}}">
        </div>

        <div>
            <label for="autor">Autor</label>
            <input type="text" name="autor" id="autor" value="{{$manga->autor}}">
        </div>

        <div>
            <label for="precio">Precio</label>
            <input type="text" name="precio" id="precio" value="{{$manga->precio}}">
        </div>

        <div>
            <label for="categorias">Categorias:</label>
            <select id="categorias" name="categorias[]" multiple>
                <option value="" disabled selected>Categorias usadas:</option>
                @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}" @if($manga->categorias->contains($categoria->id)) selected @endif>
                    {{ $categoria->categoria }}
                </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn center" name="action">Enviar<button>
    </form>
</body>

</html>