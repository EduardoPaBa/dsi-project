<div class="" style="float: center; margin: 1rem; ">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <form>
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="mb-4">
                            <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" wire:model="name">
                            @error('name') <span class="mt-1 error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4">
                            <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" wire:model="description">
                            @error('description') <span class="mt-1 error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4">
                            <label for="Sub-Categoria" class="block text-gray-700 text-sm font-bold mb-2">Sub-Categoria:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="subcategoria_id" wire:model="subcategoria_id">
                            @error('subcategoria_id') <span class="mt-1 error">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-4">
                            <label for="Talla" class="block text-gray-700 text-sm font-bold mb-2">Talla:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="talla" wire:model="talla">
                            @error('talla') <span class="mt-1 error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4">
                            <label for="Precio" class="block text-gray-700 text-sm font-bold mb-2">Precio:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="precio" wire:model="precio">
                            @error('precio') <span class="mt-1 error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4">
                            <label for="Disponibilidad" class="block text-gray-700 text-sm font-bold mb-2">Disponibilidad:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="disponibilidad" wire:model="disponibilidad">
                            @error('disponibilidad') <span class="mt-1 error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4">
                            <label for="Color" class="block text-gray-700 text-sm font-bold mb-2">Color:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="color" wire:model="color">
                            @error('colar') <span class="mt-1 error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-4">
                            <label for="image" class="block text-gray-700 text-sm font-bold mb-2">image:</label>
                            <input type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="image" wire:model="image">
                            @error('image') <span class="mt-1 error">{{ $message }}</span> @enderror
                        </div>

                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click.prevent="guardar()" type="button" class="btn btn-secondary" data-dismiss="modal">Guardar</button>
                            </span>

                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click="cerrarModal()" type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            </span>
                        </div>

                    </div>
                </form>
            </div>


    </div>
    @if(Session::has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Great!',
                text: '{{ Session::get("success") }}'
            })
        </script>
    @endif
</div>
<style>
    .content-centrado {
       background-color: #fafafa;
       margin: 1rem;
       padding: 1rem;
       /* border: 2px solid #ccc; */
       /* IMPORTANTE */
       text-align: center;
   }

   .campo:last-child {
       justify-content: flex-end;
   }

   .form-control {
       color: black;
   }
   .error{
       color: red;
   }
</style>
