<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titulo }}</title>
</head>
<body>
    <h2>{{ $titulo }}</h2>

    <form action="/empleados" method="post">
        @csrf
        <p>Nombre: <input type="text" name="nombre" id=""></p>
        <p>Email: <input type="text" name="email" id=""></p>
        <p>DNI: <input type="text" name="dni" id=""  maxlength="9"></p>
        <p>Teléfono: <input type="text" name="telefono" id=""></p>
        <p>Salario: <input type="number" name="salario" id="" min="100" max="100000"></p>
        <input type="submit" value="Nuevo">
    </form>

</body>
</html>