<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj zadanie</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="container">
        <h1 class="title">Dodaj nowe zadanie</h1>
        <form action="{{ route('tasks.store') }}" method="POST" class="create-form">
            @csrf
            <div class="wrapper">
                <label for="title" class="label">Tytuł zadania:</label>
                <input type="text" name="title" id="title" required class="input">
            </div>
            <div class="wrapper">
                <label for="description" class="label">Opis:</label>
                <textarea name="description" id="description" class="textarea"></textarea>
            </div>
            <button type="submit" class="form-button">Zapisz</button>
        </form>
    </div>
</body>
</html>
