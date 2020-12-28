<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ecommerce | Super Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.partials.styles')
    @yield('styles')
    <!-- modernizr css -->
    <script src="superadmin-assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
     <!-- preloader area end -->


    <!-- page container area start -->
    <div class="page-container">


       @include('layouts.partials.left-sidebar')


        <!-- main content area start -->
        <div class="main-content">
           
        @include('layouts.partials.header')

            @yield('superadmin-content')
           
        <!-- main content area end -->



        @include('layouts.partials.footer')



    </div>
    <!-- page container area end -->

    @include('layouts.partials.right-sidebar')
    

    @include('layouts.partials.scripts')
    @yield('scripts')
    
</body>

</html>
