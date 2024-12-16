<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authors</title>
</head>
<body>
    <div>
        <h1>Crear Autor</h1>
        <form action="{{ route('authors.store') }}" method="post">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" id="name">

            <label for="nationality">Nationality</label>
            <input type="text" name="nationality" id="nationality">

            <label for="birth_date">Birth Date</label>
            <input type="date" name="birth_date" id="birth_date">

            <button type="submit">Guardar</button>
        </form>
    </div>

    <h1>Authors List</h1>
    <ul>
        @foreach ($authors as $author)

                <li>{{ $author->name }}</li>
                <li>{{ $author->nationality }}</li>
                <button onclick="window.location='{{ route('authors.edit', $author->id) }}';">Edit</button>
                <form action="{{ route('authors.destroy', $author->id) }}" method="post" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this author?');">Delete</button>
                </form>
                <br>
        @endforeach
    </ul>
</body>
</html>
