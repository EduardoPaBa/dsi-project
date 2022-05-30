<br>
<br>
<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <body>



        <div class="card">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                <br> <br>

                hellou <br>
                aqui muestro la informacion del cliente resgistrado <br>
                {{ $user }} <br> <br>

                aqui muestro el valor de una variable por medio del ORM de laravel <br>
                {{ $role_user_log }}


                <br>
                mirar el codigo de los archivos
                app/Http/Livewire/
                public/resources/views/livewire

            </div>
        </div>

        <!-- Products -->
        <div class="products">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <!-- Sidebar Left -->

                        <div class="sidebar_left clearfix">

                            <!-- Categories -->
                            <div class="sidebar_section">
                                <div class="sidebar_title">Categories</div>
                                <div class="sidebar_section_content">
                                    <ul>
                                        <li><a href="#">Wedding Dresses (23)</a></li>
                                        <li><a href="#">Swimsuits (11)</a></li>
                                        <li><a href="#">Jeans (61)</a></li>
                                        <li><a href="#">Tops (34)</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Color -->
                            <div class="sidebar_section">
                                <div class="sidebar_title">Color</div>
                                <div class="sidebar_section_content sidebar_color_content mCustomScrollbar"
                                    data-mcs-theme="minimal-dark">
                                    <ul>
                                        <li><a href="#"><span style="background:#a3ccff"></span>Blue (23)</a></li>
                                        <li><a href="#"><span style="background:#937c6f"></span>Brown (11)</a></li>
                                        <li><a href="#"><span style="background:#000000"></span>Black (61)</a></li>
                                        <li><a href="#"><span style="background:#ff5c00"></span>Orange (34)</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Size -->
                            <div class="sidebar_section">
                                <div class="sidebar_title">Size</div>
                                <div class="sidebar_section_content">
                                    <ul>
                                        <li><a href="#">Small S (23)</a></li>
                                        <li><a href="#">Medium M (11)</a></li>
                                        <li><a href="#">Large L (61)</a></li>
                                        <li><a href="#">Extra Large XL (34)</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Price -->
                            <div class="sidebar_section">
                                <div class="sidebar_title">Price</div>
                                <div class="sidebar_section_content">
                                    <div class="filter_price">
                                        <div id="slider-range" class="slider_range"></div>
                                        <p><input type="text" id="amount" class="amount" readonly
                                                style="border:0; font-weight:bold;"></p>
                                        <div class="clear_price_btn">Clear Price</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Best Sellers -->

                            <div class="sidebar_section">
                                <div class="sidebar_title">Best Sellers</div>
                                <div class="sidebar_section_content bestsellers_content">
                                    <ul>
                                        <!-- Best Seller Item -->
                                        <li class="clearfix">
                                            <div class="best_image"><img src="images/best_1.jpg" alt=""></div>
                                            <div class="best_content">
                                                <div class="best_title"><a href="product.html">Blue dress with
                                                        dots</a>
                                                </div>
                                                <div class="best_price">$45</div>
                                            </div>
                                            <div class="best_buy">+</div>
                                        </li>

                                        <!-- Best Seller Item -->
                                        <li class="clearfix">
                                            <div class="best_image"><img src="images/best_2.jpg" alt=""></div>
                                            <div class="best_content">
                                                <div class="best_title"><a href="product.html">White t-shirt</a>
                                                </div>
                                                <div class="best_price">$45</div>
                                            </div>
                                            <div class="best_buy">+</div>
                                        </li>

                                        <!-- Best Seller Item -->
                                        <li class="clearfix">
                                            <div class="best_image"><img src="images/best_3.jpg" alt=""></div>
                                            <div class="best_content">
                                                <div class="best_title"><a href="product.html">Blue dress with
                                                        dots</a>
                                                </div>
                                                <div class="best_price">$45</div>
                                            </div>
                                            <div class="best_buy">+</div>
                                        </li>

                                        <!-- Best Seller Item -->
                                        <li class="clearfix">
                                            <div class="best_image"><img src="images/best_4.jpg" alt=""></div>
                                            <div class="best_content">
                                                <div class="best_title"><a href="product.html">White t-shirt</a>
                                                </div>
                                                <div class="best_price">$45</div>
                                            </div>
                                            <div class="best_buy">+</div>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            <!-- Size -->
                            <div class="sidebar_section sidebar_options">
                                <div class="sidebar_section_content">

                                    <!-- Option Item -->
                                    <div
                                        class="sidebar_option d-flex flex-row align-items-center justify-content-start">
                                        <div class="option_image"><img src="images/option_1.png" alt=""></div>
                                        <div class="option_content">
                                            <div class="option_title">30 Days Returns</div>
                                            <div class="option_subtitle">No questions asked</div>
                                        </div>
                                    </div>

                                    <!-- Option Item -->
                                    <div
                                        class="sidebar_option d-flex flex-row align-items-center justify-content-start">
                                        <div class="option_image"><img src="images/option_2.png" alt=""></div>
                                        <div class="option_content">
                                            <div class="option_title">Free Delivery</div>
                                            <div class="option_subtitle">On all orders</div>
                                        </div>
                                    </div>

                                    <!-- Option Item -->
                                    <div
                                        class="sidebar_option d-flex flex-row align-items-center justify-content-start">
                                        <div class="option_image"><img src="images/option_3.png" alt=""></div>
                                        <div class="option_content">
                                            <div class="option_title">Secure Payments</div>
                                            <div class="option_subtitle">No need to worry</div>
                                        </div>
                                    </div>

                                    <!-- Option Item -->
                                    <div
                                        class="sidebar_option d-flex flex-row align-items-center justify-content-start">
                                        <div class="option_image"><img src="images/option_4.png" alt=""></div>
                                        <div class="option_content">
                                            <div class="option_title">24/7 Support</div>
                                            <div class="option_subtitle">Just call us</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="current_page">Woman's Fashion</div>
                    </div>
                    <div class="col-12">
                        <div class="product_sorting clearfix">
                            <div class="view">
                                <div class="view_box box_view"><i class="fa fa-th-large" aria-hidden="true"></i></div>
                                <div class="view_box detail_view"><i class="fa fa-bars" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="sorting">
                                <ul class="item_sorting">
                                    <li>
                                        <span class="sorting_text">Show all</span>
                                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                                        <ul>
                                            <li class="product_sorting_btn"
                                                data-isotope-option='{ "sortBy": "original-order" }'><span>Show
                                                    All</span>
                                            </li>
                                            <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'>
                                                <span>Price</span>
                                            </li>
                                            <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'>
                                                <span>Stars</span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="sorting_text">Show</span>
                                        <span class="num_sorting_text">12</span>
                                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                                        <ul>
                                            <li class="num_sorting_btn"><span>3</span></li>
                                            <li class="num_sorting_btn"><span>6</span></li>
                                            <li class="num_sorting_btn"><span>12</span></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row products_container">
                    <div class="col">

                        <!-- Products -->

                        <div class="product_grid">

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="images/product_1.jpg" alt=""></div>
                                <div class="rating rating_4" data-rating="4">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product_content clearfix">
                                    <div class="product_info">
                                        <div class="product_name"><a href="product.html">Woman's Long Dress</a></div>
                                        <div class="product_price">$45.00</div>
                                    </div>
                                    <div class="product_options">
                                        <div class="product_buy product_option"><img
                                                src="images/shopping-bag-white.svg" alt=""></div>
                                        <div class="product_fav product_option">+</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="images/product_2.jpg" alt=""></div>
                                <div class="rating rating_5" data-rating="5">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product_content clearfix">
                                    <div class="product_info">
                                        <div class="product_name"><a href="product.html">2 Piece Swimsuit</a></div>
                                        <div class="product_price">$35.00</div>
                                    </div>
                                    <div class="product_options">
                                        <div class="product_buy product_option"><img
                                                src="images/shopping-bag-white.svg" alt=""></div>
                                        <div class="product_fav product_option">+</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="images/product_3.jpg" alt=""></div>
                                <div class="rating rating_3" data-rating="3">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product_content clearfix">
                                    <div class="product_info">
                                        <div class="product_name"><a href="product.html">Man Blue Jacket</a></div>
                                        <div class="product_price">$145.00</div>
                                    </div>
                                    <div class="product_options">
                                        <div class="product_buy product_option"><img
                                                src="images/shopping-bag-white.svg" alt=""></div>
                                        <div class="product_fav product_option">+</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="images/product_4.jpg" alt=""></div>
                                <div class="rating rating_3" data-rating="3">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product_content clearfix">
                                    <div class="product_info">
                                        <div class="product_name"><a href="product.html">Man Blue Jacket</a></div>
                                        <div class="product_price">$145.00</div>
                                    </div>
                                    <div class="product_options">
                                        <div class="product_buy product_option"><img
                                                src="images/shopping-bag-white.svg" alt=""></div>
                                        <div class="product_fav product_option">+</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="images/product_5.jpg" alt=""></div>
                                <div class="rating rating_3" data-rating="3">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product_content clearfix">
                                    <div class="product_info">
                                        <div class="product_name"><a href="product.html">Man Blue Jacket</a></div>
                                        <div class="product_price">$145.00</div>
                                    </div>
                                    <div class="product_options">
                                        <div class="product_buy product_option"><img
                                                src="images/shopping-bag-white.svg" alt=""></div>
                                        <div class="product_fav product_option">+</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="images/product_6.jpg" alt=""></div>
                                <div class="rating rating_3" data-rating="3">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product_content clearfix">
                                    <div class="product_info">
                                        <div class="product_name"><a href="product.html">Man Blue Jacket</a></div>
                                        <div class="product_price">$145.00</div>
                                    </div>
                                    <div class="product_options">
                                        <div class="product_buy product_option"><img
                                                src="images/shopping-bag-white.svg" alt=""></div>
                                        <div class="product_fav product_option">+</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="images/product_7.jpg" alt=""></div>
                                <div class="rating rating_3" data-rating="3">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product_content clearfix">
                                    <div class="product_info">
                                        <div class="product_name"><a href="product.html">Man Blue Jacket</a></div>
                                        <div class="product_price">$145.00</div>
                                    </div>
                                    <div class="product_options">
                                        <div class="product_buy product_option"><img
                                                src="images/shopping-bag-white.svg" alt=""></div>
                                        <div class="product_fav product_option">+</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="images/product_8.jpg" alt=""></div>
                                <div class="rating rating_3" data-rating="3">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product_content clearfix">
                                    <div class="product_info">
                                        <div class="product_name"><a href="product.html">Man Blue Jacket</a></div>
                                        <div class="product_price">$145.00</div>
                                    </div>
                                    <div class="product_options">
                                        <div class="product_buy product_option"><img
                                                src="images/shopping-bag-white.svg" alt=""></div>
                                        <div class="product_fav product_option">+</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="images/product_9.jpg" alt=""></div>
                                <div class="rating rating_3" data-rating="3">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product_content clearfix">
                                    <div class="product_info">
                                        <div class="product_name"><a href="product.html">Man Blue Jacket</a></div>
                                        <div class="product_price">$145.00</div>
                                    </div>
                                    <div class="product_options">
                                        <div class="product_buy product_option"><img
                                                src="images/shopping-bag-white.svg" alt=""></div>
                                        <div class="product_fav product_option">+</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="images/product_10.jpg" alt=""></div>
                                <div class="rating rating_3" data-rating="3">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product_content clearfix">
                                    <div class="product_info">
                                        <div class="product_name"><a href="product.html">Man Blue Jacket</a></div>
                                        <div class="product_price">$145.00</div>
                                    </div>
                                    <div class="product_options">
                                        <div class="product_buy product_option"><img
                                                src="images/shopping-bag-white.svg" alt=""></div>
                                        <div class="product_fav product_option">+</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="images/product_11.jpg" alt=""></div>
                                <div class="rating rating_3" data-rating="3">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product_content clearfix">
                                    <div class="product_info">
                                        <div class="product_name"><a href="product.html">Man Blue Jacket</a></div>
                                        <div class="product_price">$145.00</div>
                                    </div>
                                    <div class="product_options">
                                        <div class="product_buy product_option"><img
                                                src="images/shopping-bag-white.svg" alt=""></div>
                                        <div class="product_fav product_option">+</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="images/product_12.jpg" alt=""></div>
                                <div class="rating rating_3" data-rating="3">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product_content clearfix">
                                    <div class="product_info">
                                        <div class="product_name"><a href="product.html">Man Blue Jacket</a></div>
                                        <div class="product_price">$145.00</div>
                                    </div>
                                    <div class="product_options">
                                        <div class="product_buy product_option"><img
                                                src="images/shopping-bag-white.svg" alt=""></div>
                                        <div class="product_fav product_option">+</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="row page_num_container">
                    <div class="col text-right">
                        <ul class="page_nums">
                            <li><a href="#">01</a></li>
                            <li class="active"><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                            <li><a href="#">04</a></li>
                            <li><a href="#">05</a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- Sidebar Right -->

            <div class="sidebar_right clearfix">

                <!-- Promo 1 -->
                <div
                    class="sidebar_promo_1 sidebar_promo d-flex flex-column align-items-center justify-content-center">
                    <div class="sidebar_promo_image" style="background-image: url(images/sidebar_promo_1.jpg)"></div>
                    <div class="sidebar_promo_content text-center">
                        <div class="sidebar_promo_title">30%<span>off</span></div>
                        <div class="sidebar_promo_subtitle">On all shoes</div>
                        <div class="sidebar_promo_button"><a href="checkout.html">check out</a></div>
                    </div>
                </div>

                <!-- Promo 2 -->
                <div class="sidebar_promo_2 sidebar_promo">
                    <div class="sidebar_promo_image" style="background-image: url(images/sidebar_promo_2.jpg)"></div>
                    <div class="sidebar_promo_content text-center">
                        <div class="sidebar_promo_title">30%<span>off</span></div>
                        <div class="sidebar_promo_subtitle">On all shoes</div>
                        <div class="sidebar_promo_button"><a href="checkout.html">check out</a></div>
                    </div>
                </div>
            </div>

        </div>


        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="styles/bootstrap4/popper.js"></script>
        <script src="styles/bootstrap4/bootstrap.min.js"></script>
        <script src="plugins/easing/easing.js"></script>
        <script src="plugins/parallax-js-master/parallax.min.js"></script>
        <script src="plugins/Isotope/isotope.pkgd.min.js"></script>
        <script src="plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.js"></script>
        <script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
        <script src="js/categories_custom.js"></script>
    </body>

</div>

<style>
    .card {
        width: 18rem;
        margin: 0 auto;
        /* Added */
        float: none;
        /* Added */
        margin-bottom: 10px;
        /* Added */
    }

</style>
