<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>

    <!-- favicon.ico -->
    <link rel="icon" href="{{ asset('assets/webp/untitled-4.1.1.ico') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->

    <meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="mailru-domain" content="TQWgY5n7MtbA2m5L" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/rs6.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<style>
    .custom-file-label::after {
        content: "@lang('transAdmin.choose-file')";
    }
    .custom-file-input:lang(en) ~ .custom-file-label::after {
        content: "@lang('transAdmin.choose-file')";
    }
</style>
<body>
{{--<div id="preloader"></div>--}}
<div class="up">
    <a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
</div>

@include('front.layout.nav')



@yield('content')

@include('front.layout.footer')


<!-- For Js Library -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.cssslider.min.js"></script>
<script src="assets/js/rbtools.min.js"></script>
<script src="assets/js/rs6.min.js"></script>
<script src="assets/js/script.js"></script>

</body>
</html>