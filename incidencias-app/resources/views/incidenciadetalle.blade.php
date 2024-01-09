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


<a href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Latidud: {{ $incidencia->latitud }} - Longitud: {{ $incidencia->longitud }}</h5>
<p class="font-normal text-gray-700 dark:text-gray-400">Ciudad: {{ $incidencia->ciudad }}</p>
<p class="font-normal text-gray-700 dark:text-gray-400">Descripción: {{ $incidencia->descripcion }}</p>



</a>


</body>
</html>