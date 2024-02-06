<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Create token') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Genera un token para la API') }}
        </p>
    </header>



    <form method="get" action="{{ route('profile.create-token') }}" class="mt-6 space-y-6">
        @csrf

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Create') }}</x-primary-button>
        </div>
    </form>
</section>
