<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Accidente</title>
</head>
<body>
    <h1>Detalles del Accidente</h1>
    <ul>
        <li><strong>Hora del accidente:</strong> {{ $accidente->hora }}</li>
        <li><strong>Código del accidente:</strong> {{ $accidente->codigo }}</li>
        <li><strong>Fecha del accidente:</strong> {{ $accidente->fecha }}</li>
        <li><strong>Lugar del accidente:</strong> {{ $accidente->lugar }}</li>
    </ul>

    <form action="{{ route('accidentes.destroy', $accidente) }}" method="POST">
        @csrf
        @method('DELETE')
        <br>
        <a href="{{ route('accidentes.index') }}">Ir al inicio</a>
        <br><br>
        <a href="{{ route('accidentes.edit', $accidente) }}">Editar</a>
        <br><br>
        <button type="submit">Borrar</button>
    </form>
</body>
</html>
