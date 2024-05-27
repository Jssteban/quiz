<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Accidentes</title>
</head>
<body>
    <h1>Bienvenido a la página principal de los accidentes</h1>
    <a href="{{ route('accidentes.create') }}">Reportar un accidente</a>
    <ul>
        @foreach ($accidentes as $accidente)
        <li>
            <a href="{{ route('accidentes.show', $accidente->id) }}">{{ $accidente->hora }}</a>
        </li>
        @endforeach
    </ul>
    {{ $accidentes->links() }}
</body>
</html>
