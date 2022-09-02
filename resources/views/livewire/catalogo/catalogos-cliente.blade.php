<div>
    {{-- In work, do what you enjoy. --}}
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="styles/categories.css">
    <link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">
    <br>
    <div class="page-title-wrapper" aria-label="Catalogos">
        <div class="container">
            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb">


                <ul id="combibox">
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
                </ul>


                <ol class="breadcrumb">
                    @if ($CataSele==false && $CateSele==false && $SubCateSele==false)
                        <li class="mt-n1 mr-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></li>
                        <li class="breadcrumb-item">
                                <a href="#">Inicio</a>
                        </li>
                        <li class="breadcrumb-item">
                                <a href="">{{$nameSelected}}</a>
                        </li>
                    @endif
                    @if ($CataSele==true)
                        <li class="mt-n1 mr-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></li>
                        <li class="breadcrumb-item">
                                <a href="#">Inicio</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="">Catálogos</a>
                        </li>
                        <li class="breadcrumb-item">
                                <a href="">{{$nameSelected}}</a>
                        </li>
                    @endif
                    @if ($CateSele==true)
                        <li class="mt-n1 mr-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></li>
                        <li class="breadcrumb-item">
                                <a href="#">Inicio</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="">Catálogos</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="">Categoría</a>
                        </li>
                        <li class="breadcrumb-item">
                                <a href="">{{$nameSelected}}</a>
                        </li>
                    @endif
                    @if ($SubCateSele==true)
                        <li class="mt-n1 mr-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></li>
                        <li class="breadcrumb-item">
                                <a href="#">Inicio</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="">Catálogos</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="">Categoría</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="">SubCategoría</a>
                        </li>
                        <li class="breadcrumb-item">
                                <a href="">{{$nameSelected}}</a>
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
            @if($CataSele==false && $CateSele == false && $SubCateSele==false)
                @foreach ($catalogos as $key => $value)
                    <div class="col-md-4 col-sm-6">
                        <div class="card border-0 mb-grid-gutter">
                            <a class="d-block" href="">
                                <img class="img-fluid w-100" src="{{ asset( 'storage/'.$value->image ) }}" alt="{{ $value->name }}">
                            </a>
                            <div class="card-body border mt-n1 py-4 text-center">
                            <button type="button" class="btn btn-primary"
                                wire:click="catalogoSelected({{ $value->id }})"  >{{ $value->name }}</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            @if ($CataSele==true && $SubCateSele==false)
                {{-- <div>
                    <button type="button" class="btn btn-primary"
                        wire:click="volverCatalogos()"  >  Categorias</button> <br>
                </div> --}}
                <br>
                    @foreach ($categorias as $key => $value)
                        <div class="col-md-4 col-sm-6">
                            <div class="card border-0 mb-grid-gutter">
                                <a class="d-block" href="">
                                    <img class="img-fluid w-100"  alt="{{ $value->name }}">
                                </a>
                                <div class="card-body border mt-n1 py-4 text-center">
                                <button type="button" class="btn btn-primary"
                                    wire:click="categoriaSelected({{$value->id}})"  >{{ $value->name }}</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
            @endif
            @if ($CateSele == true && $SubCateSele==false)
                {{-- <div>
                    <button type="button" class="btn btn-primary"
                        wire:click="volverCatalogos()"  >  Categorias</button> <br>
                </div> --}}
                <br>
                @foreach ($cataCate as $key => $value)
                    <div class="col-md-4 col-sm-6">
                        <div class="card border-0 mb-grid-gutter">
                            <a class="d-block" href="">
                                <img class="img-fluid w-100"  alt="{{ $value->name }}">
                            </a>
                            <div class="card-body border mt-n1 py-4 text-center">
                            <button type="button" class="btn btn-primary"
                                wire:click="subCategoriaSelected({{$value->id}})"  >{{ $value->name }}</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

            @if ($SubCateSele== true)
                {{-- <div>
                    <button type="button" class="btn btn-primary"
                        wire:click="volverCatalogos()"  >  Categorias</button> <br>
                </div> --}}
                <br>
                @foreach ($productos as $key => $value)
                    <div class="col-md-4 col-sm-6">
                        <div class="card border-0 mb-grid-gutter">
                            <a class="d-block" href="">
                                <img class="img-fluid w-100"  alt="{{ $value->name }}">
                            </a>
                            <div class="card-body border mt-n1 py-4 text-center">
                            <button type="button" class="btn btn-primary"
                                wire:click="subCategoriaSelected({{$value->id}})"  >{{ $value->name }}</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>

    <!-- Pagination-->

    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center justify-content-sm-start mb-0">
            <li class="page-item" aria-disabled="true" aria-label="« Previous">
                <span class="page-link" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg></span>
            </li>

            <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 2</span></li>

            <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="sr-only">(current)</span></span></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="https://www.zonadigitalsv.com/product/family/enfriamiento-por-aire?page=2">2</a></li>


            <li class="page-item">
                <a class="page-link" href="https://www.zonadigitalsv.com/product/family/enfriamiento-por-aire?page=2" rel="next" aria-label="Next »">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg>
                </a>
            </li>
        </ul>
    </nav>
    <br>

</div>
<style>


#combibox {
  list-style: none inside;
  margin: 0;
  padding: 0;
  text-align: center;
}

#combibox li {
  display: block;
  position: relative;
  float: left;
  background: #426ecc;
  /* menu background color */
}

#combibox li a {
  display: block;
  padding: 0;
  text-decoration: none;
  width: 200px;
  /* this is the width of the menu items */
  line-height: 35px;
  /* this is the hieght of the menu items */
  color: #3d3d3d;
  /* list item font color */
}

#combibox li li a {
  font-size: 80%;
}


/* smaller font size for sub menu items */

#combibox li:hover {
  background: #b9b9b9;
}


/* highlights current hovered list item and the parent list items when hovering over sub menues */

#combibox ul {
  position: absolute;
  padding: 0;
  left: 0;
  display: none;
  /* hides sublists */
}

#combibox li:hover ul ul {
  display: none;
}


/* hides sub-sublists */

#combibox li:hover ul {
  display: block;
}


/* shows sublist on hover */

#combibox li li:hover ul {
  display: block;
  /* shows sub-sublist on hover */
  margin-left: 200px;
  /* this should be the same width as the parent list item */
  margin-top: -35px;
  /* aligns top of sub menu with top of list item */


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








</style>
