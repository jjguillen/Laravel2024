<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">


                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Juego
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fecha de Inicio
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Primer premio
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Segundo premio
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Máximo de participantes
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($torneos as $torneo)
                            <tr>
                                <td class="px-6 py-4">
                                    {{ $torneo->nombre }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ Str::limit($torneo->juego, $limit = 20) }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $torneo->fechaInicio }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $torneo->premio1 }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $torneo->premio2 }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $torneo->maxParticipantes }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $torneos->links() }}


            </div>
        </div>
    </div>


</x-app-layout>
