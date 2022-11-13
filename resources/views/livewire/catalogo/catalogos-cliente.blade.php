<div>
    {{-- In work, do what you enjoy. --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="styles/categories.css">
    <link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

    <br>
    <div class="page-title-wrapper" aria-label="Catalogos">
        <div class="container">
            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb">


                {{-- <ul id="combibox">
                    <li><a href="#">Services</a>
                        <ul>
                            <li><a href="#">Services-1</a></li>
                            <li><a href="#">Services-2</a></li>
                            <li><a href="#">SUB Services »</a>
                                <ul>
                                    <li><a href="#">Sub Services 1</a>
                                    <li><a href="#">Sub Services 2</a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul> --}}


                {{-- <div style="position:absolute; top:0; left:0;">
                    <div class="accordion accordion-padding-y:1rem;" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Catálogos
                            </button>
                          </h2>
                          @foreach ($catalogosAll as $item)
                          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                              This is the first item's accordion body.
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    {{$item->name}}
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                  <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                            SubCategoría
                                          </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                          <div class="accordion-body">
                                            <strong>This is the third item's accordion body.</strong>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                          @endforeach

                        </div>


                      </div>
                </div>


 --}}



                <ol class="breadcrumb">
                    @if ($CatalogoSele==false && $CategoriaSele==false && $SubCategoriaSele==false)
                        <li class="mt-n1 mr-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></li>
                        <li class="breadcrumb-item">
                                <a href="#">Inicio</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#" wire:click="volverCatalogos()">{{$nameSelected}}</a>
                        </li>
                    @endif
                    @if ($CatalogoSele==true)
                        <li class="mt-n1 mr-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></li>
                        <li class="breadcrumb-item">
                                <a href="#">Inicio</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#" wire:click="volverCatalogos()">Catálogos</a>
                        </li>
                        <li class="breadcrumb-item">
                                <a  href="#"  wire:click="volverCate()">{{$nameSelected}}</a>
                        </li>
                    @endif
                    @if ($CategoriaSele==true)
                        <li class="mt-n1 mr-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></li>
                        <li class="breadcrumb-item">
                                <a href="#">Inicio</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#" wire:click="volverCatalogos()">Catálogos</a>
                        </li>
                        <li class="breadcrumb-item">
                                <a  href="#"  wire:click="volverCate()">Categoría</a>
                        </li>
                        <li class="breadcrumb-item">
                                <a href="#" wire:click="volverSubCate()">{{$nameSelected}}</a>
                        </li>
                    @endif
                    @if ($SubCategoriaSele==true)
                        <li class="mt-n1 mr-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></li>
                        <li class="breadcrumb-item">
                                <a href="#">Inicio</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#" wire:click="volverCatalogos()">Catálogos</a>
                        </li>
                        <li class="breadcrumb-item">
                                <a  href="#"  wire:click="volverCate()">Categoría</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#"    wire:click="volverSubCate()">SubCategoría</a>
                        </li>
                        <li class="breadcrumb-item">
                                <a {{-- href="" --}}>{{$nameSelected}}</a>
                        </li>
                    @endif
                </ol>


            </nav>
            <!-- Breadcrumbs End -->
            <h1 class="page-title">{{$nameSelected}}</h1><span class="d-block mt-2 text-muted"></span>
            <hr class="mt-4">
        </div>
    </div>
    <div class="container pb-5 mb-sm-1">
        <!-- Categories grid-->
        <div class="row">
            <!-- Category-->
            @if($CatalogoSele==false && $CategoriaSele == false && $SubCategoriaSele==false)
                @foreach ($catalogos as $key => $value)
                    <div class="col-md-4 col-sm-6">
                        <div class="card border-0 mb-grid-gutter">
                            <a class="d-block" href="">
                                <img class="galeria__img" src="{{ asset( 'storage/'.$value->image ) }}" alt="{{ $value->name }}">
                            </a>
                            <div class="card-body border mt-n1 py-4 text-center">


                            <button type="button" class="btn btn-pill btn-outline-primary btn-sm"
                                wire:click="catalogoSelected({{ $value->id }})"  >{{ $value->name }}</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            @if ($CatalogoSele==true && $SubCategoriaSele==false)
                {{-- <div>
                    <button type="button" class="btn btn-primary"
                        wire:click="volverCatalogos()"  >  Categorias</button> <br>
                </div> --}}
                <br>
                    @foreach ($categorias as $key => $value)
                        <div class="col-md-4 col-sm-6">
                            <div class="card border-0 mb-grid-gutter">
                                <a class="d-block" href="">
                                    <img class="galeria__img" src="{{ asset( 'storage/'.$value->image ) }}"  alt="{{ $value->name }}">
                                </a>
                                <div class="card-body border mt-n1 py-4 text-center">
                                <button type="button" class="btn btn-pill btn-outline-primary btn-sm"
                                    wire:click="categoriaSelected({{$value->id}})"  >{{ $value->name }}</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
            @endif
            @if ($CategoriaSele == true && $SubCategoriaSele==false)
                {{-- <div>
                    <button type="button" class="btn btn-primary"
                        wire:click="volverCatalogos()"  >  Categorias</button> <br>
                </div> --}}
                <br>
                @foreach ($subcategorias as $key => $value)
                    <div class="col-md-4 col-sm-6">
                        <div class="card border-0 mb-grid-gutter">
                            <a class="d-block" href="">
                                <img class="galeria__img" src="{{ asset( 'storage/'.$value->image ) }}" alt="{{ $value->name }}">
                            </a>
                            <div class="card-body border mt-n1 py-4 text-center">
                            <button type="button" class="btn btn-pill btn-outline-primary btn-sm"
                                wire:click="subCategoriaSelected({{$value->id}})"  >{{ $value->name }}</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

            @if ($SubCategoriaSele== true)
                {{-- <div>
                    <button type="button" class="btn btn-primary"
                        wire:click="volverCatalogos()"  >  Categorias</button> <br>
                </div> --}}
                <br>
                @foreach ($productos as $key => $value)


                            <div class="col-md-4 col-sm-6">
                                <div class="card border-0 mb-grid-gutter">
                                        @foreach ($productoFoto as $item)
                                            @if ($item->producto_id == $value->id)
                                                <a class="d-block" href="">
                                                    <img class="galeria__img" src="{{ asset( 'storage/'.$item->image ) }}" alt="{{ $value->name }}">
                                                </a>
                                            @endif
                                        @endforeach

                                        <div class="product_content clearfix">
                                            <div class="product_info">
                                                <div class="product_pa">{{ $value->name }}</div>
                                                <div class="product_price">Precio: ${{ $value->precio }}</div>
                                                <div class="product_price">Talla: {{ $value->talla }}</div>
                                                <div class="product_buy product_option"><img src="images/cart.svg" alt="" wire:click="add_cart({{$value}})"  ></div>
                                                <div class="product_fav product_option"><img src="images/star.svg" alt="" data-toggle="modal"
                                                    data-target="#ratingModal" wire:click="show({{ $value->id }})"></div>
                                                <div class="product_op product_ops"><img src="images/plus-box-outline.svg" alt="" data-toggle="modal"
                                                data-target="#detalleModal" wire:click="detalle({{ $value->id }})"></div>
                                        
                                            </div>
                                           
                                        </div>
                                </div>


                            </div>


                @endforeach
            @endif

        </div>
    </div>
    {{-- @foreach ($productosAll as $key => $value)

        <div class="col-md-4 col-sm-6">
             <div class="card border-0 mb-grid-gutter">
                    <a class="d-block" href="">
                            <img class="galeria__img"  alt="{{ $value->name }}">
                    </a>



                    <div class="product_content clearfix">
                        <div class="product_info">
                            <div class="product_pa">{{ $value->name }}</div>
                            <div class="product_price">${{ $value->precio }}</div>
                        </div>
                        <div class="product_options">
                            <div class="product_buy product_option"><img src="images/cart-outline.svg" alt="" wire:click="add_cart({{$value}})"  ></div>
                            <div class="product_fav product_option">
                                <a class="nuevo" href="{{route('CatalogosCliente')}}"><button class="nuevo" type="button">+</a></button>
                            </div>
                        </div>
                    </div>
             </div>
        </div>


     @endforeach --}}
    <!-- Pagination-->


    <br>
    <div wire:ignore.self class="modal fade" id="ratingModal"  tabindex="-1" role="dialog"
        aria-labelledby="ratingModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ratingModalLabel">Calificación de Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="nombre_puntu" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre_puntu" wire:model="pname" disabled>
                        </div>
                        <div class="form-group">
                            <label for="descripcion_puntu" class="col-form-label">Descripcion:</label>
                            <input type="text" class="form-control" id="descripcion_puntu" wire:model="pdes" disabled>
                        </div>
                       
                    </form>
                    @if($hideForm != true)
                                <form wire:submit.prevent="rate()">
                                    <div class="block max-w-3xl px-1 py-2 mx-auto">
                                        <label for="descripcion" class="col-form-label">Puntuación</label>
                                        <div class="flex space-x-1 rating">
                                            <label for="star1">
                                                <input hidden wire:model="rating" type="radio" id="star1" name="rating" value="1" />
                                                <svg class="cursor-pointer block w-8 h-8 @if($rating >= 1 ) text-indigo-500 @else text-grey @endif " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                            </label>
                                            <label for="star2">
                                                <input hidden wire:model="rating" type="radio" id="star2" name="rating" value="2" />
                                                <svg class="cursor-pointer block w-8 h-8 @if($rating >= 2 ) text-indigo-500 @else text-grey @endif " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                            </label>
                                            <label for="star3">
                                                <input hidden wire:model="rating" type="radio" id="star3" name="rating" value="3" />
                                                <svg class="cursor-pointer block w-8 h-8 @if($rating >= 3 ) text-indigo-500 @else text-grey @endif " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                            </label>
                                            <label for="star4">
                                                <input hidden wire:model="rating" type="radio" id="star4" name="rating" value="4" />
                                                <svg class="cursor-pointer block w-8 h-8 @if($rating >= 4 ) text-indigo-500 @else text-grey @endif " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                            </label>
                                            <label for="star5">
                                                <input hidden wire:model="rating" type="radio" id="star5" name="rating" value="5" />
                                                <svg class="cursor-pointer block w-8 h-8 @if($rating >= 5 ) text-indigo-500 @else text-grey @endif " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                            </label>
                                        </div>
                                        <div class="my-2">
                                            @error('comment')
                                                <p class="mt-1 text-red-500">{{ $message }}</p>
                                            @enderror
                                            <label for="comentario" class="col-form-label">Deja tu comentario</label>
                                            <br>
                                            <br>
                                    
                                            <textarea wire:model.lazy="comment" name="description" class="block w-full px-4 py-3 border border-2 rounded-lg focus:border-blue-500 focus:outline-none" placeholder="Comentario.."></textarea>
                                          
                                        </div>
                                    </div>
                                    <div class="block">
                                        <button type="submit" class="w-full px-3 py-4 font-medium text-black  rounded-lg" style="color:black ; background-color:yellow ;" ><b>Calificar</b></button>
                                      
                                    </div>
                                </form>
                            @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="detalleModal"  tabindex="-1" role="dialog"
        aria-labelledby="optionModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="optionModalLabel">Detalle de Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="recipient-name" wire:model="pname" disabled>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Descripcion:</label>
                            <input type="text" class="form-control" id="recipient-name" wire:model="pdes" disabled>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Talla:</label>
                            <input type="text" class="form-control" id="recipient-name" wire:model="ptalla" disabled>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Color:</label>
                            <input type="text" class="form-control" id="recipient-name" wire:model="pcolor" disabled>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Precio:</label>
                            <input type="text" class="form-control" id="recipient-name" wire:model="pprecio" disabled>
                        </div>
                       
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    
                </div>
            </div>
        </div>
    </div>
    @if(Session::has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Felicidades!',
                text: '{{ Session::get("success") }}'
            })
        </script>
    @endif
    @if(Session::has('great'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Felicidades!',
                text: '{{ Session::get("great") }}'
            })
        </script>
    @endif

</div>
<style>
    .breadcrumb {
        background-color: transparent;
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        margin-bottom: 0.25rem;
        padding: 0;
    }

    .container {
        margin-left: auto;
        margin-right: auto;
        padding-left: 15px;
        padding-right: 15px;
        width: 100%;
    }

    .row {
    display: flex;
    flex-wrap: wrap;
    margin-left: -15px;
    margin-right: -15px;
    }
    .row{
        display:-ms-flexbox;
        display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px
    }


    div {
        display: block;

    }

    .page-title-wrapper {
    padding: 1.7857142857rem 0;
    }

    .card * {
    min-height: 0.01px;
    }

    .d-block {
    display: block!important;
    }

    .card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
    }

    body {
        background-color: #fff;
        color: #404040;
        font-family: Muli,sans-serif;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        margin: 0;
        text-align: left;
    }

    .pb-5, .py-5 {
    padding-bottom: 3rem!important;

    }

    .mb-sm-1, .my-sm-1 {
    margin-bottom: 0.25rem!important;
    }

    .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
    padding-left: 15px;
    padding-right: 15px;
    position: relative;
    width: 100%;
    }

    .mb-grid-gutter {
    margin-bottom: 30px!important;
    }

    .border-0 {
    border: 0!important;
    border-top-color: initial !important;
    border-top-style: initial !important;
    border-top-width: 0px !important;
    border-right-color: initial !important;
    border-right-style: initial !important;
    border-right-width: 0px !important;
    border-bottom-color: initial !important;
    border-bottom-style: initial !important;
    border-bottom-width: 0px !important;
    border-left-color: initial !important;
    border-left-style: initial !important;
    border-left-width: 0px !important;
    border-image-source: initial !important;
    border-image-slice: initial !important;
    border-image-width: initial !important;
    border-image-outset: initial !important;
    border-image-repeat: initial !important;
    }

    .galeria__img{

        width: 500px;
        height: 300px;
        object-fit: fill;

    }

    .img-fluid, .img-thumbnail {
        height: auto;
        max-width: 100%;
    }

    .w-100 {
        width: 100%!important;
    }

    nav {
        display: block;
    }

    .pagination {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    }

    .justify-content-center {
    justify-content: center!important;
    }

    .pagination {
    display: flex;
    list-style: none;
    padding-left: 0;
    }

    .page-item {
    margin: 0.15rem;
    }

    .page-link {
    font-weight: 600;
    position: relative;
    transition: color .25s ease-in-out,border-color .25s ease-in-out,background-color .25s ease-in-out;
    }

    .page-item.active {
    cursor: default;
    position: relative;
    z-index: 5;
    }

    figure, img {
        height: auto;
        vertical-align: middle;
    }

    img {
        border-style: none;
        border-top-style: none;
        border-right-style: none;
        border-bottom-style: none;
        border-left-style: none;
    }

    .btn-group-sm>.btn-pill.btn, .btn-group-sm>.form-control-pill.btn, .btn-pill.btn-sm, .btn-pill.form-control-sm, .form-control-pill.btn-sm, .form-control-pill.form-control-sm {

    }

    .btn-outline-primary {
        border-color: #5c77fc;
        color: #5c77fc;
    }

    .btn {
    background-color: transparent;
    border: 1px solid transparent;
    border-radius: 0;
    color: #404040;
    display: inline-block;
    font-size: 1rem;
    font-weight: 600;
    line-height: 1.5;
    padding: 0.5rem 1.125rem;
    text-align: center;
    transition: color .25s ease-in-out,background-color .25s ease-in-out,border-color .25s ease-in-out,box-shadow .2s ease-in-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    vertical-align: middle;
    }

    .clearfix::before, .clearfix::after
{
	content: "";
	display: table;
}
.clearfix::after
{
	clear: both;
}
.clearfix
{
	zoom: 1;
}

.product_content
{
	margin-top: 20px;
}

.product_info
{
	float: left;
}
.product_name a
{
	font-size: 16px;
	font-weight: 600;
	color: #232323;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.product_name a:hover
{
	color: #937c6f;
}
.product_price
{
	font-size: 24px;
	font-weight: 600;
	color: #8a8a8a;
	margin-top: 0px;
}
.product_pa{
        font-size: 20px;
        font-weight: 600;
        color: black;
        
    }

.product_options
{
	float: right;
	transform: translateY(11px);
}
.product_option
{   
    
	width: 60px;
	height: 60px;
	cursor: pointer;
    margin-top: 20px;
    
    margin-right: 50px;
    
}

.product_ops
{   
    
	width: 60px;
	height: 60px;
	cursor: pointer;
    margin-top: 20px;
    margin-left: 0px;
    
}
.product_buy
{
	display: inline-block;
	background: #937c6f;
	vertical-align: middle;
	
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
    margin-right: 85px;
}

.product_buy img
{
	position: absolute;
	top: 50%;
	left: 50%;
	-webkit-transform: translate(-50%, -50%);
	-moz-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	-o-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	width: 23px;
	height: 23px;
}
.product_buy:hover
{
	background: red;
}
.product_fav
{
	display: inline-block;
	vertical-align: middle;
	font-size: 14px;
	font-weight: 600;
	color: #232323;
	background: #937c6f;
	line-height: 37px;
	text-align: center;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
    
    
}

.product_fav img
{
	position: absolute;
	top: 50%;
	left: 50%;
	-webkit-transform: translate(-50%, -50%);
	-moz-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	-o-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	width: 23px;
	height: 23px;
    
    
}
.product_fav:hover
{
	color: yellow;
	background: yellow;
}

.product_op{

    display: inline-block;
	vertical-align: middle;
	font-size: 14px;
	font-weight: 600;
	color: #232323;
	background: #937c6f;
	line-height: 37px;
	text-align: center;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
    margin-left: 35px;
}

.product_op:hover
{
	color: yellowgreen;
	background: yellowgreen;
}

.product_op img
{
	position: absolute;
	top: 50%;
	left: 50%;
	-webkit-transform: translate(-50%, -50%);
	-moz-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	-o-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	width: 23px;
	height: 23px;
    
    
}


.nuevo{
	display: inline-block;
	vertical-align: middle;
	font-size: 14px;
	font-weight: 600;
	color: #232323;
	background: #937c6f;
	line-height: 37px;
	text-align: center;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}

.nuevo:hover{
	color: #FFFFFF;
	background: #232323;
}

.form-control {
        color: black;
    }





</style>
