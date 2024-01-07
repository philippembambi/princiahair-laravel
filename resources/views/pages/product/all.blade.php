@inject('categories', App\Utils\CategoryUtil::class)
@inject('product', App\Utils\ProductUtil::class)

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
                                <h2>Collection</h2>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <nav aria-label="breadcrumb" class="theme-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('index')}}">Accueil</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tous les produits</li>
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
                            <h2>collection</h2>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <nav aria-label="breadcrumb" class="theme-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('index')}}">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Produits</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- section start -->
        <section class="section-b-space ratio_asos">
            <div class="collection-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 collection-filter">
                            <!-- side-bar colleps block stat -->
                            <div class="collection-filter-block">
                                <!-- brand filter start -->
                                <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left"
                                            aria-hidden="true"></i> back</span></div>
                                <div class="collection-collapse-block open">
                                    <h3 class="collapse-block-title">Catégories</h3>
                                    <div class="collection-collapse-block-content">
                                        <div class="collection-brand-filter">
                                            @forelse ($categories->data as $category)
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="zara">
                                                    <label class="form-check-label" for="zara">{{  $category->name }}</label>
                                                </div>                                                
                                            @empty
                                                
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- silde-bar colleps block end here -->
                            <!-- side-bar single product slider start -->
                            <div class="theme-card">
                                <h5 class="title-border">Produits similaires</h5>
                                <div class="offer-slider slide-1">
                                    <div>
                                        @forelse ($product->getPromoProducts() as $item)
                                            <div class="media">
                                                <a href=""><img class="img-fluid blur-up lazyload"
                                                        src="{{asset('uploads/'.$item->a_image)}}" alt=""></a>
                                                <div class="media-body align-self-center">
                                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i>
                                                    </div><a href="product-page(no-sidebar).html">
                                                        <h6>{{ $item->label }}</h6>
                                                    </a>
                                                    <h4>{{ $item->label }} &euro;</h4>
                                                </div>
                                            </div>    
                                        @empty
                                        @endforelse
                                    </div>

                                    <div>
                                        @forelse ($product->getPromoProductsDecr() as $item)
                                            <div class="media">
                                                <a href=""><img class="img-fluid blur-up lazyload"
                                                        src="{{asset('uploads/'.$item->a_image)}}" alt=""></a>
                                                <div class="media-body align-self-center">
                                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i>
                                                    </div><a href="product-page(no-sidebar).html">
                                                        <h6>{{ $item->label }}</h6>
                                                    </a>
                                                    <h4>{{ $item->label }} &euro;</h4>
                                                </div>
                                            </div>    
                                        @empty
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                            <!-- side-bar single product slider end -->
                            <!-- side-bar banner start here -->
                            <div class="collection-sidebar-banner">
                                <a href="#"><img src="{{ asset('assets/images/_products/slider3.jpeg') }}" style="height: 300px;" class="img-fluid blur-up lazyload"
                                        alt=""></a>
                            </div>
                            <!-- side-bar banner end here -->
                        </div>
                        
                        <div class="collection-content col">
                            <div class="page-main-content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="top-banner-wrapper">
                                            <a href="#"><img src="{{ asset('assets/images/_products/banner1.jpg') }}" style="width: 100%;"
                                                    class="img-fluid blur-up lazyload" alt=""></a>
                                            <div class="top-banner-content small-section">
                                                <h4>PrinciHair illumine votre coiffure</h4>
                                                <p style="font-size: 20px">Retrouvez les perruques de tout style, courte, mi-longue ou longue à base des cheveux naturels ou synthétiques. </p>
                                            </div>
                                        </div>
                                        <div class="collection-product-wrapper">
                                            <div class="product-top-filter">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="filter-main-btn"><span
                                                                class="filter-btn btn btn-theme"><i class="fa fa-filter"
                                                                    aria-hidden="true"></i> Filtrer</span></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="product-filter-content">
                                                            
                                                            <div class="collection-view">
                                                                <ul>
                                                                    <li><i class="fa fa-th grid-layout-view"></i></li>
                                                                    <li><i class="fa fa-list-ul list-layout-view"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="collection-grid-view">
                                                                <ul>
                                                                    <li><img src="{{  asset('assets/images/icon/2.png')  }}" alt=""
                                                                            class="product-2-layout-view"></li>
                                                                    <li><img src="{{  asset('assets/images/icon/3.png')  }}" alt=""
                                                                            class="product-3-layout-view"></li>
                                                                    <li><img src="{{  asset('assets/images/icon/4.png')  }}" alt=""
                                                                            class="product-4-layout-view"></li>
                                                                    <li><img src="{{  asset('assets/images/icon/6.png')  }}" alt=""
                                                                            class="product-6-layout-view"></li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-page-per-view">
                                                                <select>
                                                                    <option value="High to low">24 Produits par Page
                                                                    </option>
                                                                    <option value="Low to High">50 Produits par Page
                                                                    </option>
                                                                    <option value="Low to High">100 Produits par Page
                                                                    </option>
                                                                </select>
                                                            </div>
                                                            <div class="product-page-filter">
                                                                <select>
                                                                    <option value="High to low">Trier par</option>
                                                                    <option value="Low to High">50 Produits</option>
                                                                    <option value="Low to High">100 Produits</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-wrapper-grid product-load-more">
                                                <div class="row margin-res">
                                                    @forelse ($product->data as $item)
                                                    <div class="col-xl-3 col-6 col-grid-box">
                                                        <div class="product-box">
                                                            <div class="img-wrapper">
                                                                <div class="front">
                                                                    <a href="{{ url("product/detail/$item->id") }}"><img src="{{asset('uploads/'.$item->a_image)}}"
                                                                            class="img-fluid blur-up lazyload bg-img"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="back">
                                                                    <a href="{{ url("product/detail/$item->id") }}"><img src="{{asset('uploads/'.$item->a_image)}}"
                                                                            class="img-fluid blur-up lazyload bg-img"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="cart-info cart-wrap">
                                                                    <button data-bs-toggle="modal"
                                                                        data-bs-target="#addtocart" title="Ajouter au panier"><i
                                                                            class="ti-shopping-cart"></i></button> <a
                                                                        href="javascript:void(0)" title="Add to Wishlist"><i
                                                                            class="ti-heart" aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-detail">
                                                                <div>
                                                                    <div class="rating"><i class="fa fa-star"></i> <i
                                                                            class="fa fa-star"></i> <i
                                                                            class="fa fa-star"></i> <i
                                                                            class="fa fa-star"></i> <i
                                                                            class="fa fa-star"></i></div>
                                                                    <a href="{{ url("product/detail/$item->id") }}">
                                                                        <h6>{{ $item->label }}</h6>
                                                                    </a>
                                                                    <h4>{{ $item->price }} &euro;</h4>
                                                                    <div class="add-btn">
                                                                        <a href="javascript:void(0)" class="text-primary" style="margin-top: 1rem;font-size: 17px" onclick="addToCart({{ $item->id }})" class="">
                                                                            <i class="ti-shopping-cart"></i> Ajouter au panier
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @empty
                                                        
                                                    @endforelse
                                                </div>
                                            </div>
                                            <div class="load-more-sec"><a href="javascript:void(0)" class="loadMore">Afficher plus</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section End -->

</div>

@component('components.footer')
@endcomponent

@endsection
