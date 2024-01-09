<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incidencias</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

</head>
<body>
    


<div class="relative overflow-x-auto">
    <h2 class="ml-2 mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900">
        Incidencias
        <a href="/incidencias/create">
            <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2.5 me-1 mb-1 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Nueva</button>
        </a>
    </h2>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Latitud
                </th>
                <th scope="col" class="px-6 py-3">
                    Longitud
                </th>
                <th scope="col" class="px-6 py-3">
                    Ciudad
                </th>
                <th scope="col" class="px-6 py-3">
                    Dirección
                </th>
                <th scope="col" class="px-6 py-3">
                    Descripción
                </th>
                <th scope="col" class="px-6 py-3">
                    Estado
                </th>
                <th scope="col" class="px-6 py-3">
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($incidencias as $incidencia)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">
                        {{ $incidencia->latitud }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $incidencia->longitud }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $incidencia->ciudad }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $incidencia->direccion }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $incidencia->descripcion }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $incidencia->estado }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="/incidencias/{{ $incidencia->id }}"><i class="zmdi zmdi-alarm-check"></i></a>
                        <a href="/incidencias/delete/{{ $incidencia->id }}"><i class="zmdi zmdi-delete"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>





</body>
</html>