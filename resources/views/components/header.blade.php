@inject('cart', App\Utils\CartUtil::class)
@php
    $subtotal = 0
@endphp

<!-- header start -->
<header>
    <div class="mobile-fix-option"></div>
    <div class="top-header bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-contact">
                        <ul>
                            <li style="color: white; font-size: 16px;">Princiahair illumine votre coiffure</li>
                            <li style="color: white;font-size: 16px;"><i class="fa fa-envelope" aria-hidden="true"></i>Envoyez un mail à <span style="color: #f39910;">info@princiahair.fr</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 text-end" id="mobile-account">
                    <ul class="header-dropdown">
                        <li class="onhover-dropdown mobile-account" style="color: white;font-size: 16px;"> <i class="fa fa-user text-primary" aria-hidden="true"></i>
                            Mon compte
                            <ul class="onhover-show-div">
                                <li style="color: white;font-size: 16px;"><a href="login.html">Se connecter</a></li>
                                <li style="color: white;font-size: 16px;"><a href="register.html">S'enregistrer</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container princia-subheader">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-menu">
                    <div class="menu-left">
                        <div class="navbar">
                            <a href="javascript:void(0)" onclick="openNav()" class="princia-navbar">
                                <div class="bar-style" style="margin-top: -2rem !important;"><i class="fa fa-bars sidebar-bar text-primary" aria-hidden="true"></i>
                                </div>
                            </a>
                            <div id="mySidenav" class="sidenav">
                                <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                                <nav>
                                    <div onclick="closeNav()">
                                        <div class="sidebar-back text-start"><i class="fa fa-angle-left pe-2"
                                                aria-hidden="true"></i></div>
                                    </div>
                                    <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                        <li><a href="#">Acceuil</a></li>
                                        <li> <a href="{{  route('product.all')  }}">Perruques</a></li>
                                        <li> <a href="#">Laces frontales</a></li>
                                        <li> <a href="#">Cosmétiques</a></li>
                                        <li> <a href="#">Catégories</a>
                                            <ul>
                                                <li><a href="#">shopper bags</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="#">Pages</a>
                                            <ul>
                                                <li><a href="#">Aide</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="brand-logo">
                            
                        </div>
                        <a href="{{url('index')}}">
                          <img  src="{{asset('assets/img/logo.png')}}" 
                                class="logo-header img-fluid blur-up lazyload" 
                                alt=""></a>
                    </div>
                    <div class="menu-right pull-right">
                        <div>
                            <nav id="main-nav">
                                <a href="{{url('index')}}" class="logo-right">
                                    <div class="toggle-nav">
                                        <img src="{{asset('assets/img/logo.png')}}" class="mobile-logo-header"/>
                                    </div>
                                </a>
                                
                                <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                    <li>
                                        <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2"
                                                aria-hidden="true"></i></div>
                                    </li>
                                    <li><a href="{{url('index')}}">Acceuil</a></li>
                                    <li class="mega" id="hover-cls">
                                        <a href="{{  route('product.all')  }}">Perruques</a>
                                    </li>
                                    <li>
                                        <a href="#">Laces frontales</a>
                                    </li>
                                    <li>
                                        <a href="#">Cosmétiques <div class="lable-nav">new</div></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div>
                            <div class="icon-nav">
                                <ul>
                                    <li class="onhover-div mobile-search">
                                        <div><img src="{{ asset('assets/images/icon/search.png')  }}" onclick="openSearch()"
                                                class="img-fluid blur-up lazyload" alt=""> <i class="ti-search"
                                                onclick="openSearch()"></i></div>
                                        <div id="search-overlay" class="search-overlay">
                                            <div> <span class="closebtn" onclick="closeSearch()"
                                                    title="Close Overlay">×</span>
                                                <div class="overlay-content">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <form>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                            id="exampleInputPassword1"
                                                                            placeholder="Search a Product">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary"><i
                                                                            class="fa fa-search"></i></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li id="mobile_headerSettingIcon" class="onhover-div mobile-setting">
                                        <div><img src="{{ asset('assets/images/icon/setting.png')  }}"
                                                class="img-fluid blur-up lazyload" alt=""> <i
                                                class="ti-settings"></i></div>
                                        <div class="show-div setting">
                                            <h6>Devise</h6>
                                            <ul class="list-inline">
                                                <li><a href="#">euro</a></li>
                                                <li><a href="#">dollar</a></li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="onhover-div mobile-setting" id="mobile_headerUserIcon">
                                        <div><img src="{{ asset('assets/images/icon/avatar.png')  }}"
                                                class="img-fluid blur-up lazyload" alt=""> <i
                                                class="ti-user"></i></div>
                                        <div class="show-div setting">
                                            <h6>Mon compte</h6>
                                            <ul class="list-inline">
                                                <li><a href="#">Se connecter</a></li>
                                                <li><a href="#">S'enregistrer</a></li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="onhover-div mobile-cart">
                                        <div><img src="{{  asset('assets/images/icon/cart.png') }}"
                                                class="img-fluid blur-up lazyload" alt=""> <i
                                                class="ti-shopping-cart"></i></div>
                                        <span class="cart_qty_cls" id="cart_qty_cls">{{ $cart->count }}</span>
                                        <ul class="show-div shopping-cart">
                                            @forelse ($cart->cart as $item)
                                            @php
                                                $subtotal = $subtotal + $item->product->price;
                                                $produtId = $item->product->id;
                                            @endphp
                                                <li>
                                                    <div class="media">
                                                        <a href="{{ url("product/detail/$produtId") }}"><img alt="" class="me-3"
                                                                src="{{asset('uploads/'.$item->product->a_image)}}"></a>
                                                        <div class="media-body">
                                                            <a href="{{ url("product/detail/$produtId") }}">
                                                                <h4>{{ $item->product->label }}</h4>
                                                            </a>
                                                            <h4><span>{{ $item->product->price }} &euro;</span></h4>
                                                        </div>
                                                    </div>
                                                    <div class="close-circle"><a href="#"><i class="fa fa-times"
                                                                aria-hidden="true"></i></a></div>
                                                </li>    
                                            @empty
                                                
                                            @endforelse
                                            
                                            <li>
                                                <div class="total">
                                                    <h5>Sous total : <span>{{ $subtotal  }}.00 &euro;</span></h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="buttons"><a href="#" class="view-cart">Voir le panier</a> <a href="#" class="checkout btn btn-solid" style="color: white;">Payer</a></div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->
