@extends('layouts.app')


@section('content')
        <!-- loader start -->
        <div class="loader_skeleton">
            @component('components.header')
            @endcomponent
            <div class="breadcrumb-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="page-title">
                                <h2>Produit</h2>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <nav aria-label="breadcrumb" class="theme-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('index')}}">Produit</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $category  }}</li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $product->label  }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <section class="section-b-space ratio_asos">
                <div class="collection-wrapper product-page">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="main-product lg-img"></div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="sm-product"></div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="sm-product"></div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="sm-product"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="product-right">
                                                <h2></h2>
                                                <h4></h4>
                                                <h3></h3>
                                                <ul>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                                <div class="btn-group">
                                                    <div class="btn-ldr"></div>
                                                    <div class="btn-ldr"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <section class="tab-product m-0">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-12">
                                            <ul>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                            <p></p>
                                            <p></p>
                                            <p></p>
                                            <p></p>
                                            <p></p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- loader end -->

        @component('components.header')
        @endcomponent

        <!-- breadcrumb start -->
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="page-title">
                            <h2>Produit</h2>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <nav aria-label="breadcrumb" class="theme-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('index')}}">Produit</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $category  }}</li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $product->label  }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb End -->
    
    
        <!-- section start -->
        <section>
            <div class="collection-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="product-slick">
                                <div><img src="{{asset('uploads/'.$product->a_image)}}" alt=""
                                        class="img-fluid blur-up lazyload image_zoom_cls-1"></div>
                                <div><img src={{ asset('assets/images/_products/9.jpeg') }} alt=""
                                        class="img-fluid blur-up lazyload image_zoom_cls-2"></div>
                                <div><img src={{ asset('assets/images/_products/9.jpeg') }} alt=""
                                        class="img-fluid blur-up lazyload image_zoom_cls-3"></div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0">
                                    <div class="slider-nav">
                                        <div><img src="{{asset('uploads/'.$product->a_image)}}" alt=""
                                                class="img-fluid blur-up lazyload"></div>
                                        <div><img src="{{asset('uploads/'.$product->a_image)}}" alt=""
                                                class="img-fluid blur-up lazyload"></div>
                                        <div><img src="{{asset('uploads/'.$product->a_image)}}" alt=""
                                                class="img-fluid blur-up lazyload"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 rtl-text">
                            <div class="product-right">
                                <h2>{{ $product->label }}</h2>
                                <div class="rating-section">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    </div>
                                    <h6>Populaire</h6>
                                </div>
                                <div class="label-section">
                                    <span class="badge badge-grey-color">{{ $category  }}</span>
                                </div>
                                <h3 class="price-detail">{{ $product->price }} &euro; <del>{{ (int) $product->price + rand(30,150)  }} &euro;</del><span>&Eacute;conomisez {{  ceil((int) $product->price / 100) * 10  }} %</span></h3>
                                <ul class="color-variant">
                                    <li class="bg-light0 active"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                                <div class="product-buttons"><a href="javascript:void(0)" id="cartEffect"
                                        class="btn btn-solid hover-solid btn-animation"><i class="fa fa-shopping-cart me-1"
                                            aria-hidden="true"></i> Ajouter au panier</a> <a href="#" class="btn btn-solid"><i
                                            class="fa fa-bookmark fz-16 me-2" aria-hidden="true"></i>Acheter</a></div>
                                <div class="product-count">
                                    <ul>
                                        <li>
                                            <img src="./assets/images/icon/truck.png" class="img-fluid" alt="image">
                                            <span class="lang"><b>Livraison à domicile et sur site.</b></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="border-product">
                                    <h6 class="product-title">100% secure payment</h6>
                                    <img src="{{  asset('assets/images/payment.png')  }}" class="img-fluid mt-1" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <!-- product-tab starts -->
                        <section class="tab-product m-0">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12 col-lg-12">
                                        <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                                            <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab"
                                                    href="#top-home" role="tab" aria-selected="true"><i
                                                        class="icofont icofont-ui-home"></i>Details</a>
                                                <div class="material-border"></div>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab"
                                                    href="#top-contact" role="tab" aria-selected="false"><i
                                                        class="icofont icofont-contacts"></i>Video</a>
                                                <div class="material-border"></div>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" id="review-top-tab" data-bs-toggle="tab"
                                                    href="#top-review" role="tab" aria-selected="false"><i
                                                        class="icofont icofont-contacts"></i>Commenter</a>
                                                <div class="material-border"></div>
                                            </li>
                                        </ul>
                                        <div class="tab-content nav-material" id="top-tabContent">
                                            <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                                                aria-labelledby="top-home-tab">
                                                <div class="product-tab-discription">
                                                    <div class="part">
                                                        <p>
                                                            {{ $product->desc }}
                                                        </p>
                                                    </div>
                                                    <div class="row">
                                                        <h5 class="col-lg-6">Densité </h5>
                                                        <h5 class="col-lg-6">{{ $product->density  }}</h5>
                                                    </div>
                                                    <div class="row">
                                                        <h5 class="col-lg-6">Texture </h5>
                                                        <h5 class="col-lg-6">{{ $product->texture  }}</h5>
                                                    </div>
                                                    <div class="row">
                                                        <h5 class="col-lg-6">Couleur </h5>
                                                        <h5 class="col-lg-6">{{ $product->color  }}</h5>
                                                    </div>
                                                    <div class="row">
                                                        <h5 class="col-lg-6">Longueur </h5>
                                                        <h5 class="col-lg-6">{{ $product->length  }}</h5>
                                                    </div>
                                                    <div class="row">
                                                        <h5 class="col-lg-6">Délai d'utilisation </h5>
                                                        <h5 class="col-lg-6">{{ $product->usage_delay  }}</h5>
                                                    </div>
                                                    <div class="row">
                                                        <h5 class="col-lg-6">Bande d'élastique </h5>
                                                        <h5 class="col-lg-6">{{ $product->elastic_band  }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                                                <div class="">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/BUWzX78Ye_8"
                                                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="top-review" role="tabpanel" aria-labelledby="review-top-tab">
                                                <form class="theme-form">
                                                    <div class="form-row row">
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" id="name" placeholder="Entrer votre Nom"
                                                                required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" id="email" placeholder="Email" required>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" id="review"
                                                                placeholder="Objet de la revue" required>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <textarea class="form-control" placeholder="Laisser une revue en commentaire"
                                                                id="exampleFormControlTextarea1" rows="6"></textarea>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <button class="btn btn-solid" type="submit">Soumettre</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                            <!-- product-tab ends -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section ends -->
    
    @component('components.product_related')
    @endcomponent


    @component('components.footer')
    @endcomponent
@endsection
