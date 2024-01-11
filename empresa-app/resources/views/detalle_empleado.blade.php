<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titulo }}</title>
</head>
<body>
    <h2>{{ $titulo }}</h2>

    <ul>
        <li>{{ $empleado->nombre }}</li>
        <li>{{ $empleado->email }}</li>
        <li>{{ $empleado->dni }}</li>
        <li>{{ $empleado->telefono }}</li>
        <li>{{ $empleado->salario }}</li>
    </ul>

</body>
</html>