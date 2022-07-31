<!DOCTYPE html>
<html>
<html lang="{{ app()->getLocale() }}">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{siteName()}} | @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{adminAssets('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{adminAssets('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{adminAssets('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  @stack('css')
  @stack('style')
</head>
<body class="hold-transition login-page">
  @yield('content')
<script src="{{adminAssets('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{adminAssets('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{adminAssets('dist/js/adminlte.min.js')}}"></script>
@stack('js')
@stack('jsfun')
</body>
</html>