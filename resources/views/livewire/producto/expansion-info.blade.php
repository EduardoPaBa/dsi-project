<div class="container">
    <br>
	<div class="row product_row">
        <!-- Product Image -->
        <div class="col-lg-7">
            <div class="product_image">
                <div class="product_image_large"><img src="images/product_image_1.jpg" alt=""></div>
                <div class="product_image_thumbnails d-flex flex-row align-items-start justify-content-start">
                    <div class="product_image_thumbnail" style="background-image:url(images/product_image_1.jpg)" data-image="images/product_image_1.jpg"></div>
                    <div class="product_image_thumbnail" style="background-image:url(images/product_image_2.jpg)" data-image="images/product_image_2.jpg"></div>
                    <div class="product_image_thumbnail" style="background-image:url(images/product_image_4.jpg)" data-image="images/product_image_4.jpg"></div>
                </div>
            </div>
        </div>

        <!-- Product Content -->
        <div class="col-lg-5">
            <div class="product_content">
                <div class="product_name">2 Piece Swimsuit</div>
                <div class="product_price">$35.00</div>
                
                
                <div class="product_text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis quam ipsum. Pellentesque consequat tellus non tortor tempus, id egestas elit iaculis. Proin eu dui porta, pretium metus vitae, pharetra odio. Sed ac mi commodo, pellentesque erat eget, accumsan justo. Etiam sed placerat felis. Proin non rutrum ligula.</p>
                </div>
                <!-- Product Quantity -->
                <div class="product_quantity_container">
                    <span>Quantity</span>
                    <div class="product_quantity clearfix">
                        <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                        <div class="quantity_buttons">
                            <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-caret-up" aria-hidden="true"></i></div>
                            <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-caret-down" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
                <!-- Product Size -->
                    <div class="product_size_container">
                        <span>Size</span>
                        <div class="product_size">
                            <ul class="d-flex flex-row align-items-start justify-content-start">
                                <li>
                                    <input type="radio" id="radio_1" name="product_radio" class="regular_radio radio_1">
                                    <label for="radio_1">XS</label>
                                </li>
                                <li>
                                    <input type="radio" id="radio_2" name="product_radio" class="regular_radio radio_2" checked>
                                    <label for="radio_2">S</label>
                                </li>
                                <li>
                                    <input type="radio" id="radio_3" name="product_radio" class="regular_radio radio_3">
                                    <label for="radio_3">M</label>
                                </li>
                                <li>
                                    <input type="radio" id="radio_4" name="product_radio" class="regular_radio radio_4">
                                    <label for="radio_4">L</label>
                                </li>
                                <li>
                                    <input type="radio" id="radio_5" name="product_radio" class="regular_radio radio_5">
                                    <label for="radio_5">XL</label>
                                </li>
                            </ul>
                        </div>
                        <div class="button cart_button"><a href="#">add to cart</a></div>
                    </div>
            </div>
        </div>
	</div>
    
</div>
	
</div>
<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800');
@font-face
{
	font-family: 'Lucida';
	src: url('../fonts/lucida_bright_regular.ttf')  format('truetype');
}
@font-face
{
	font-family: 'Lucida';
	src: url('../fonts/lucida_bright_demi.ttf')  format('truetype');
	font-weight: 700;
}
@font-face
{
	font-family: 'Beyond';
	src: url('../fonts/beyond_the_mountains.otf')  format('opentype'),
		 url('../fonts/beyond_the_mountains.ttf')  format('truetype');
}

/*********************************
2. Body and some general stuff
*********************************/

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
6. Product
*********************************/

.product
{
	padding-top: 94px;
	padding-bottom: 98px;
	background: #FFFFFF;
}


/*********************************
6.2 Product Image
*********************************/

.product_row
{
	margin-top: 95px;
}
.product_image
{
	
}
.product_image_large
{
	width: 100%;
}
.product_image_large img
{
	max-width: 100%;
}
.product_image_thumbnails
{
	margin-top: 28px;
}
.product_image_thumbnail
{
	width: 166px;
	height: 166px;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
	margin-right: 30px;
	cursor: pointer;
}
.product_image_thumbnail:last-child
{
	margin-right: 0;
}

/*********************************
6.3 Product Content
*********************************/

.product_name
{
	font-size: 30px;
	font-weight: 600;
	color: #232323;
	line-height: 0.75;
}
.product_price
{
	font-size: 24px;
	font-weight: 600;
	margin-top: 9px;
	color: #8a8a8a;
}
.rating
{
	margin-top: 9px;
}
.rating i
{
	font-size: 18px;
	margin-right: 3px;
	color: #e0e3e4;
}
.rating i:last-child
{
	margin-right: 0px;
}
.rating_1 i:first-child{color: #f5c06f;}
.rating_2 i:first-child{color: #f5c06f;}
.rating_2 i:nth-child(2){color: #f5c06f;}
.rating_3 i:first-child{color: #f5c06f;}
.rating_3 i:nth-child(2){color: #f5c06f;}
.rating_3 i:nth-child(3){color: #f5c06f;}
.rating_4 i:first-child{color: #f5c06f;}
.rating_4 i:nth-child(2){color: #f5c06f;}
.rating_4 i:nth-child(3){color: #f5c06f;}
.rating_4 i:nth-child(4){color: #f5c06f;}
.rating_5 i:first-child{color: #f5c06f;}
.rating_5 i:nth-child(2){color: #f5c06f;}
.rating_5 i:nth-child(3){color: #f5c06f;}
.rating_5 i:nth-child(4){color: #f5c06f;}
.rating_5 i:nth-child(5){color: #f5c06f;}
.in_stock_container
{
	margin-top: 27px;
}
.in_stock
{
	display: inline-block;
	position: relative;
	background: #e0e3e4;
	width: 15px;
	height: 15px;
}
.in_stock.in_stock_true::after
{
	display: block;
	position: absolute;
	top: 50%;
	left: 50%;
	-webkit-transform: translate(-50%, -50%);
	-moz-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	-o-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	content: url(../images/checked.png);
}
.in_stock_container span
{
	font-size: 14px;
	color: #232323;
	margin-left: 7px;
}
.product_text
{
	margin-top: 56px;
}
.product_text p:last-of-type
{
	margin-bottom: 0;
}
.product_quantity_container
{
	margin-top: 43px;
}
.product_quantity_container span
{
	display: inline-block;
	font-size: 14px;
	font-weight: 600;
	color: #232323;
	vertical-align: middle;
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
	margin-left: 14px;
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
.product_size_container
{
	margin-top: 54px;
}
.product_size
{
	display: inline-block;
	vertical-align: middle;
}
.product_size_container span
{
	display: inline-block;
	vertical-align: middle;
	margin-right: 15px;
	font-size: 14px;
	font-weight: 600;
	color: #232323;
}
.regular_radio
{
	display: none;
}
.regular_radio:checked + label
{
	background: #937c6f;
	color: #FFFFFF;
}
.regular_radio + label
{
	display: -webkit-box;
	display: -moz-box;
	display: -ms-flexbox;
	display: -webkit-flex;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	-webkit-appearance: none;
	-moz-appearance: none;
	-ms-appearance: none;
	-o-appearance: none;
	appearance: none;
	width: 48px;
	height: 41px;
	background: #FFFFFF;
	border: solid 1px #b5b5b5;
	cursor: pointer;
	margin-right: 8px;
}
.cart_button
{
	margin-top: 55px;
}




</style>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/product_custom.js"></script>
