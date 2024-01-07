@inject('product', App\Utils\ProductUtil::class)

<!-- Paragraph-->
        <div class="title6 section-t-space">
            <h2 class="font-fraunces">Votre collection de cheveux</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="product-para">
                        <p class="text-center text-primary" style="font-size: 1.2rem;">Découvrez la meilleure collection des plantes de cheveux 100% naturnels</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Paragraph end -->

    <!-- product start -->
    <section class="bag-product pt-0 section-b-space ratio_square">
        <div class="container">
            <div class="row row-cols-xxl-6 row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 gy-sm-4 gy-3">
                @forelse ($product->getTopProducts() as $item)
                    <div class="product-box product-wrap product-style-3">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="{{ url("product/detail/$item->id") }}"><img alt=""
                                        src="{{ asset("uploads/$item->a_image") }}"
                                        class="img-fluid blur-up lazyload bg-img"></a>
                            </div>
                            <div class="cart-detail">
                                <a href="javascript:void(0)" onclick="addToCart({{ $item->id }})" title="Ajouter au panier">
                                    <i class="fa fa-cart-plus text-primary" style="font-size: 28px;" aria-hidden="true"></i></a> 
                                <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#quick-view" title="Quick View">
                                    <i class="ti-search text-primary" style="font-size: 25px;"
                                    aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <a href="{{ url("product/detail/$item->id") }}">
                                <h6>{{ $item->label }}</h6>
                            </a>
                            <h4>{{ $item->price }} &euro;</h4>
                            <div class="add-btn">
                                <a href="javascript:void(0)" onclick="addToCart({{ $item->id }})" class="">
                                    <i class="ti-shopping-cart"></i> Ajouter au panier
                                </a>
                            </div>
                        </div>
                    </div>                    
                @empty
                    
                @endforelse
            </div>
        </div>
    </section>
    <!-- product end -->