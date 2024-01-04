@inject('product', App\Utils\ProductUtil::class)

   <!-- Paragraph-->
    <div class="title1 section-t-space">
        <h4>Offre spéciale</h4>
        <h2 class="title-inner1">Nouveaux arrivages</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="product-para">
                    <p class="text-center">Looking for the latest trends in clothing, shoes and accessories? Welcome to
                        our 'Latest Drops' edit, bringing you all the latest styles from all your fave brands.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Paragraph end -->

    <!-- Product slider -->
    <section class="section-b-space pt-0 ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="product-4 product-m no-arrow">
                        @forelse ($product->getNewalProducts() as $item)
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="{{ url("product/detail/$item->id") }}"><img src="{{ asset("uploads/$item->a_image") }}"
                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                    </div>
                                    <div class="back">
                                        <a href="{{ url("product/detail/$item->id") }}"><img src="{{ asset('assets/images/_products/5.webp') }}"
                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                    </div>
                                    <div class="cart-info cart-wrap">
                                        <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart">
                                            <i class="ti-shopping-cart"></i>
                                        </button>
                                        <a href="javascript:void(0)" title="Ajouter au panier">
                                            <i class="ti-heart" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View">
                                            <i class="ti-search" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    </div>
                                    <a href="{{ url("product/detail/$item->id") }}">
                                        <h6>{{ $item->label }}</h6>
                                    </a>
                                    <h4>{{ $item->price }} &euro;</h4>
                                    <ul class="color-variant">
                                        <li class="bg-light0"></li>
                                        <li class="bg-light1"></li>
                                        <li class="bg-light2"></li>
                                    </ul>
                                </div>
                            </div>     
                        @empty
                            
                        @endforelse
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product slider end -->