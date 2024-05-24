<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    @vite(['resources/css/Estilos.css'])
</head>
<body>
    @if (session()->has('success'))
        <p>SI SE BORRO</p>
    @endif

    <h1>Mangas</h1>
    <a href="/manga">Mangas</a>
    <a href="/manga/create">Crear Manga</a>
    <a href="/categoria">Categorias</a>
    <a href="/categoria/create">Crear Categoria</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Autor</th>
                <th>Precio</th>
                <th>Categorias</th>
                <th>Ver</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mangas as $manga)
                <tr>
                    <td>{{$manga->id}}</td>
                    <td>{{$manga->nombre}}</td>
                    <td>{{$manga->autor}}</td>
                    <td>{{$manga->precio}}</td>
                    <td>
                        @foreach ($manga->categorias as $categoria)
                        {{$categoria->categoria}}<br>
                        @endforeach
                    </td>
                    
                    <td><a href="/manga/{{$manga->id}}">IR</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>