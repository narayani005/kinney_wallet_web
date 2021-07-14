<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="colored">

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Background -->
        <div class="account-pages"></div>
        <!-- Begin page -->
        <div class="wrapper-page">

            @yield('content')
            
            <div class="text-center">
                <p class="text-white-50"> @yield('acc_avail')  </p>
                <p class="text-muted">
                    ©
                    <script>document.write(new Date().getFullYear())</script> Kinney Wallet. Crafted with <i
                        class="mdi mdi-heart text-primary"></i> by
                    Kinney Infotech
                </p>
            </div>

        </div>


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{ asset('assets/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.js')}}"></script>

    </body>

</html>