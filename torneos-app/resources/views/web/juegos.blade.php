<x-web-layout>

    <x-slot name="titulo">
        JUEGOS
    </x-slot>

    @foreach ($juegos as $juego)
        <x-card>
            <x-slot name="titulo">
                {{ $juego->nombre }}
            </x-slot>
            <x-slot name="imagen">
                {{ asset('storage/juego_' . $juego->id . '.jpg') }}
            </x-slot>
            <x-slot name="descripcion">
                <p>Plataforma: {{ $juego->plataforma }}</p>
                <p>Edad recomendada: {{ $juego->edadR }} años </p>
                <p>Nota: {{ $juego->nota }}</p>
            </x-slot>
            <x-slot name="boton">
                <a href="{{ route('web.juegos_detalle', ['juego' => $juego->id]) }}">Ver detalle</a>
            </x-slot>
        </x-card>
    @endforeach

    <x-slot name="links">
        {{ $juegos->links() }}
    </x-slot>
</x-web-layout>
