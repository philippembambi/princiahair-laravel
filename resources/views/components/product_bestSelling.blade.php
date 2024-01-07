@inject('product', App\Utils\ProductUtil::class)

<!-- Parallax banner -->
                <section class="p-0 product-vertical overflow-hidden">
                    <div class="full-banner parallax text-center p-left bg-secondary">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 m-auto">
                                    <div class="title6">
                                        <h2 class="font-fraunces text-white">Meilleures ventes</h2>
                                    </div>
                                    <div class="product-para">
                                        <p class="text-center" style="color: #f39910;font-weight:normal;font-size: 1.3rem">
                                            Nos meilleures ventes de perruques 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="slide-3 no-arrow slick-default-margin full-box">
                                        @forelse ($product->getBestSellingProducts() as $item)
                                            <div class="theme-card center-align">
                                                <div class="offer-slider">
                                                    <div class="sec-1">
                                                        <div class="product-box2">
                                                            <div class="media">
                                                                <a href="{{ url("product/detail/$item->id") }}"><img
                                                                        class="img-fluid blur-up lazyload"
                                                                        src="{{ asset("uploads/$item->a_image") }}" alt=""></a>
                                                                <div class="media-body align-self-center">
                                                                    <div class="rating"><i class="fa fa-star"></i> <i
                                                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                            class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                                    <a href="{{ url("product/detail/$item->id") }}">
                                                                        <h6>{{ $item->label }}</h6>
                                                                    </a>
                                                                    <h4>{{ $item->price }} &euro; <del>$200.00</del></h4>
                                                                    <ul class="color-variant">
                                                                        <li class="bg-light0"></li>
                                                                        <li class="bg-light1"></li>
                                                                        <li class="bg-light2"></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>    
                                        @empty
                                            
                                        @endforelse
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Parallax banner end -->
            