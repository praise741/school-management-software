<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
<title>Uncle George Kids || HOME</title>


<meta name="author" content="Dotmart codes" />
<meta name="description" content="Uncle George Kids || Dashboard" />
<meta property="og:title" content="Uncle George Kids || Dashboard" />
<meta property="og:site_name" content="unclegeorgekids.com">
<meta property="og:description" content="...quality you can trust" />
<meta property="og:image" content="{{ asset('storage/index/images/icon.png') }}" />



<!-- Site Icons -->
<link rel="shortcut icon" href="{{ asset('storage/index/images/favicon.fw.png') }}" type="image/x-icon" />
<link rel="apple-touch-icon" href="{{ asset('storage/index/images/img-01.png') }}">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('storage/index/css/bootstrap.min.css') }}">
<!-- Site CSS -->
<link rel="stylesheet" href="{{ asset('storage/index/style.css') }}">
<!-- Colors CSS -->
<link rel="stylesheet" href="{{ asset('storage/index/css/colors.css') }}">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="{{ asset('storage/index/css/versions.css') }}">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{ asset('storage/index/css/responsive.css') }}">
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('storage/index/css/custom.css') }}">

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="barber_version">

    <!-- LOADER -->
    <div id="preloader">
        <div class="cube-wrapper">
            <div class="cube-folding">
                <span class="leaf1"></span>
                <span class="leaf2"></span>
                <span class="leaf3"></span>
                <span class="leaf4"></span>
            </div>
            <span class="loading" data-name="Loading">Uncle George Kids Loading</span>
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">

        <!-- Sidebar-wrapper -->
        <div id="sidebar-wrapper">
            <div class="side-top">
                <div class="logo-sidebar">
                    <a href="/"><img src="{{ asset('storage/index/images/img-01.png') }}" class="img-circle" alt="image" height="200"></a>
                </div>
                <ul class="sidebar-nav">
                    <li><a class="active" href="/login">Dashboard</a></li>

                </ul>
            </div>
        </div>
        <!-- End Sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
            <div style="background-image:url({{ asset('storage/index/images/bg2.gif') }}); background-size: cover;" id="home" class="parallax first-section" data-stellar-background-ratio="0.4">
                <div class="container-fluid">
                    <div class="row">
                        <div id="full-width" class="owl-carousel owl-theme">
                            <div class="text-center item">
                                <div class="col-md-8 col-md-offset-2 col-sm-12">
                                    <div class="big-tagline text-center">
                                        <h2><strong>SMS</strong>
                                        </h2>
                                        <a href="login/" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">Account Login</a>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center item">
                                <div class="col-md-8 col-md-offset-2 col-sm-12">
                                    <div class="big-tagline text-center">
                                        <h2><strong>SMS</strong></h2>
                                        <a href="login" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">Staff Login</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end section -->




        </div>
    </div>
    <!-- end wrapper -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="{{ asset('storage/index/js/all.js') }}"></script>
    <script src="{{ asset('storage/index/js/responsive-tabs.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('storage/index/js/custom.js') }}"></script>

    <!-- Menu Toggle Script -->
    <script>
        (function($) {
            "use strict";
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
            smoothScroll.init({
                selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
                selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
                speed: 500, // Integer. How fast to complete the scroll in milliseconds
                easing: 'easeInOutCubic', // Easing pattern to use
                offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
                callback: function(anchor, toggle) {} // Function to run after scrolling
            });
        })(jQuery);
    </script>

</body>

</html>
