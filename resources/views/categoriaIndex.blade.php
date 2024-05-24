<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categoria Index</title>
    @vite(['resources/css/Estilos.css'])
</head>
<body>
    @if (session()->has('success'))
    @endif

    <h1>Categorias</h1>
    <a href="/manga">Mangas</a>
    <a href="/manga/create">Crear Manga</a>
    <a href="/categoria">Categorias</a>
    <a href="/categoria/create">Crear Categoria</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre de la categoria</th>
                <th>Ver</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
                <tr>
                    <td>{{$categoria->id}}</td>
                    <td>{{$categoria->categoria}}</td>
                    
                    <td><a href="/categoria/{{$categoria->id}}">IR</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>