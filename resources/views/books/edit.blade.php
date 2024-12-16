<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Books</title>
</head>
<body>
    <h1>Edit Book</h1>
    <form action="{{ route('books.update', $book->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="title">Titulo </label>
        <input type="text" name="title" id="title" value="{{ $book->title }}" required>

        <label for="published_at">Fecha de publicación</label>
        <input type="text" name="published_at" id="published_at" value="{{ $book->published_at }}" required>

        <label for="genre">Genero</label>
        {{-- <input type="text" name="genre" id="genre" value="{{ $book->genre }}" required> --}}
        <select name="genre" id="genre">
            <option value="Terror"{{ $book->genre == 'Terror' ? 'selected' : '' }}>Terror</option>
            <option value="Ficcion"{{ $book->genre == 'Ficcion' ? 'selected' : '' }}>Ficcion</option>
            <option value="Realismo"{{ $book->genre == 'Realismo' ? 'selected' : '' }}>Realismo</option>
            <option value="Infantil"{{ $book->genre == 'Infantil' ? 'selected' : '' }}>Infantil</option>
        </select>

        <button type="submit">Guardar Cambio</button>
    </form>
    <br>
    <a href="{{ route('books.index') }}">Volver</a>
</body>
</html>
