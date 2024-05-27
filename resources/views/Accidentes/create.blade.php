<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reportar un Accidente</title>
</head>
<body>
    <h1>Reportar un nuevo accidente</h1>
    <form action="{{ route('accidentes.store') }}" method="POST">
        @csrf
        <label for="hora">
            Hora del accidente
            <br>
            <input type="text" name="hora" id="hora" value="{{ old('hora') }}">
        </label>
        <br>
        @error('hora')
            <span>{{ $message }}</span>
        @enderror
        <br>

        <label for="codigo">
            Código
            <br>
            <input type="number" name="codigo" id="codigo" value="{{ old('codigo') }}">
        </label>
        <br>
        @error('codigo')
            <span>{{ $message }}</span>
        @enderror
        <br>

        <label for="fecha">
            Fecha
            <br>
            <input type="text" name="fecha" id="fecha" value="{{ old('fecha') }}">
        </label>
        <br>
        @error('fecha')
            <span>{{ $message }}</span>
        @enderror
        <br>

        <label for="lugar">
            Lugar del accidente
            <br>
            <input type="text" name="lugar" id="lugar" value="{{ old('lugar') }}">
        </label>
        <br>
        @error('lugar')
            <span>{{ $message }}</span>
        @enderror
        <br>

        <button type="submit">Reportar</button>
    </form>
</body>
</html>
