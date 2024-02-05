<x-web-layout>

    <x-slot name="titulo">
        JUEGOS
    </x-slot>

    <x-slot name="filtro">
        <form action="{{ route('web.filtrar_juegos') }}" method="get">
            @csrf
            Filtro de búsqueda:
            <input type='text' name='filtro'
                class="peer rounded-md border border-blue-gray-200 border-t-transparent !border-t-blue-gray-200 bg-transparent px-3 py-3 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:!border-t-gray-900 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50">
            <button
                class="select-none rounded-lg bg-gray-900 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                type="submit">Buscar</button>
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
