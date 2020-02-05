<article class="single_product">
    <figure>
        <div class="product_thumb">
            <a class="primary_img" href="product-details.html"><img src="{{ getUrlImagen($producto->imagen,"medium") }}" alt=""></a>
            <a class="secondary_img" href="product-details.html"><img src="{{ getUrlImagen($producto->imagen,"medium") }}" alt=""></a>
            @if($producto->oferta == 1)
            <div class="label_product">
                <span class="label_sale">Oferta</span>
            </div>
            @endif
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
                <h4 class="product_name"><a href="product-details.html">{{ $producto->nombre }} {{ $loop->index }}</a></h4>
                <div class="price_box">
                    @if($producto->oferta == 1)
                    <span class="old_price">{{ getMoneda($producto->omonto_normal) }}</span>
                    @endif
                    <span class="current_price">{{ getMoneda($producto->precio) }}</span>
                </div>
            </div>
            <div class="add_to_cart">
                <a href="cart.html" title="Add to cart">Add to cart</a>
            </div>
        </div>
    </figure>
</article>
