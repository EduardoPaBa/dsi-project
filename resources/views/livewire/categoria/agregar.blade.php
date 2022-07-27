{{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
<div class="" style="float: center; margin: 1rem; ">
    {{-- Do your work, then step back. --}}
    <br><br>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">


    {{-- <h1>hellou</h1> --}}
    <div class="row">
        <div class="col">
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    GESTIONAR CATEGORÍA
                </div>

                <div class="card-body">
                    <a href="{{ route('listCategor') }}"> <button type="button" class="btn btn-outline-secondary"
                        style="float: right;">Volver</button> </a> <br>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Nombre del Categoría</label>
                                    <input type="text" class="form-control" id="" placeholder="Nombre Categoría"
                                    wire:model="name">
                                    @error('name') <span class="mt-1 error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col">
                                @foreach ($catalogos as $key => $value)
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="" value="{{ $value->id }}"
                                            wire:model="arrayCatalogoID.{{ $value->id }}">
                                        <label class="form-check-label" for="exampleCheck1">{{ $value->name }}</label>
                                    </div>
                                @endforeach
                                @error('arrayCatalogoID') <span class="mt-1 error">{{ $message }}</span> @enderror
                            </div>
                        </div>


                        <button type="button" wire:loading.attr="disabled" wire:target="save" class="mt-3 btn btn-outline-primary" wire:click="save()">Guardar</button>

                </div>
            </div>
        </div>
        <div class="col">
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
    .form-control {
        color: black;
    }
    .error{
        color: red;
    }
</style>
