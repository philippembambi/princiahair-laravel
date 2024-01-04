@inject('product', App\Utils\ProductUtil::class)

<!-- Paragraph-->
        <div class="title6 section-t-space">
            <h2 class="font-fraunces">PrinciaHair collection</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="product-para">
                        <p class="text-center">Découvrez la meilleure collection des plantes de cheveux 100% naturnels</p>
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
                                    <i class="fa fa-cart-plus" style="font-size: 28px;" aria-hidden="true"></i></a> 
                                <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#quick-view" title="Quick View">
                                    <i class="ti-search" style="font-size: 25px;"
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

<script>
    function addToCart(productId) {
        $.notify({
            icon: 'fa fa-check',
            title: "",
            message: 'Produit ajouté au panier avec succès !'
        }, {
            onShow: function(){
                $.ajax({
                    url: '/cart/add/' + productId,
                    type: 'get',
                    data: productId,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function() {
                        // init_menu();
                        // document.getElementById("basket" + basket_id).remove()
                    }
                });
            },
            onShown: null,
            onClose: null,
            onClosed: null,
            element: 'body',
            position: null,
            type: "info",
            allow_dismiss: true,
            newest_on_top: false,
            showProgressbar: true,
            placement: {
                from: "top",
                align: "right"
            },
            offset: 20,
            spacing: 10,
            z_index: 1031,
            delay: 1500,
            animate: {
                enter: 'animated fadeInDown',
                exit: 'animated fadeOutUp'
            },
            icon_type: 'class',
            template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                '<button type="button" aria-hidden="true" class="btn-close" data-notify="dismiss"></button>' +
                '<span data-notify="icon"></span> ' +
                '<span data-notify="title">{1}</span> ' +
                '<span data-notify="message">{2}</span>' +
                '<div class="progress" data-notify="progressbar">' +
                '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                '</div>' +
                '<a href="{3}" target="{4}" data-notify="url"></a>' +
                '</div>'
        });
    }
</script>
