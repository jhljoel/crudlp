<script src="https://kit.fontawesome.com/bf87075671.js" crossorigin="anonymous"></script>
<div class="container">
        <!-- Background overlay -->
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75">
            </div>
        </div>
        <!-- Modal -->
        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <form action="">
                    <!-- Modal panel -->
                    <div
                        class="w-full inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <!-- Modal content -->
                            <div class="sm:flex sm:items-start">
                                <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <label for="titulo"
                                        class="block text-gray-700 text-lg font-bold mb-0">Titulo:</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded mt-2 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="titulo" wire:model="titulo" placeholder="Poner el titulo">
                                </div>
                            </div>

                            <div class="mt-4 sm:flex sm:items-start">
                                <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <label for="descripcion"
                                        class="block text-gray-700 text-lg font-bold mb-0">Descripcion:</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded mt-2 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="descripcion" wire:model="descripcion" placeholder="Poner la descripcion">
                                </div>
                            </div>

                            <div class="mt-4 sm:flex sm:items-start">
                                <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <label for="fecha_inicio"
                                        class="block text-gray-700 text-lg font-bold mb-0">Fecha de inicio:</label>
                                    <input type="date"
                                        class="shadow appearance-none border rounded mt-2 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="fecha_inicio" wire:model="fecha_inicio" placeholder="Poner la fecha de inicio">
                                </div>
                            </div>

                            <div class="mt-4 sm:flex sm:items-start">
                                <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <label for="fecha_fin"
                                        class="block text-gray-700 text-lg font-bold mb-0">Fecha de fin:</label>
                                    <input type="date"
                                        class="shadow appearance-none border rounded mt-2 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="fecha_fin" wire:model="fecha_fin" placeholder="Poner la fecha de fin">
                                </div>
                            </div>

                            <div class="mt-4 sm:flex sm:items-start">
                                <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <label for="numero_plazas_disponibles"
                                        class="block text-gray-700 text-lg font-bold mb-0">Numero de plazas disponibles:</label>
                                    <input type="number"
                                        class="shadow appearance-none border rounded mt-2 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="numero_plazas_disponibles" wire:model="numero_plazas_disponibles" placeholder="Poner el numero de plazas disponibles">
                                </div>
                            </div>

                            <div class="mt-4 sm:flex sm:items-start">
                                <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <label for="requisitos"
                                        class="block text-gray-700 text-lg font-bold mb-0">Requisitos:</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded mt-2 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="requisitos" wire:model="requisitos" placeholder="Poner los requisitos">
                                </div>
                            </div>

                            <div class="mt-4 sm:flex sm:items-start">
                                <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <label for="adjuntar_documento"
                                        class="block text-gray-700 text-lg font-bold mb-0">Adjuntar documento:</label>
                                    <input type="file"
                                        class="shadow appearance-none border rounded mt-2 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="adjuntar_documento" wire:model="adjuntar_documento" placeholder="">
                                </div>
                            </div>

                            <div class="mt-4 sm:flex sm:items-start">
                                <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <label for="empresa_id"
                                        class="block text-gray-700 text-lg font-bold mb-0">Id de la empresa:</label>
                                    <input type="text"
                                        class="shadow appearance-none border rounded mt-2 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="empresa_id" wire:model="empresa_id" placeholder="Poner el id de la empresa">
                                </div>
                            </div>



                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <!-- Subscribe button -->
                            <button wire:click.prevent="guardar()" type="button"
                                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                                Guardar </button>
                            <!-- Cancel button -->
                            <button wire:click="cerrarModal()" type="button"
                                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                Cancelar </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>
