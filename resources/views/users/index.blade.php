<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <script src="{{ asset('js/app.js') }}"></script>

    <title>Document</title>
</head>

<body>


    <div class="container">
        <h1>Lista utenti</h1>
        <table class="table table-bordered table-striped">
            <tr>
                <th>Nome</th>
                <th>Azioni</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></td>
                    <td><a href="{{ route('users.edit', $user->id) }}">Modifica</a></td>
                    <td><a href="{{ route('users.delete', $user->id) }}">Elimina</a></td>
                </tr>
            @endforeach
        </table>
    <a href="{{ route('users.create') }}" class="btn btn-primary">Crea nuovo utente</a>
    </div>
</body>

</html>
