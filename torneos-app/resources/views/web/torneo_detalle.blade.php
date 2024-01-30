<x-web-layout>

    <x-slot name="titulo">
        TORNEO {{ $torneo->nombre }}
    </x-slot>

    <x-detalle>
        <x-slot name='fecha'>
            {{ $torneo->fechaInicio }}
        </x-slot>
        <x-slot name='juego'>
            {{ $torneo->juego }}
        </x-slot>
        <x-slot name='imagen'>
            {{ asset('storage/torneo_' . $torneo->id . '.jpg') }}
        </x-slot>

        <p>Primer premio: {{ $torneo->premio1 }}€</p>
        <p>Segundo premio: {{ $torneo->premio2 }}€</p>
        <p>Máximo de participantes: {{ $torneo->maxParticipantes }}</p>

        <x-slot name='boton'>
            Inscribirse
        </x-slot>
    </x-detalle>
</x-web-layout>
