<!DOCTYPE html>
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