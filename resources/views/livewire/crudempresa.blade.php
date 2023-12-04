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
                @include('livewire.crearempresa')
            @endif

            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-indigo-600  text-white">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">NOMBRE</th>
                        <th class="px-4 py-2">DIRECCION</th>
                        <th class="px-4 py-2">TELEFONO</th>
                        <th class="px-4 py-2">DESCRIPCION</th>
                        <th class="px-4 py-2">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empresas as $empresa)
                        <tr>
                            <td class="border px-4 py-2">{{ $empresa->id }}</td>
                            <td class="border px-4 py-2">{{ $empresa->nombre }}</td>
                            <td class="border px-4 py-2">{{ $empresa->direccion }}</td>
                            <td class="border px-4 py-2">{{ $empresa->telefono }}</td>
                            <td class="border px-4 py-2">{{ $empresa->descripcion }}</td>
                            <td class="border px-4 py-2 text-center">
                                <button wire:click="editar({{$empresa->id}})" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Editar <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></button>
                                <button wire:click="borrar({{$empresa->id}})" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4">Borrar <i class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>


</div>
