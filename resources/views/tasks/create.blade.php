<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear una tarea</title>
</head>
<body>
    <h1>Crear una tarea</h1>
    <form action="{{ Route('tasks.store') }}" method="post">
        @csrf
        <p>
            <input type="text" name="title" id="title" placeholder="Escribe el título..">
        </p>
        <p>
            <input type="number" name="priority" id="priority" placeholder="Escribe la prioridad..">
        </p>
        <p>
            <input type="submit" value="Crear">
        </p>
    </form>
</body>
</html>