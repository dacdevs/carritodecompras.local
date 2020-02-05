@extends('front.layout')

@section('content')
<section class="slider_section slider_s_three mb-60 mt-20">
    <div class="slider_area slider3_carousel owl-carousel">
        <div class="single_slider d-flex align-items-center" data-bgimg="{{ asset("front/assets/img/slider/slider9.jpg") }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="slider_content slider_c_three color_white">
                            <h3>new collection</h3>
                            <h1>new Arrivals <br> cellphone new model 2019</h1>
                                <p>discount <span> -30% off</span> this week</p>
                                <a class="button" href="shop.html">DISCOVER NOW</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="single_slider d-flex align-items-center" data-bgimg="{{ asset("front/assets/img/slider/slider10.jpg") }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 mx-auto">
                        <div class="slider_content slider_c_three color_white">
                            <h3>new collection</h3>
                            <h1>happy summer <br> vagetable organic food 2019</h1>
                                <p>discount <span> -30% off</span> this week</p>
                                <a class="button" href="shop.html">DISCOVER NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider d-flex align-items-center" data-bgimg="{{ asset("front/assets/img/slider/slider11.jpg") }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 mx-auto">
                        <div class="slider_content slider_c_three color_white">
                            <h3>new collection</h3>
                            <h1>new collection <br> sport clothes for men,s</h1>
                                <p>discount <span> -30% off</span> this week</p>
                                <a class="button" href="shop.html">DISCOVER NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--slider area end-->


<!--shipping area start-->
<div class="shipping_area mb-60">
    <div class="container">
        <div class="shipping_inner">
            <div class="single_shipping">
                <div class="shipping_icone">
                    <img src="{{ asset("front/assets/img/about/shipping1.png") }}" alt="">
                </div>
                <div class="shipping_content">
                    <h4>Free Delivery</h4>
                    <p>For all oders over $120</p>
                </div>
            </div>
            <div class="single_shipping">
                <div class="shipping_icone">
                    <img src="{{ asset("front/assets/img/about/shipping2.png") }}" alt="">
                </div>
                <div class="shipping_content">
                    <h4>Free Delivery</h4>
                    <p>For all oders over $120</p>
                </div>
            </div>
            <div class="single_shipping">
                <div class="shipping_icone">
                    <img src="{{ asset("front/assets/img/about/shipping3.png") }}" alt="">
                </div>
                <div class="shipping_content">
                    <h4>Free Delivery</h4>
                    <p>For all oders over $120</p>
                </div>
            </div>
            <div class="single_shipping">
                <div class="shipping_icone">
                    <img src="{{ asset("front/assets/img/about/shipping4.png") }}" alt="">
                </div>
                <div class="shipping_content">
                    <h4>Free Delivery</h4>
                    <p>For all oders over $120</p>
                </div>
            </div>
            <div class="single_shipping">
                <div class="shipping_icone">
                    <img src="{{ asset("front/assets/img/about/shipping5.png") }}" alt="">
                </div>
                <div class="shipping_content">
                    <h4>Free Delivery</h4>
                    <p>For all oders over $120</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--shipping area end-->

<!--home section bg area start-->
<div class="home_section_bg">
    <div class="container">
        <div class="row">

            <div class="col-xl-9 col-lg-8 col-12 order-lg-2">

                <!--product area start-->
                <div class="product_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="product_header row">
                                <div class="section_title col-xl-auto col-12">
                                    <h2>Productos descatados</h2>
                                </div>
                                <div class="product_tab_btn col-xl-auto col-12 mt-md-3 mt-xl-0">
                                    <ul class="nav" role="tablist">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#Computer" role="tab" aria-controls="Computer" aria-selected="true">
                                                Computer
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#Networking" role="tab" aria-controls="Networking" aria-selected="false">
                                                Networking
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#Computer2" role="tab" aria-controls="Computer2" aria-selected="false">
                                                Computer & Networking
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#Audio" role="tab" aria-controls="Audio" aria-selected="false">
                                                Television & Audio
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="Computer" role="tabpanel">
                            <div class="product_carousel product_style product_column4 owl-carousel">

                                    @foreach ($productos as $producto)


                                        @if($loop->index == 0)
                                            <div class="product_items">
                                        @else
                                            @if($loop->index  % 2 == 0)
                                                <div class="product_items">
                                            @endif
                                        @endif

                                            @include("front.partials.productos.item_grid",["productos"=>$productos])

                                        @if(($loop->index + 1) % 2 == 0)
                                            </div>
                                        @endif

                                        @if($loop->iteration == count($productos))
                                            @if(($loop->index + 1) % 2 != 0)
                                                </div>
                                            @endif
                                        @endif
                                    @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Networking" role="tabpanel">
                            <div class="product_carousel product_style product_column4 owl-carousel">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product9.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product10.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$72.00</span>
                                                        <span class="current_price">$70.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>

                                            </div>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product11.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product12.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$65.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>

                                            </div>
                                        </figure>
                                    </article>
                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product13.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product14.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Nostrum exercitationem itae neque nulla nec posuere sem</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$70.00</span>
                                                        <span class="current_price">$68.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>

                                            </div>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product15.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product16.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Porro quisquam eget feugiat pretium posuere maximus</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$65.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>

                                            </div>
                                        </figure>
                                    </article>
                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product17.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product18.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Cras neque honcus consectetur magna imperdiet</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$65.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>

                                            </div>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product19.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product20.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Donec eu libero ac dapibus urna consectetur rhoncus</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$65.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>

                                            </div>
                                        </figure>
                                    </article>
                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product1.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product2.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$86.00</span>
                                                        <span class="current_price">$79.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>
                                            </div>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product3.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product4.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$82.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>
                                            </div>
                                        </figure>
                                    </article>
                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product5.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product6.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$80.00</span>
                                                        <span class="current_price">$70.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>

                                            </div>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product7.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product8.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$76.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>
                                            </div>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Computer2" role="tabpanel">
                            <div class="product_carousel product_style product_column4 owl-carousel">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product17.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product18.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Cras neque honcus consectetur magna imperdiet</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$65.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>

                                            </div>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product19.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product20.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Donec eu libero ac dapibus urna consectetur rhoncus</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$65.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>

                                            </div>
                                        </figure>
                                    </article>
                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product1.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product2.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$86.00</span>
                                                        <span class="current_price">$79.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>
                                            </div>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product3.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product4.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$82.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>
                                            </div>
                                        </figure>
                                    </article>
                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product9.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product10.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$72.00</span>
                                                        <span class="current_price">$70.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>

                                            </div>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product11.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product12.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$65.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>

                                            </div>
                                        </figure>
                                    </article>
                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product5.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product6.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$80.00</span>
                                                        <span class="current_price">$70.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>

                                            </div>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product7.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product8.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$76.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>
                                            </div>
                                        </figure>
                                    </article>
                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product13.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product14.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Nostrum exercitationem itae neque nulla nec posuere sem</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$70.00</span>
                                                        <span class="current_price">$68.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>

                                            </div>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product15.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product16.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Porro quisquam eget feugiat pretium posuere maximus</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$65.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>

                                            </div>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Audio" role="tabpanel">
                            <div class="product_carousel product_style product_column4 owl-carousel">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product9.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product10.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$72.00</span>
                                                        <span class="current_price">$70.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>

                                            </div>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product11.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product12.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$65.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>

                                            </div>
                                        </figure>
                                    </article>
                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product13.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product14.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Nostrum exercitationem itae neque nulla nec posuere sem</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$70.00</span>
                                                        <span class="current_price">$68.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>

                                            </div>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product15.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product16.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Porro quisquam eget feugiat pretium posuere maximus</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$65.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>

                                            </div>
                                        </figure>
                                    </article>
                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product17.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product18.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Cras neque honcus consectetur magna imperdiet</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$65.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>

                                            </div>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product19.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product20.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Donec eu libero ac dapibus urna consectetur rhoncus</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$65.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>

                                            </div>
                                        </figure>
                                    </article>
                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product1.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product2.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$86.00</span>
                                                        <span class="current_price">$79.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>
                                            </div>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product3.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product4.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$82.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>
                                            </div>
                                        </figure>
                                    </article>
                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product5.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product6.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$80.00</span>
                                                        <span class="current_price">$70.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>

                                            </div>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product7.jpg") }}" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product8.jpg") }}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale</span>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_content_inner">
                                                    <h4 class="product_name"><a href="product-details.html">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">$76.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                </div>
                                                <div class="add_to_cart">
                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                </div>
                                            </div>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--product area end-->

                <!--banner area start-->
                <div class="banner_area mb-55">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <figure class="single_banner">
                                <div class="banner_thumb">
                                    <a href="shop.html"><img src="{{ asset("front/assets/img/bg/banner4.jpg") }}" alt=""></a>
                                </div>
                            </figure>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <figure class="single_banner">
                                <div class="banner_thumb">
                                    <a href="shop.html"><img src="{{ asset("front/assets/img/bg/banner5.jpg") }}" alt=""></a>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
                <!--banner area end-->

                <!--product area start-->
                <div class="small_product_area mb-55">
                    <div class="row">
                        <div class="col-12">
                            <div class="product_header row">
                                <div class="section_title col-xl-auto col-12">
                                    <h2>Best Selling Products</h2>

                                </div>
                                <div class="product_tab_btn col-xl-auto col-12 mt-md-3 mt-xl-0">
                                    <ul class="nav" role="tablist">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#Fashion2" role="tab" aria-controls="Fashion2" aria-selected="true">
                                                Fashion & Clothing
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#Games2" role="tab" aria-controls="Games2" aria-selected="false">
                                                Games & Consoles
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#Headphone2" role="tab" aria-controls="Headphone2" aria-selected="false">
                                                Headphone & Speaker
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#Mobile2" role="tab" aria-controls="Mobile2" aria-selected="false">
                                                Mobile & Tablets
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="Fashion2" role="tabpanel">
                            <div class="product_carousel small_p_container  small_product_column2 owl-carousel">
                                <div class="product_items">
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product1.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product2.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product3.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product4.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Nemo enim nec elementum dolor bibendum vulputate libero</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$80.00</span>
                                                <span class="current_price">$70.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                </div>
                                <div class="product_items">
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product5.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product6.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$76.00</span>
                                                <span class="current_price">$72.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product7.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product8.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Habitasse dictumst elementum elit blandit sit amet</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$65.00</span>
                                                <span class="current_price">$60.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                </div>
                                <div class="product_items">
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product9.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product10.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Porro quisquam eget feugiat pretium posuere maximus</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$82.00</span>
                                                <span class="current_price">$78.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product11.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product12.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Aliquam lobortis pellentesque eugiat pretium nisi lectus</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$72.00</span>
                                                <span class="current_price">$68.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                </div>
                                <div class="product_items">
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product13.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product14.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product17.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product18.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Itaque earum velit elementum mollis volutpat metus</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$75.00</span>
                                                <span class="current_price">$70.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Games2" role="tabpanel">
                            <div class="product_carousel small_p_container  small_product_column2 owl-carousel">
                                <div class="product_items">
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product9.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product10.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Porro quisquam eget feugiat pretium posuere maximus</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$82.00</span>
                                                <span class="current_price">$78.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product11.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product12.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Aliquam lobortis pellentesque eugiat pretium nisi lectus</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$72.00</span>
                                                <span class="current_price">$68.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                </div>
                                <div class="product_items">
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product13.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product14.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product17.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product18.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Itaque earum velit elementum mollis volutpat metus</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$75.00</span>
                                                <span class="current_price">$70.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                </div>
                                <div class="product_items">
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product1.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product2.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product3.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product4.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Nemo enim nec elementum dolor bibendum vulputate libero</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$80.00</span>
                                                <span class="current_price">$70.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                </div>
                                <div class="product_items">
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product5.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product6.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$76.00</span>
                                                <span class="current_price">$72.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product7.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product8.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Habitasse dictumst elementum elit blandit sit amet</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$65.00</span>
                                                <span class="current_price">$60.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Headphone2" role="tabpanel">
                            <div class="product_carousel small_p_container  small_product_column2 owl-carousel">
                                <div class="product_items">
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product5.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product6.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$76.00</span>
                                                <span class="current_price">$72.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product7.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product8.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Habitasse dictumst elementum elit blandit sit amet</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$65.00</span>
                                                <span class="current_price">$60.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                </div>
                                <div class="product_items">
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product9.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product10.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Porro quisquam eget feugiat pretium posuere maximus</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$82.00</span>
                                                <span class="current_price">$78.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product11.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product12.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Aliquam lobortis pellentesque eugiat pretium nisi lectus</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$72.00</span>
                                                <span class="current_price">$68.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                </div>
                                <div class="product_items">
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product1.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product2.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product3.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product4.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Nemo enim nec elementum dolor bibendum vulputate libero</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$80.00</span>
                                                <span class="current_price">$70.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                </div>
                                <div class="product_items">
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product13.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product14.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product17.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product18.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Itaque earum velit elementum mollis volutpat metus</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$75.00</span>
                                                <span class="current_price">$70.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Mobile2" role="tabpanel">
                            <div class="product_carousel small_p_container  small_product_column2 owl-carousel">
                                <div class="product_items">
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product13.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product14.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product17.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product18.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Itaque earum velit elementum mollis volutpat metus</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$75.00</span>
                                                <span class="current_price">$70.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                </div>
                                <div class="product_items">
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product1.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product2.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product3.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product4.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Nemo enim nec elementum dolor bibendum vulputate libero</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$80.00</span>
                                                <span class="current_price">$70.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                </div>

                                <div class="product_items">
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product9.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product10.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Porro quisquam eget feugiat pretium posuere maximus</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$82.00</span>
                                                <span class="current_price">$78.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product11.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product12.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Aliquam lobortis pellentesque eugiat pretium nisi lectus</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$72.00</span>
                                                <span class="current_price">$68.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                </div>
                                <div class="product_items">
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product5.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product6.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$76.00</span>
                                                <span class="current_price">$72.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                    <figure class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product7.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product8.jpg") }}" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Habitasse dictumst elementum elit blandit sit amet</a></h4>
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$65.00</span>
                                                <span class="current_price">$60.00</span>
                                            </div>
                                            <div class="product_cart_button">
                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                    </figure>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <!--product area end-->

                <!--banner area start-->
                <div class="banner_area banner_style2 mb-55">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <figure class="single_banner">
                                <div class="banner_thumb">
                                    <a href="shop.html"><img src="{{ asset("front/assets/img/bg/banner6.jpg") }}" alt=""></a>
                                </div>
                            </figure>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <figure class="single_banner">
                                <div class="banner_thumb">
                                    <a href="shop.html"><img src="{{ asset("front/assets/img/bg/banner7.jpg") }}" alt=""></a>
                                </div>
                            </figure>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <figure class="single_banner">
                                <div class="banner_thumb">
                                    <a href="shop.html"><img src="{{ asset("front/assets/img/bg/banner8.jpg") }}" alt=""></a>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
                <!--banner area end-->

                <!--product area start-->
                <div class="product_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="product_header row">
                                <div class="section_title col-xl-auto col-12">
                                    <h2>New Arrivals</h2>

                                </div>
                                <div class="product_tab_btn col-xl-auto col-12 mt-md-3 mt-xl-0">
                                    <ul class="nav" role="tablist">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#Computer3" role="tab" aria-controls="Computer3" aria-selected="true">
                                                Computer
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#Networking2" role="tab" aria-controls="Networking2" aria-selected="false">
                                                Networking
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#Networking3" role="tab" aria-controls="Networking3" aria-selected="false">
                                                Computer & Networking
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#Audio2" role="tab" aria-controls="Audio2" aria-selected="false">
                                                Television & Audio
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="Computer3" role="tabpanel">
                            <div class="product_carousel product_style product_column4 owl-carousel">
                                <article class="single_product">
                                    <figure>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product5.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product6.jpg") }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product-details.html">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$80.00</span>
                                                    <span class="current_price">$70.00</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product7.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product8.jpg") }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product-details.html">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$76.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product1.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product2.jpg") }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$86.00</span>
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product3.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product4.jpg") }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product-details.html">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$82.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product9.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product10.jpg") }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$72.00</span>
                                                    <span class="current_price">$70.00</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product11.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product12.jpg") }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$65.00</span>
                                                    <span class="current_price">$60.00</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Networking2" role="tabpanel">
                            <div class="product_carousel product_style product_column4 owl-carousel">
                                <article class="single_product">
                                    <figure>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product5.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product6.jpg") }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product-details.html">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$80.00</span>
                                                    <span class="current_price">$70.00</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product7.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product8.jpg") }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product-details.html">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$76.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product9.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product10.jpg") }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$72.00</span>
                                                    <span class="current_price">$70.00</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product11.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product12.jpg") }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$65.00</span>
                                                    <span class="current_price">$60.00</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product1.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product2.jpg") }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$86.00</span>
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product3.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product4.jpg") }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product-details.html">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$82.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Networking3" role="tabpanel">
                            <div class="product_carousel product_style product_column4 owl-carousel">
                                <article class="single_product">
                                    <figure>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product7.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product8.jpg") }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product-details.html">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$76.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product1.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product2.jpg") }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$86.00</span>
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product3.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product4.jpg") }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product-details.html">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$82.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product5.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product6.jpg") }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product-details.html">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$80.00</span>
                                                    <span class="current_price">$70.00</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product9.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product10.jpg") }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$72.00</span>
                                                    <span class="current_price">$70.00</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product11.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product12.jpg") }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$65.00</span>
                                                    <span class="current_price">$60.00</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Audio2" role="tabpanel">
                            <div class="product_carousel product_style product_column4 owl-carousel">
                                <article class="single_product">
                                    <figure>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product9.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product10.jpg") }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$72.00</span>
                                                    <span class="current_price">$70.00</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product1.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product2.jpg") }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$86.00</span>
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product5.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product6.jpg") }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product-details.html">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$80.00</span>
                                                    <span class="current_price">$70.00</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product7.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product8.jpg") }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product-details.html">Nullam maximus eget nisi dignissim sodales eget tempor</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$76.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product3.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product4.jpg") }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product-details.html">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$82.00</span>
                                                    <span class="current_price">$75.00</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product11.jpg") }}" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product12.jpg") }}" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$65.00</span>
                                                    <span class="current_price">$60.00</span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <!--product area end-->

            </div>

            <div class="col-xl-3 col-lg-4 col-12">
                <!--sidebar widget start-->
                <aside class="sidebar_widget mb-5">
                    <div class="widget_list widget_products">
                        <h3>Deals Of The Month</h3>
                        <div class="product_carousel product_style product_sidebar_slider owl-carousel">
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-countdown.html"><img src="{{ asset("front/assets/img/product/product1.jpg") }}" alt=""></a>
                                        <a class="secondary_img" href="product-countdown.html"><img src="{{ asset("front/assets/img/product/product2.jpg") }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="product-countdown.html">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <div class="countdown_text">
                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2021/12/15"></div>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-countdown.html"><img src="{{ asset("front/assets/img/product/product3.jpg") }}" alt=""></a>
                                        <a class="secondary_img" href="product-countdown.html"><img src="{{ asset("front/assets/img/product/product4.jpg") }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="product-countdown.html">Donec tempus pretium arcu et faucibus commodo</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$82.00</span>
                                                <span class="current_price">$75.00</span>
                                            </div>
                                            <div class="countdown_text">
                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2021/08/15"></div>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>

                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-countdown.html"><img src="{{ asset("front/assets/img/product/product5.jpg") }}" alt=""></a>
                                        <a class="secondary_img" href="product-countdown.html"><img src="{{ asset("front/assets/img/product/product6.jpg") }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="product-countdown.html">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">$80.00</span>
                                                <span class="current_price">$70.00</span>
                                            </div>
                                            <div class="countdown_text">
                                                <p><span>Hurry Up!</span> Offers ends in: </p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2021/02/15"></div>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart.html" title="Add to cart">Add to cart</a>
                                        </div>

                                    </div>
                                </figure>
                            </article>
                        </div>
                    </div>
                    <div class="widget_list widget_categories">
                        <h3>Product categories</h3>
                        <div class="categories_sidebar_slider owl-carousel">
                            <div class="categories_sidebar_slide">
                                <div class="single_categories_product">
                                    <div class="categories_product_content">
                                        <h4><a href="shop.html"> Cells & Tablets</a></h4>
                                        <p>12 Products</p>
                                    </div>
                                    <div class="categories_product_thumb">
                                        <a href="shop.html"><img src="{{ asset("front/assets/img/s-product/category1.jpg") }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_categories_product">
                                    <div class="categories_product_content">
                                        <h4><a href="shop.html"> Computer</a></h4>
                                        <p>24 Products</p>
                                    </div>
                                    <div class="categories_product_thumb">
                                        <a href="shop.html"><img src="{{ asset("front/assets/img/s-product/category2.jpg") }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_categories_product">
                                    <div class="categories_product_content">
                                        <h4><a href="shop.html"> Fashion</a></h4>
                                        <p>22 Products</p>
                                    </div>
                                    <div class="categories_product_thumb">
                                        <a href="shop.html"><img src="{{ asset("front/assets/img/s-product/category3.jpg") }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="categories_sidebar_slide">
                                <div class="single_categories_product">
                                    <div class="categories_product_content">
                                        <h4><a href="shop.html"> Sunglasses</a></h4>
                                        <p>06 Products</p>
                                    </div>
                                    <div class="categories_product_thumb">
                                        <a href="shop.html"><img src="{{ asset("front/assets/img/s-product/category4.jpg") }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_categories_product">
                                    <div class="categories_product_content">
                                        <h4><a href="shop.html"> Baby & Kids</a></h4>
                                        <p>20 Products</p>
                                    </div>
                                    <div class="categories_product_thumb">
                                        <a href="shop.html"><img src="{{ asset("front/assets/img/s-product/category5.jpg") }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_categories_product">
                                    <div class="categories_product_content">
                                        <h4><a href="shop.html"> Accessories</a></h4>
                                        <p>04 Products</p>
                                    </div>
                                    <div class="categories_product_thumb">
                                        <a href="shop.html"><img src="{{ asset("front/assets/img/s-product/category6.jpg") }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="categories_sidebar_slide">
                                <div class="single_categories_product">
                                    <div class="categories_product_content">
                                        <h4><a href="shop.html"> Cells & Tablets</a></h4>
                                        <p>12 Products</p>
                                    </div>
                                    <div class="categories_product_thumb">
                                        <a href="shop.html"><img src="{{ asset("front/assets/img/s-product/category7.jpg") }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_categories_product">
                                    <div class="categories_product_content">
                                        <h4><a href="shop.html"> Accessories</a></h4>
                                        <p>12 Products</p>
                                    </div>
                                    <div class="categories_product_thumb">
                                        <a href="shop.html"><img src="{{ asset("front/assets/img/s-product/category8.jpg") }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="single_categories_product">
                                    <div class="categories_product_content">
                                        <h4><a href="shop.html"> Cells & Tablets</a></h4>
                                        <p>12 Products</p>
                                    </div>
                                    <div class="categories_product_thumb">
                                        <a href="shop.html"><img src="{{ asset("front/assets/img/s-product/category9.jpg") }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget_list widget_banner">
                        <figure class="single_banner">
                            <div class="banner_thumb">
                                <a href="shop.html"><img src="{{ asset("front/assets/img/bg/banner9.jpg") }}" alt=""></a>
                            </div>
                        </figure>
                    </div>
                    <div class="widget_list widget_products">
                        <h3>Popular Products</h3>
                        <div class="recent_product_container">
                            <article class="recent_product_list">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product9.jpg") }}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product10.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4><a href="product-details.html">Aliquam lobortis pellentesque</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$70.00</span>
                                            <span class="current_price">$65.00</span>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                            <article class="recent_product_list">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product11.jpg") }}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product12.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4><a href="product-details.html">Convallis quam sit vitae sodales</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$70.00</span>
                                            <span class="current_price">$65.00</span>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                            <article class="recent_product_list">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product14.jpg") }}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product13.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4><a href="product-details.html">Cillum dolore nisl fermentum</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$70.00</span>
                                            <span class="current_price">$65.00</span>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                    </div>
                </aside>
                <!--sidebar widget end-->
            </div>

        </div>
    </div>

    <!--product area start-->
    <div class="small_product_area small_product_style2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="small_product_list">
                        <div class="section_title">
                            <h2>Computer & Networking</h2>
                        </div>
                        <div class="product_carousel small_p_container  product_column1 owl-carousel">
                            <div class="product_items">
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product9.jpg") }}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product10.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product-details.html">Porro quisquam eget feugiat pretium posuere maximus</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$82.00</span>
                                            <span class="current_price">$78.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product11.jpg") }}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product12.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product-details.html">Aliquam lobortis pellentesque eugiat pretium nisi lectus</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$72.00</span>
                                            <span class="current_price">$68.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product13.jpg") }}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product14.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                            </div>
                            <div class="product_items">
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product9.jpg") }}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product10.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product-details.html">Porro quisquam eget feugiat pretium posuere maximus</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$82.00</span>
                                            <span class="current_price">$78.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product11.jpg") }}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product12.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product-details.html">Aliquam lobortis pellentesque eugiat pretium nisi lectus</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$72.00</span>
                                            <span class="current_price">$68.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product13.jpg") }}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product14.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="small_product_list">
                        <div class="section_title">
                            <h2>Games & Consoles</h2>
                        </div>
                        <div class="product_carousel small_p_container  product_column1 owl-carousel">
                            <div class="product_items">
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product1.jpg") }}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product2.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$82.00</span>
                                            <span class="current_price">$78.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product3.jpg") }}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product4.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product-details.html">Nostrum exercitationem itae neque nulla nec posuere sem</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$72.00</span>
                                            <span class="current_price">$68.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product5.jpg") }}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product6.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                            </div>
                            <div class="product_items">
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product9.jpg") }}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product10.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product-details.html">Porro quisquam eget feugiat pretium posuere maximus</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$82.00</span>
                                            <span class="current_price">$78.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product11.jpg") }}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product12.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product-details.html">Aliquam lobortis pellentesque eugiat pretium nisi lectus</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$72.00</span>
                                            <span class="current_price">$68.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product13.jpg") }}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product14.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="small_product_list">
                        <div class="section_title">
                            <h2>Mobile & Tablets</h2>
                        </div>
                        <div class="product_carousel small_p_container  product_column1 owl-carousel">
                            <div class="product_items">
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product13.jpg") }}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product14.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product-details.html">Porro quisquam eget feugiat pretium posuere maximus</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$82.00</span>
                                            <span class="current_price">$78.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product15.jpg") }}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product16.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product-details.html">Aliquam lobortis pellentesque eugiat pretium nisi lectus</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$72.00</span>
                                            <span class="current_price">$68.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product17.jpg") }}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product18.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                            </div>
                            <div class="product_items">
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product19.jpg") }}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product20.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product-details.html">Porro quisquam eget feugiat pretium posuere maximus</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$82.00</span>
                                            <span class="current_price">$78.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product1.jpg") }}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product2.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product-details.html">Aliquam lobortis pellentesque eugiat pretium nisi lectus</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$72.00</span>
                                            <span class="current_price">$68.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                                <figure class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product3.jpg") }}" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="{{ asset("front/assets/img/product/product4.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4 class="product_name"><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_cart_button">
                                            <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                        </div>

                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product area end-->
</div>
@endsection
