{{-- resources/views/dispositivos/index.blade.php --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestión de Dispositivos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    {{-- Botón para crear un nuevo dispositivo --}}
                    <a href="{{ route('dispositivos.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mb-4">
                        Añadir Dispositivo
                    </a>

                    {{-- Tabla para mostrar los dispositivos --}}
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Serial</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tipo</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Modelo</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Departamento</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ubicación</th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Acciones</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($dispositivos as $dispositivo)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $dispositivo->serial }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $dispositivo->tipo_dispositivo }}</td>
                                        {{-- Accedemos a los datos de la relación --}}
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $dispositivo->modeloRelacion->nombre_modelo ?? 'N/A' }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $dispositivo->departamentoRelacion->nombre_departamento ?? 'N/A' }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $dispositivo->ubicacionRelacion->nombre_ubicación ?? 'N/A' }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="{{ route('dispositivos.edit', $dispositivo) }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                            {{-- Aquí irá el botón de eliminar en el futuro --}}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="px-6 py-4 whitespace-nowrap text-center text-gray-500">
                                            No hay dispositivos registrados.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>