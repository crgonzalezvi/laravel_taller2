<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Author</title>
</head>
<body>
    <h1>Edit Author</h1>
    <form action="{{ route('authors.update', $author->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $author->name }}" required>

        <label for="nationality">Nationality</label>
        <input type="text" name="nationality" id="nationality" value="{{ $author->nationality }}" required>

        <label for="birth_date">Birth Date</label>
        <input type="date" name="birth_date" id="birth_date" value="{{ $author->birth_date }}" required>

        <button type="submit">Guardar Cambio</button>
    </form>
    <br>
    <a href="{{ route('authors.index') }}">Volver</a>
</body>
</html>
