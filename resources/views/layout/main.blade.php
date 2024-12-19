<!DOCTYPE html>
<<<<<<< HEAD
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>LokerIn</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{ asset('') }}landing/css/linearicons.css">
        <link rel="stylesheet" href="{{ asset('') }}landing/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('') }}landing/css/bootstrap.css">
        <link rel="stylesheet" href="{{ asset('') }}landing/css/magnific-popup.css">
        <link rel="stylesheet" href="{{ asset('') }}landing/css/nice-select.css">					
        <link rel="stylesheet" href="{{ asset('') }}landing/css/animate.min.css">
        <link rel="stylesheet" href="{{ asset('') }}landing/css/owl.carousel.css">
        <link rel="stylesheet" href="{{ asset('') }}landing/css/main.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    </head>
    <body>


        @include('layout.header')

        @yield('content')
    
        <!-- start footer Area -->		
        @include('layout.footer')
        <!-- End footer Area -->		

        <script src="{{ asset('') }}landing/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="{{ asset('') }}landing/js/vendor/bootstrap.min.js"></script>			
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
          <script src="{{ asset('') }}landing/js/easing.min.js"></script>			
        <script src="{{ asset('') }}landing/js/hoverIntent.js"></script>
        <script src="{{ asset('') }}landing/js/superfish.min.js"></script>	
        <script src="{{ asset('') }}landing/js/jquery.ajaxchimp.min.js"></script>
        <script src="{{ asset('') }}landing/js/jquery.magnific-popup.min.js"></script>	
        <script src="{{ asset('') }}landing/js/owl.carousel.min.js"></script>			
        <script src="{{ asset('') }}landing/js/jquery.sticky.js"></script>
        <script src="{{ asset('') }}landing/js/jquery.nice-select.min.js"></script>			
        <script src="{{ asset('') }}landing/js/parallax.min.js"></script>		
        <script src="{{ asset('') }}landing/js/mail-script.js"></script>	
        <script src="{{ asset('') }}landing/js/main.js"></script>	
    </body>
</html>
=======
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>InfoLoker</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="{{ asset('assets/img/kaiadmin/favicon.ico') }}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["assets/css/fonts.min.css"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/kaiadmin.min.css') }}" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        @include('layout.sidebar')
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="index.html" class="logo">
                            <img src="{{ asset('assets/img/kaiadmin/logo_light.svg')}}" alt="navbar brand" class="navbar-brand"
                                height="20" />
                        </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                    <!-- End Logo Header -->
                </div>
                <div>
                    <!-- Navbar Header -->
                    @include('layout.navbar')
                    <!-- End Navbar -->

                    @yield('content')

                    @include('layout.footer')
                </div>

                <!-- Custom template | don't include it in your project! -->
                <div class="custom-template">
                    <div class="title">Settings</div>
                    <div class="custom-content">
                        <div class="switcher">
                            <div class="switch-block">
                                <h4>Logo Header</h4>
                                <div class="btnSwitch">
                                    <button type="button" class="selected changeLogoHeaderColor"
                                        data-color="dark"></button>
                                    <button type="button" class="changeLogoHeaderColor" data-color="blue"></button>
                                    <button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
                                    <button type="button" class="changeLogoHeaderColor"
                                        data-color="light-blue"></button>
                                    <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
                                    <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
                                    <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
                                    <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
                                    <br />
                                    <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
                                    <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
                                    <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
                                    <button type="button" class="changeLogoHeaderColor"
                                        data-color="light-blue2"></button>
                                    <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
                                    <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
                                    <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
                                </div>
                            </div>
                            <div class="switch-block">
                                <h4>Navbar Header</h4>
                                <div class="btnSwitch">
                                    <button type="button" class="changeTopBarColor" data-color="dark"></button>
                                    <button type="button" class="changeTopBarColor" data-color="blue"></button>
                                    <button type="button" class="changeTopBarColor" data-color="purple"></button>
                                    <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
                                    <button type="button" class="changeTopBarColor" data-color="green"></button>
                                    <button type="button" class="changeTopBarColor" data-color="orange"></button>
                                    <button type="button" class="changeTopBarColor" data-color="red"></button>
                                    <button type="button" class="selected changeTopBarColor"
                                        data-color="white"></button>
                                    <br />
                                    <button type="button" class="changeTopBarColor" data-color="dark2"></button>
                                    <button type="button" class="changeTopBarColor" data-color="blue2"></button>
                                    <button type="button" class="changeTopBarColor" data-color="purple2"></button>
                                    <button type="button" class="changeTopBarColor"
                                        data-color="light-blue2"></button>
                                    <button type="button" class="changeTopBarColor" data-color="green2"></button>
                                    <button type="button" class="changeTopBarColor" data-color="orange2"></button>
                                    <button type="button" class="changeTopBarColor" data-color="red2"></button>
                                </div>
                            </div>
                            <div class="switch-block">
                                <h4>Sidebar</h4>
                                <div class="btnSwitch">
                                    <button type="button" class="changeSideBarColor" data-color="white"></button>
                                    <button type="button" class="selected changeSideBarColor"
                                        data-color="dark"></button>
                                    <button type="button" class="changeSideBarColor" data-color="dark2"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-toggle">
                        <i class="icon-settings"></i>
                    </div>
                </div>
                <!-- End Custom template -->
            </div>
<<<<<<< Updated upstream
            <!-- End Logo Header -->
          </div>
          <div>
          <!-- Navbar Header -->
    @include('layout.navbar')
          <!-- End Navbar -->
        </div>

        @yield('content')
=======
            <!--   Core JS Files   -->
            <script src="{{ asset('assets/js/core/jquery-3.7.1.min.js') }}"></script>
            <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
            <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>

            <!-- jQuery Scrollbar -->
            <script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
>>>>>>> Stashed changes

            <!-- Chart JS -->
            <script src="{{ asset('assets/js/plugin/chart.js/chart.min.js') }}"></script>

            <!-- jQuery Sparkline -->
            <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

            <!-- Chart Circle -->
            <script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>

            <!-- Datatables -->
            <script src="assets/js/plugin/datatables/datatables.min.js"></script>

            <!-- Bootstrap Notify -->
            <script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

            <!-- jQuery Vector Maps -->
            <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
            <script src="assets/js/plugin/jsvectormap/world.js"></script>

            <!-- Sweet Alert -->
            <script src="{{ asset('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

            <!-- Kaiadmin JS -->
            <script src="{{ asset('assets/js/kaiadmin.min.js') }}"></script>

            <!-- Kaiadmin DEMO methods, don't include it in your project! -->
            <script src="{{ asset('assets/js/setting-demo.js') }}"></script>
            <script src="{{ asset('assets/js/demo.js') }}"></script>
            <script>
                $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
                    type: "line",
                    height: "70",
                    width: "100%",
                    lineWidth: "2",
                    lineColor: "#177dff",
                    fillColor: "rgba(23, 125, 255, 0.14)",
                });

                $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
                    type: "line",
                    height: "70",
                    width: "100%",
                    lineWidth: "2",
                    lineColor: "#f3545d",
                    fillColor: "rgba(243, 84, 93, .14)",
                });

                $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
                    type: "line",
                    height: "70",
                    width: "100%",
                    lineWidth: "2",
                    lineColor: "#ffa534",
                    fillColor: "rgba(255, 165, 52, .14)",
                });
            </script>
</body>

</html>
<<<<<<< Updated upstream

>>>>>>> b443757fed070fe26031f61effbd989595a74d5f
=======
>>>>>>> Stashed changes
