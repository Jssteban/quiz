<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edita tus datos</title>
</head>
<body>
    <h1>Editar datos del accidente</h1>
    <form action="{{ route('accidentes.update', $accidente) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="hora">
            Hora del accidente
            <br>
            <input type="text" name="hora" id="hora" value="{{ old('hora', $accidente->hora) }}">
        </label>
        <br>
        @error('hora')
            <span>{{ $message }}</span>
        @enderror
        <br>

        <label for="codigo">
            Código
            <br>
            <input type="number" name="codigo" id="codigo" value="{{ old('codigo', $accidente->codigo) }}">
        </label>
        <br>
        @error('codigo')
            <span>{{ $message }}</span>
        @enderror
        <br>

        <label for="fecha">
            Fecha
            <br>
            <input type="date" name="fecha" id="fecha" value="{{ old('fecha', $accidente->fecha) }}">
        </label>
        <br>
        @error('fecha')
            <span>{{ $message }}</span>
        @enderror
        <br>

        <label for="lugar">
            Lugar del accidente
            <br>
            <input type="text" name="lugar" id="lugar" value="{{ old('lugar', $accidente->lugar) }}">
        </label>
        <br>
        @error('lugar')
            <span>{{ $message }}</span>
        @enderror
        <br>

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
