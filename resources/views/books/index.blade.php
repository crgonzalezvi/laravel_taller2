<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estiloindex.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body{
            background-color: whitesmoke;
        }
    </style>

    <h1>Books</h1>
    <br>
    <div class="row">
        <div class="col-3">
            <form action="{{route('books.store')}}" method="post">
                @csrf 
                <label for="title"><strong>Titulo del libro:</strong></label>
                <input type="text" class="form-control" name="title" id="title">
                <br>
                <label for="published_at"><strong>Fecha de publicación:</strong></label> 
                <input type="date" class="form-control" name="published_at" id="published_at">
                <br>
                <label for="genre"><strong>Genero:</strong></label> 
                <input type="text" class="form-control" name="genre" id="genre">
                <br>
                <button type="submit">Guardar</button>
            </form>
        </div>
       <br>
        <div class="col-6">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Fecha de publicación</th>
                    <th scope="col">Genero</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($books as $book)
                <tr>
                    <td><strong>{{ $book->id }}</strong></td>
                    <td>{{ $book->title }}</td>         
                    <td>{{ $book->published_at }}</td>
                    <td>{{ $book->genre }}</td>
                    <td>
                    <form action="{{ route('books.destroy', $book->id) }}" method="post" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este autor?');">
                        @csrf
                        @method('delete')
                        <button type="submit">Eliminar</button>
                    </form>
                    <td>
                        <form action="{{ route('books.edit',$book->id)}}">
                            @csrf
                            @method('edit')
                            <button type="submit">Editar</button>

                        </form>
                    </td>
                    </td>
                    <td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>