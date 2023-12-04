<x-slot name="header">
    <h1 class="text-white">CRUD</h1>
</x-slot>

<div class="py-12">
<script src="https://kit.fontawesome.com/bf87075671.js" crossorigin="anonymous"></script>
    <div class="max-w-7x1 mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

            @if(session()->has('message'))
            <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <h4>{{ session('message')}}</h4>
                    </div>
                </div>
            </div>
            @endif

            <button wire:click="crear()"
                class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3">Nuevo</button>
            @if ($modal)
                @include('livewire.crearconvocatoria')
            @endif

            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-indigo-600  text-white">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">TITULO</th>
                        <th class="px-4 py-2">DESCRIPCION</th>
                        <th class="px-4 py-2">FECHA DE INICIO</th>
                        <th class="px-4 py-2">FECHA DE FIN</th>
                        <th class="px-4 py-2">NUMERO DE PLAZAS DISPONIBLES</th>
                        <th class="px-4 py-2">REQUISITOS</th>
                        <th class="px-4 py-2">ADJUNTAR DOCUMENTO</th>
                        <th class="px-4 py-2">EMPRESA</th>
                        <th class="px-4 py-2">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($convocatoriappps as $convocatoriappp)
                        <tr>
                            <td class="border px-4 py-2">{{ $convocatoriappp->id }}</td>
                            <td class="border px-4 py-2">{{ $convocatoriappp->titulo }}</td>
                            <td class="border px-4 py-2">{{ $convocatoriappp->descripcion }}</td>
                            <td class="border px-4 py-2">{{ $convocatoriappp->fecha_inicio }}</td>
                            <td class="border px-4 py-2">{{ $convocatoriappp->fecha_fin }}</td>
                            <td class="border px-4 py-2">{{ $convocatoriappp->numero_plazas_disponibles }}</td>
                            <td class="border px-4 py-2">{{ $convocatoriappp->requisitos }}</td>
                            <td class="border px-4 py-2">{{ $convocatoriappp->adjuntar_documento }}</td>
                            <td class="border px-4 py-2">{{ $convocatoriappp->empresa_id }}</td>
                            <td class="border px-4 py-2 text-center">
                                <button wire:click="editar({{$convocatoriappp->id}})" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Editar <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></button>
                                <button wire:click="borrar({{$convocatoriappp->id}})" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4">Borrar <i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>


</div>
