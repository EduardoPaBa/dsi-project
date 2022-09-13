<div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
    
    <div class="modal fade" id="crearEditar" wire:ignore.self tabindex="-1" role="dialog"
    aria-labelledby="solicitudModalLabel" aria-hidden="true">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detalles del producto:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" wire:model="name">
                                @error('name') <span class="mt-1 error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" wire:model="description">
                                @error('description') <span class="mt-1 error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            {{-- <div class="form-group mb-3">
                                <label for="Sub-Categoria" class="block text-gray-700 text-sm font-bold mb-2">Sub-Categoria:</label>
                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="subcategoria_id" wire:model="subcategoria_id">
                                @error('subcategoria_id') <span class="mt-1 error">{{ $message }}</span> @enderror 
                            </div> --}}
                            {{-- <label for="subcategoria">Sub-Categoria:</label>
                            <br>
                            <select name="subcategoria" id="subcategorias_id" wire:model="subcategorias">
                                <label value="">Escoja la sub-categoria</label>
                                @foreach ($subcategorias as $subcategoria)
                                    <option value="{{ $subcategoria->id }}">{{ $subcategoria->name }}</option>
                                @endforeach
                            </select>
                            <br>
                            @error('name') <span class="mt-1 error">{{ $message }}</span> @enderror --}}
                            <div class="form-group mb-3">
                                <label for="subcategorias">Subcategoria:</label>
                                <select name="subcategorias" id="subcategorias" wire:model="subcategoria_id">
                                    <option value="" selected></option>
                                    @foreach ($subcategorias as $subcategoria)
                                        <option value="{{ $subcategoria->id }}">{{ $subcategoria->name }}</option>
                                    @endforeach
                                </select>
                                @error('subcategorias') <span class="text-danger"> {{ $message }} </span> @enderror
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label for="Talla" class="block text-gray-700 text-sm font-bold mb-2">Talla:</label>
                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="talla" wire:model="talla">
                                @error('talla') <span class="mt-1 error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label for="Precio" class="block text-gray-700 text-sm font-bold mb-2">Precio:</label>
                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="precio" wire:model="precio">
                                @error('precio') <span class="mt-1 error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label for="Disponibilidad" class="block text-gray-700 text-sm font-bold mb-2">Disponibilidad:</label>
                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="disponibilidad" wire:model="disponibilidad">
                                @error('disponibilidad') <span class="mt-1 error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label for="Color" class="block text-gray-700 text-sm font-bold mb-2">Color:</label>
                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="color" wire:model="color">
                                @error('colar') <span class="mt-1 error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">image:</label>
                                <input type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="image" wire:model="image">
                                @error('image') <span class="mt-1 error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <span>
                        <button wire:click.prevent="guardar()" type="button" class="btn btn-primary" data-dismiss="modal">Guardar</button>
                    </span>

                    <span>
                        <button wire:click="cerrarModal()" type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </span>
                </div>
            </div>
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
