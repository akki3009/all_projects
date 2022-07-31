<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ frontAssets('beneficiary/css/bootstrap.min.css') }}">
    <!--style-->
    <link rel="stylesheet" href="{{ frontAssets('beneficiary/css/style.css') }}">
    <!--Animate-->
    <link rel="stylesheet" href="{{ frontAssets('beneficiary/css/animate.min.css') }}">
    <!--font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <!--favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ frontAssets('beneficiary/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ frontAssets('beneficiary/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ frontAssets('beneficiary/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ frontAssets('beneficiary/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114"
        href="{{ frontAssets('beneficiary/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120"
        href="{{ frontAssets('beneficiary/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144"
        href="{{ frontAssets('beneficiary/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152"
        href="{{ frontAssets('beneficiary/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ frontAssets('beneficiary/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ frontAssets('beneficiary/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ frontAssets('beneficiary/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96"
        href="{{ frontAssets('beneficiary/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ frontAssets('beneficiary/favicon/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ frontAssets('beneficiary/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ frontAssets('beneficiary/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    @stack('css')
    <link rel="stylesheet" href="{{ frontAssets('beneficiary/css/style.css') }}">
    @stack('style')
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    @include('beneficiary.includes.header')
    @yield('content')
    @include('beneficiary.includes.footer')

    <!--jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--jQuery and Bootstrap Bundle (includes Popper)-->
    <script src="{{ frontAssets('beneficiary/js/bootstrap.bundle.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ frontAssets('beneficiary/js/wow.min.js') }}"></script>
    <script src="{{ frontAssets('custom.js') }}"></script>
    <script>
        new WOW().init();

    </script>
    @stack('js')
    <!-- custom js -->
    <script src="{{ frontAssets('beneficiary/js/custom.js') }}"></script>
    @stack('jsfun')
</body>
</html>
