@inject('product', App\Utils\ProductUtil::class)

   <!-- Paragraph-->
    <div class="title1 section-t-space">
        <h4>Offre spéciale</h4>
        <h2 class="title-inner1" id="first_title">Nouveaux arrivages</h2>
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
                                        <button data-bs-toggle="modal" onclick="addToCart({{ $item->id   }})" data-bs-target="#addtocart" title="Ajouter au panier">
                                            <i class="ti-shopping-cart text-primary" style="font-size: 23px; font-weight: bolder;"></i>
                                        </button>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View">
                                            <i class="ti-search text-primary" style="font-size: 23px; font-weight: bolder;" aria-hidden="true"></i>
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