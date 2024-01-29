<x-web-layout>

    <x-slot name="titulo">
        TORNEOS MÁS RECIENTES
    </x-slot>

    @foreach($torneos as $torneo)

        <x-card>
            <x-slot name="titulo">
                {{ $torneo->nombre }}
            </x-slot>
            <x-slot name="descripcion">
                <p>Fecha inicio: {{ $torneo->fechaInicio}}</p>
                <p>Primer premio: {{ $torneo->premio1}}€</p>
                <p>Segundo premio: {{ $torneo->premio2}}€</p>
                <p>Máximo de participantes: {{ $torneo->maxParticipantes}}</p>
            </x-slot>
            <x-slot name="boton">
                Ver detalle
            </x-slot>
        </x-card>

    @endforeach

</x-web-layout>