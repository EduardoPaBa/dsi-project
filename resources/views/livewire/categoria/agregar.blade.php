{{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
<div class="" style="float: center; margin: 1rem; ">
    {{-- Do your work, then step back. --}}
    <br><br>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



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

                                <div class="overflow-auto" id="please-scroll">
                                    @foreach ($catalogos as $key => $value)
                                        <div class="form-check ml-1">
                                            <input type="checkbox" class="form-check-input" id="" value="{{ $value->id }}"
                                                wire:model="arrayCatalogoID.{{ $value->id }}">
                                            <label class="form-check-label" for="exampleCheck1">{{ $value->name }}</label>
                                        </div>
                                    @endforeach
                                </div>



                                @error('arrayCatalogoID') <span class="mt-1 error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="exampleFormControlFile1">Seleccione una foto</label>
                        <input type="file" wire:model="image" class="form-control-file" id="{{$idFile}}">
                        @error('image') <span class="mt-1 error">{{ $message }}</span> @enderror
                    </div>
                    <button type="button" wire:loading.attr="disabled" wire:target="save, image" class="mt-3 btn btn-outline-primary" wire:click="save()">Guardar</button>


                        

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
    <br>

</div>
<style>
    .form-control {
        color: black;
    }
    .error{
        color: red;
    }
    #please-scroll{
        height: calc(50vh - 50px);
        overflow-y: scroll;
        margin-left: 30px;
    }
</style>
