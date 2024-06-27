<x-app-layout>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Listado de títulos') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <x-success-status class="mb-4" :status="session('message')" />

            <div class="py-4 px-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <table class="table table-bordered">
                    <thead>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Género</th>
                        <th>Lanzamiento</th>
                        <th>Duración</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </thead>
                    <tbody>
                        @forelse ($titulos as $titulo)
                        <tr>
                            <td>{{ $titulo->id }}</td>
                            <td>{{ $titulo->Título }}</td>
                            <td>{{ $titulo->Género }}</td>
                            <td>{{ $titulo->Lanzamiento }}</td>
                            <td>{{ $titulo->Duración }}</td>
                            <td>
                            <a href="{{ url('/editar-titulo/'.$titulo->id) }}" class="btn btn-primary">Editar</a>
                            </td>
                            <td>
                                <form action="{{ url('borrar-titulo/'.$titulo->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Borrar</button>
                                </form>
                            </td>
                        </tr>
                        @empty 
                        <tr>
                            <td colspan="6">No se ha encontrado datos</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</x-app-layout>