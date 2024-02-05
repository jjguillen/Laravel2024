<x-web-layout>

    <x-slot name="titulo">
        JUEGOS
    </x-slot>

    <x-slot name="filtro">
        <form action="{{ route('web.filtrar_juegos') }}" method="get">
            @csrf
            <x-input-label for="filtro" :value="__('Filtro de búsqueda')" />
            <x-text-input id="filtro" name="filtro" type="text" class="mt-2 px-2 py-2" :value="old('filtro')"
                required autofocus autocomplete="filtro" />
            <x-button-submit class='mb-1'>Buscar</x-button-submit>
        </form>
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
