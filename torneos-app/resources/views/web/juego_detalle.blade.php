<x-web-layout>

    <x-slot name="titulo">
        JUEGO {{ $juego->nombre }}
    </x-slot>

    <x-detalle>
        <x-slot name='fecha'>
            Edad recomendada: {{ $juego->edadR }}
        </x-slot>
        <x-slot name='juego'>
            Plataforma: {{ $juego->plataforma }}
        </x-slot>
        <x-slot name='imagen'>
            {{ asset('storage/juego_' . $juego->id . '.jpg') }}
        </x-slot>

        <div class="flex">
            @for ($i = 0; $i < $juego->nota; $i++)
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="w-5 h-5 text-yellow-700">
                    <path fill-rule="evenodd"
                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                        clip-rule="evenodd"></path>
                </svg>
            @endfor
        </div>

    </x-detalle>
</x-web-layout>
