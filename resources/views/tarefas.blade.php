<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <title>Lista de Tarefas</title>
</head>

<body>
    <h1>Lista de Tarefas</h1>
<div class="container mt-1 container-fluid">
    <table class="table table-hover">
    <tr>
        <th>Tarefas semanais</th>
    </tr>
    @foreach ($tarefas as $tarefa)
    <tr>
        <td>{{ $tarefa->nome }}</td>
    </tr>
    @endforeach
    </table>
    </div>
    </body>

</html>