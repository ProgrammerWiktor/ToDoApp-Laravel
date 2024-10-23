<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edytuj zadanie</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="container">
        <h1 class="title">Edytuj zadanie</h1>
        <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="edit-form">
            @csrf
            @method('PUT')
            <div class="wrapper">
                <label for="title" class="label">Tytuł zadania:</label>
                <input type="text" name="title" id="title" value="{{ $task->title }}" required class="input">
            </div>
            <div class="wrapper">
                <label for="description" class="label">Opis:</label>
                <textarea name="description" id="description" class="textarea">{{ $task->description }}</textarea>
            </div>
            <div class="wrapper">
                <label for="is_completed" class="label">Zakończone:</label>
                <input type="checkbox" name="is_completed" id="is_completed" {{ $task->is_completed ? 'checked' : '' }} class="checkmark">
            </div>
            <button type="submit" class="form-button">Zapisz zmiany</button>
        </form>
    </div>
</body>
</html>
