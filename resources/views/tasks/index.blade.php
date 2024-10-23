<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista zadań</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="container">
        <h1 class="title">Lista zadań</h1>
        <a href="{{ route('tasks.create') }}" class="button">Dodaj nowe zadanie</a>
    
        <ul class="todo">
            @foreach($tasks as $task)
                <li class="todo-item">
                    <p class="todo-title">{{ $task->title }}</p>
                    <p class="todo-description">{{ $task->description }}</p>
                    <p class="todo-completed">{{ $task->is_completed ? 'Zakończone' : 'W trakcie' }}</p>
                    <div class="todo-buttons">
                        <a href="{{ route('tasks.edit', $task->id) }}" class="todo-button">Edytuj</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="todo-button">Usuń</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
