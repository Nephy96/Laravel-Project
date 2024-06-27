<x-app-layout>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Añadir títulos') }}
        </h2>
    </x-slot>

    <div class="py-12">

    <x-success-status class="mb-4" :status="session('message')" />

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="py-4 px-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ url('titleList')}}" method="POST">
                    @csrf

                    <div>
                        <x-input-label for="Título" :value="__('Título')" />
                        <x-text-input id="Título" class="block mt-1 w-full" type="text" name="Título" :value="old('Título')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('Título')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="Género" :value="__('Género')" />
                        <x-text-input id="Género" class="block mt-1 w-full" type="text" name="Género" :value="old('Género')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('Género')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="Lanzamiento" :value="__('Lanzamiento')" />
                        <x-text-input id="Lanzamiento" class="block mt-1 w-full" type="text" name="Lanzamiento" :value="old('Lanzamiento')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('Lanzamiento')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="Duración" :value="__('Duración')" />
                        <x-text-input id="Duración" class="block mt-1 w-full" type="text" name="Duración" :value="old('Duración')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('Duración')" class="mt-2" />
                    </div>

                    <x-primary-button class="ms-3">
                        {{ __('Añadir título') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>