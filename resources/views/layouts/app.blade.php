<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PrinciaHair">
    <meta name="keywords" content="PrinciaHair">
    <meta name="author" content="PrinciaHair">

    {{-- <link rel="shortcut icon" href="{{ asset('image/logo_groupemcs.png') }}" type="image/png"> --}}
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/font-awesome.css') }}">
    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick-theme.css') }}">
    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/themify-icons.css') }}">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">
    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">
    
    <title>PrinciaHair - cosmétique</title>

</head>
    <body class="theme-color-27">
        @stack('styles')
        @yield('content')
        @stack('scripts')
    </body>

        <!-- latest jquery-->
        <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
        <!-- slick js-->
        <script src="{{ asset('assets/js/slick.js') }}"></script>
        <script src="{{ asset('assets/js/slick-animation.min.js') }}"></script>
    
        <!-- menu js-->
        <script src="{{ asset('assets/js/menu.js') }}"></script>
        {{-- <script src="{{ asset('assets/js/sticky-menu.js') }}"></script>
     --}}
        <!-- ajax search js -->
        {{-- <script src="{{ asset('assets/js/typeahead.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/typeahead.jquery.min.js') }}"></script> --}}
        <script src="{{ asset('assets/js/ajax-custom.js') }}"></script>
    
        <!-- lazyload js-->
        <script src="{{ asset('assets/js/lazysizes.min.js') }}"></script>
    
        <!-- Bootstrap js-->
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    
        <!-- Bootstrap Notification js-->
        <script src="{{ asset('assets/js/bootstrap-notify.min.js') }}"></script>

        <!-- Theme js-->
        {{-- <script src="{{ asset('assets/js/theme-setting.js') }}"></script> --}}
        <script src="{{ asset('assets/js/script.js') }}"></script>
        {{-- <script src="{{ asset('assets/js/color-setting.js') }}"></script> --}}
        <script src="{{ asset('assets/js/custom-slick-animated.js') }}"></script>

        {{-- <script src="{{ asset('assets/js/fly-cart.js') }}"></script> --}}
        {{-- <script src="{{ asset('assets/js/script.js') }}"></script> --}}
        <script src="{{ asset('assets/js/bootstrap-notify.min.js') }}"></script>

        <script>
            // $(window).on('load', function () {
            //     setTimeout(function () {
            //         $('#exampleModal').modal('show');
            //     }, 9000);
            // });
    
            function openSearch() {
                document.getElementById("search-overlay").style.display = "block";
            }
    
            function closeSearch() {
                document.getElementById("search-overlay").style.display = "none";
            }

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
                            success: function(response) {
                                console.log('====================================');
                                console.log(response);
                                console.log('====================================');
                                document.getElementById("cart_qty_cls").innerHTML = response.count;
                                //jQuery('.footer-title h4').append('<span class="according-menu"></span>');
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
        </html>
