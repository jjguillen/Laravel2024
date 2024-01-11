<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titulo }}</title>
</head>
<body>
    <h2>{{ $titulo }}</h2>

    <form action="/empleados/{{ $empleado->id }}" method="post">
        @csrf
        <p>Nombre: <input type="text" name="nombre" id="" value="{{ $empleado->nombre }}"></p>
        <p>Email: <input type="text" name="email" id="" value="{{ $empleado->email }}"></p>
        <p>DNI: <input type="text" name="dni" id="" value="{{ $empleado->dni }}" maxlength="9"></p>
        <p>Teléfono: <input type="text" name="telefono" id="" value="{{ $empleado->telefono }}"></p>
        <p>Salario: <input type="number" name="salario" id="" min="100" max="100000" value="{{ $empleado->salario }}"></p>
        <input type="submit" value="Actualizar">
    </form>

</body>
</html>