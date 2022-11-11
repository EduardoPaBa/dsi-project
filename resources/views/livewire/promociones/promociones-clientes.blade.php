<div>
<br>
<br>
    <div class="container pb-5 mb-sm-1">
        <!-- Categories grid-->
        <div class="row">
                @foreach ($promociones as $prom)  
                    @foreach ($productos as $prod)
                        @if($prom->producto_id == $prod->id)   
                            <div class="col-md-4 col-sm-6">
                                <div class="card border-0 mb-grid-gutter">
                                    @foreach ($productoFoto as $item)
                                        @if ($item->producto_id == $prom->producto->id)
                                            <a class="d-block" >
                                                <img class="galeria__img" src="{{ asset( 'storage/'.$item->image ) }}">
                                            </a>
                                        @endif
                                        
                                    @endforeach
                                    <div class="product_content clearfix">
                                        <div class="product_info">
                                            <div class="product_name"><b>{{ $prom->producto->name }}</b></div>
                                            <div class="product_name"><b>Promocion: {{ $prom->name }}</b></div>
                                            <div class="product_name"><b>Duracion: {{ $prom->duracion_dias }} dias</b></div>
                                            <div class="product_name"><b>Descuento: {{ $prom->descuento }}%</b></div>
                                        </div>
                                        
                                        <div class="product_info">
                                            <div class="product_price">Precio: ${{ $prom->producto->precio }}</div>
                                            <div class="product_p">Nuevo Precio: $</div>
                                            
                                        </div>
                                        <div class="product_options">
                                            <div class="product_buy product_option"><img src="images/shopping-bag-white.svg" alt="" wire:click="add_cart({{$prod}})"></div>
                                                    
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        @endif
                    @endforeach  
                @endforeach
        </div>
    </div>
                    




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
    .product{
        font-size: 16px;
        font-weight: 600;
        color: #F08080;
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
        text-decoration:line-through;
        color: red;
    }
    .product_p{
        font-size: 24px;
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
    }
    .product_buy
    {
        display: inline-block;
        background: #937c6f;
        vertical-align: middle;
        margin-right: 0px;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
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
        width: 35px;
        height: 35px;
    }
    .product_buy:hover
    {
        background: #2f2f2f;
    }
    .product_fav
    {
        display: inline-block;
        vertical-align: middle;
        font-size: 14px;
        font-weight: 600;
        color: #232323;
        background: #e0e3e4;
        line-height: 37px;
        text-align: center;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }
    .product_fav:hover
    {
        color: #FFFFFF;
        background: #232323;
    }
    .nuevo{
        display: inline-block;
        vertical-align: middle;
        font-size: 14px;
        font-weight: 600;
        color: #232323;
        background: #e0e3e4;
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


</style>
