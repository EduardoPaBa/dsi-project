<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
   <br>

    <!-- Cart -->

        <div class="cart_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="cart_title">Mi carrito</div>
                        <br>
                        <div class="cart_title">Total: ${{\Cart::session(Auth::user()->id)->getTotal()}}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="cart_bar d-flex flex-row align-items-center justify-content-start">
                            <div class="cart_bar_title_name">Producto</div>

                            <div class="cart_bar_title_content ml-auto">
                                <div class="cart_bar_title_content_inner d-flex flex-row align-items-center justify-content-end">

                                    <div class="cart_bar_title_price">Precio</div>
                                    <div class="cart_bar_title_quantity">Cantidad</div>
                                    <div class="cart_bar_title_total">Total</div>
                                    <div class="cart_bar_title_total">Acciones</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="cart_products">
                            @foreach ($cart_items as $item)
                                <ul>
                                    <li class=" cart_product d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
                                        <!-- Product Image -->
                                        <div class="cart_product_image"><img src="images/cart_product_1.jpg" alt=""></div>
                                        <!-- Product Name -->
                                        <div class="cart_product_name">{{$item->name}}</div>
                                        <div class="cart_product_info ml-auto">
                                            <div class="cart_product_info_inner d-flex flex-row align-items-center justify-content-md-end justify-content-start">
                                                <!-- Product Price -->
                                                <div class="cart_product_price">${{$item->price}}</div>
                                                <!-- Product Quantity -->
                                                <input type="number" class="form-control col-2"
                                                wire:change="updateQuantity({{$item->id}}, {{$item->quantity}})"
                                                style="color: black" value="{{$item->quantity}}">

                                                <!-- Products Total Price -->
                                                <div class="cart_product_total">${{\Cart::session(Auth::user()->id)->get($item->id)->getPriceSum()}}</div>
                                                <!-- Product Cart Trash Button -->
                                                <div >
                                                    <button type="button" class="btn btn-danger" wire:click="deleteItem({{$item->id}})">Eliminar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="cart_control_bar d-flex flex-md-row flex-column align-items-start justify-content-start">
                            <button class="button_clear cart_button">Limpiar Carrito</button>
                            <a class="nuevo" href="{{ route('carritodeComprass') }}"  ><button class="button_update cart_button">Actualizar Carrito</a></button>
                            <a class="nuevo" href="{{ route('addSolicitud') }}" ><button class="button_update cart_button_2 ml-md-auto">Realizar Solicitud </a></button>
							<a class="nuevo" href="{{ route('CatalogosCliente') }}" ><button class="button_update cart_button_2 ml-md-auto"  >Continuar Comprando</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<style>

*
{
	margin: 0;
	padding: 0;
	-webkit-font-smoothing: antialiased;
	-webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
	text-shadow: rgba(0,0,0,.01) 0 0 1px;
}
body
{
	font-family: 'Open Sans', sans-serif;
	font-size: 14px;
	font-weight: 400;
	background: #FFFFFF;
	color: #2f2f2f;
}
div
{
	display: block;
	position: relative;
	-webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
ul
{
	list-style: none;
	margin-bottom: 0px;
}
p
{
	font-family: 'Open Sans', sans-serif;
	font-size: 14px;
	line-height: 2;
	font-weight: 400;
	color: #929191;
	-webkit-font-smoothing: antialiased;
	-webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
	text-shadow: rgba(0,0,0,.01) 0 0 1px;
}
p a
{
	display: inline;
	position: relative;
	color: inherit;
	border-bottom: solid 1px #ffa07f;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
a, a:hover, a:visited, a:active, a:link
{
	text-decoration: none;
	-webkit-font-smoothing: antialiased;
	-webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
	text-shadow: rgba(0,0,0,.01) 0 0 1px;





}
p a:active
{
	position: relative;
	color: #FF6347;
}
p a:hover
{
	color: #FFFFFF;
	background: #ffa07f;
}
p a:hover::after
{
	opacity: 0.2;
}
::selection
{

}
p::selection
{

}
h1{font-size: 48px;}
h2{font-size: 36px;}
h3{font-size: 24px;}
h4{font-size: 18px;}
h5{font-size: 14px;}
h1, h2, h3, h4, h5, h6
{
	font-family: 'Open Sans', sans-serif;
	-webkit-font-smoothing: antialiased;
	-webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
	text-shadow: rgba(0,0,0,.01) 0 0 1px;
}
h1::selection,
h2::selection,
h3::selection,
h4::selection,
h5::selection,
h6::selection
{

}
.form-control
{
	color: #db5246;
}
section
{
	display: block;
	position: relative;
	box-sizing: border-box;
}
.clear
{
	clear: both;
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
.float_left
{
	float: left;
}
.float_right
{
	float: right;
}
.trans_200
{
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.trans_300
{
	-webkit-transition: all 300ms ease;
	-moz-transition: all 300ms ease;
	-ms-transition: all 300ms ease;
	-o-transition: all 300ms ease;
	transition: all 300ms ease;
}
.trans_400
{
	-webkit-transition: all 400ms ease;
	-moz-transition: all 400ms ease;
	-ms-transition: all 400ms ease;
	-o-transition: all 400ms ease;
	transition: all 400ms ease;
}
.trans_500
{
	-webkit-transition: all 500ms ease;
	-moz-transition: all 500ms ease;
	-ms-transition: all 500ms ease;
	-o-transition: all 500ms ease;
	transition: all 500ms ease;
}
.fill_height
{
	height: 100%;
}
.super_container
{
	width: 100%;
	overflow: hidden;
}
.prlx_parent
{
	overflow: hidden;
}
.prlx
{
	height: 130% !important;
}
.parallax-window
{
    min-height: 400px;
    background: transparent;
}
.nopadding
{
	padding: 0px !important;
}
.section_title_container
{

}
.section_subtitle
{
	font-size: 14px;
	font-weight: 600;
	color: #937c6f;
	text-transform: uppercase;
	letter-spacing: 0.2em;
}
.section_title
{
	font-family: 'Lucida', serif;
	font-size: 60px;
	text-transform: uppercase;
	color: #2f2f2f;
	margin-top: -4px;
}
.button
{
	width: 142px;
	height: 46px;
	background: #937c6f;
	text-align: center;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.button a
{
	display: block;
	font-size: 12px;
	text-transform: uppercase;
	color: #FFFFFF;
	letter-spacing: 0.2em;
	line-height: 46px;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.button:hover
{
	background: #e0e3e4;
}
.button:hover a
{
	color: #232323;
}



/*********************************
6. Cart
*********************************/

.cart_container
{
	padding-top: 93px;
	padding-bottom: 111px;
	background: #FFFFFF;
}
.cart_title
{
	font-family: 'Lucida', serif;
	font-size: 30px;
	color: #232323;
	text-transform: uppercase;
	line-height: 0.75;
}
.cart_bar
{
	width: 100%;
	height: 57px;
	border: solid 1px #b5b5b5;
	margin-top: 64px;
}
.cart_bar_title_name,
.cart_bar_title_price,
.cart_bar_title_quantity,
.cart_bar_title_total
{
	font-size: 14px;
	font-weight: 600;
	color: #232323;
}
.cart_bar_title_name
{
	margin-left: 35px;
}
.cart_bar_title_content
{
	width: 532px;
}
.cart_bar_title_content_inner
{
	width: 100%;
}
.cart_bar_title_price
{
	width: 31%;
	text-align: center;
}
.cart_bar_title_quantity
{
	width: 37%;
	text-align: center;
}
.cart_bar_title_total
{
	width: 22%;
	text-align: center;
}
.cart_bar_title_button
{
	width: 10%;
	height: 100%;
}
.cart_product
{
	border-bottom: solid 1px #b5b5b5;
	padding-bottom: 35px;
	padding-top: 32px;
}
.cart_product_info
{
	width: 532px;
}
.cart_product_info_inner
{
	width: 100%;
}
.cart_product_name a,
.cart_product_price,
.cart_product_total
{
	font-size: 18px;
	font-weight: 600;
	color: #232323;
}
.cart_product_price
{
	width: 31%;
	text-align: center;
}
.product_quantity_container
{
	width: 37%;
	text-align: center;
}
.cart_product_total
{
	width: 22%;
	text-align: center;
}
.cart_product_button
{
	width: 10%;
	text-align: center;
}
.cart_product_name
{
	margin-left: 35px;
}
.cart_product_name a
{
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.cart_product_name a:hover
{
	color: #937c6f;
}
.product_quantity
{
	display: inline-block;
	width: 122px;
	height: 41px;
	border: solid 1px #b5b5b5;
	overflow: hidden;
	padding-left: 11px;
	vertical-align: middle;
}
.product_quantity input
{
	display: block;
	width: 30px;
	height: 41px;
	border: none;
	outline: none;
	font-size: 14px;
	font-weight: 400;
	color: #232323;
	text-align: left;
	padding-left: 9px;
	line-height: 39px;
	float: left;
}
.quantity_buttons
{
	position: absolute;
	top: 0;
	right: 7px;
	height: 100%;
	width: 29px;
}
.quantity_inc,
.quantity_dec
{
	display: -webkit-box;
	display: -moz-box;
	display: -ms-flexbox;
	display: -webkit-flex;
	display: flex;
	flex-direction: column;
	align-items: center;
	width: 100%;
	height: 50%;
	cursor: pointer;
}
.quantity_control i
{
	font-size: 16px;
	color: #232323;
	pointer-events: none;
}
.quantity_control:active
{
	border: solid 1px rgba(14, 140, 228, 0.2);
}
.quantity_inc
{
	padding-bottom: 0px;
	justify-content: flex-end;
}
.quantity_inc i
{
	-webkit-transform: translateY(3px);
	-moz-transform: translateY(3px);
	-ms-transform: translateY(3px);
	-o-transform: translateY(3px);
	transform: translateY(3px);
}
.quantity_dec
{
	padding-top: 0px;
	justify-content: flex-start;
}
.quantity_dec i
{
	-webkit-transform: translateY(-3px);
	-moz-transform: translateY(-3px);
	-ms-transform: translateY(-3px);
	-o-transform: translateY(-3px);
	transform: translateY(-3px);
}
.cart_product_remove
{
	width: 30px;
	height: 30px;
	background: transparent;
	border: none;
	outline: none;
	cursor: pointer;
}
.cart_product_remove img
{
	position: absolute;
	top: 50%;
	left: 50%;
	-webkit-transform: translate(-50%, -50%);
	-moz-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	-o-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
}
.cart_control_bar
{
	padding-top: 31px;
	padding-bottom: 33px;
	border-bottom: solid 1px #b5b5b5;
}
.cart_button
{
	height: 47px;
	border: solid 1px #b5b5b5;
	outline: none;
	background: #FFFFFF;
	padding-left: 34px;
	padding-right: 34px;
	text-transform: uppercase;
	letter-spacing: 0.2em;
	font-size: 12px;
	color: #232323;
	cursor: pointer;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.cart_button_2
{
	height: 47px;
	border: solid 1px #b5b5b5;
	outline: none;

	padding-left: 34px;
	padding-right: 34px;
	text-transform: uppercase;
	letter-spacing: 0.2em;
	font-size: 12px;
	color: #232323;
	cursor: pointer;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.cart_button_2:hover
{
	background: #5c77fc;
    color: #FFFFFF;
	border: solid 1px #5c77fc;

}

.nuevo{
	color: #232323;
}

.nuevo:hover{
	background: #5c77fc;
    color: #FFFFFF;
	border: solid 1px #5c77fc;
}
.cart_button:hover
{
	background: #5c77fc;
	color: #FFFFFF;
	border: solid 1px #5c77fc;
}
.button_clear
{
	margin-right: 8px;
}
.cart_extra
{
	padding-top: 54px;
}
.cart_coupon_form
{
	margin-top: 43px;
}
.cart_coupon_input
{
	width: 297px;
	height: 47px;
	border: solid 1px #b5b5b5;
	outline: none;
	padding-left: 23px;
	margin-right: 11px;
}
.cart_coupon_input::-webkit-input-placeholder
{
	font-size: 14px !important;
	font-weight: 400 !important;
	color: #232323 !important;
}
.cart_coupon_input:-moz-placeholder
{
	font-size: 14px !important;
	font-weight: 400 !important;
	color: #232323 !important;
}
.cart_coupon_input::-moz-placeholder
{
	font-size: 14px !important;
	font-weight: 400 !important;
	color: #232323 !important;
}
.cart_coupon_input:-ms-input-placeholder
{
	font-size: 14px !important;
	font-weight: 400 !important;
	color: #232323 !important;
}
.cart_coupon_input::input-placeholder
{
	font-size: 14px !important;
	font-weight: 400 !important;
	color: #232323 !important;
}
.cart_total
{
	width: 100%;
}
.cart_total ul
{
	width: 100%;
	margin-top: 43px;
	border: solid 1px #b5b5b5;
}
.cart_total ul li
{
	width: 100%;
	height: 56px;
	padding-left: 40px;
	padding-right: 32px;
	border-bottom: solid 1px #b5b5b5;
}
.cart_total ul li:last-child
{
	border-bottom: none;
}
.cart_total_button
{
	width: 100%;
	height: 47px;
	border: solid 1px #b5b5b5;
	outline: none;
	background: #937c6f;
	text-align: center;
	text-transform: uppercase;
	letter-spacing: 0.2em;
	margin-top: 13px;
	font-size: 12px;
	color: #FFFFFF;
	cursor: pointer;
	margin-top: 13px;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.cart_total_button:hover
{
	background: #FFFFFF;
	color: #232323;
}







</style>
