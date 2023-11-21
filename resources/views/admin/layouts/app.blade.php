<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PrinciaHair">
    <meta name="keywords" content="PrinciaHair">
    <meta name="author" content="PrinciaHair">

    <!-- Google font-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

        <!-- Font Awesome-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/font-awesome.css') }}">

        <!-- Flag icon-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/flag-icon.css') }}">
    
        <!-- ico-font-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/icofont.css') }}">
    
        <!-- Prism css-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/prism.css') }}">
    
        <!-- Chartist css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/chartist.css') }}">
    
        <!-- Bootstrap css-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/bootstrap.css') }}">
    
        <!-- App css-->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/style.css') }}">
    
    <title>PrinciaHair - Admin</title>

</head>
    <body>
        @stack('scripts.head')
        @component('admin.components.header')
        @endcomponent
    
        @yield('content')
        @stack('scripts.foot')
    </body>
    <!-- latest jquery-->
    <script src="{{ asset('admin/assets/js/jquery-3.3.1.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- feather icon js-->
    <script src="{{ asset('admin/assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/icons/feather-icon/feather-icon.js') }}"></script>

    <!-- Sidebar jquery-->
    <script src="{{ asset('admin/assets/js/sidebar-menu.js') }}"></script>

    <!--chartist js-->
    <script src="{{ asset('admin/assets/js/chart/chartist/chartist.js') }}"></script>

    <!--chartjs js-->
    <script src="{{ asset('admin/assets/js/chart/chartjs/chart.min.js') }}"></script>

    <!-- lazyload js-->
    <script src="{{ asset('admin/assets/js/lazysizes.min.js') }}"></script>

    <!--copycode js-->
    <script src="{{ asset('admin/assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom-card/custom-card.js') }}"></script>

    <!--counter js-->
    <script src="{{ asset('admin/assets/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/counter/counter-custom.js') }}"></script>

    <!--peity chart js-->
    <script src="{{ asset('admin/assets/js/chart/peity-chart/peity.jquery.js') }}"></script>

    <!-- Apex Chart Js -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts') }}"></script>

    <!--sparkline chart js-->
    <script src="{{ asset('admin/assets/js/chart/sparkline/sparkline.js') }}"></script>

    <!--Customizer admin-->
    <script src="{{ asset('admin/assets/js/admin-customizer.js') }}"></script>

    <!--dashboard custom js-->
    <script src="{{ asset('admin/assets/js/dashboard/default.js') }}"></script>

    <!--right sidebar js-->
    <script src="{{ asset('admin/assets/js/chat-menu.js') }}"></script>

    <!--height equal js-->
    <script src="{{ asset('admin/assets/js/height-equal.js') }}"></script>

    <!-- lazyload js-->
    <script src="{{ asset('admin/assets/js/lazysizes.min.js') }}"></script>

    <!--script admin-->
    <script src="{{ asset('admin/assets/js/admin-script.js') }}"></script>

        </html>
