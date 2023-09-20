<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>aranoz</title>
    <link rel="icon" href="storage/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="storage/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="storage/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="storage/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="storage/css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="storage/css/flaticon.css">
    <link rel="stylesheet" href="storage/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="storage/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="storage/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="storage/css/style.css">
</head>

<body>
    
    @include('frontend.layouts.header')

    @yield('content')

    @include('frontend.layouts.footer')

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/73305753f0.js" crossorigin="anonymous"></script>
    <!-- jquery plugins here-->
    <script src="storage/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="storage/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="storage/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="storage/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="storage/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="storage/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="storage/js/owl.carousel.min.js"></script>
    <script src="storage/js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="storage/js/slick.min.js"></script>
    <script src="storage/js/jquery.counterup.min.js"></script>
    <script src="storage/js/waypoints.min.js"></script>
    <script src="storage/js/contact.js"></script>
    <script src="storage/js/jquery.ajaxchimp.min.js"></script>
    <script src="storage/js/jquery.form.js"></script>
    <script src="storage/js/jquery.validate.min.js"></script>
    <script src="storage/js/mail-script.js"></script>
    <!-- custom js -->
    <script src="storage/js/custom.js"></script>
</body>

</html>
