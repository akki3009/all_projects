<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{siteName()}} | @yield('title')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{adminAssets('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{adminAssets('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{adminAssets('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{adminAssets('plugins/select2/css/select2.min.css')}}">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{{adminAssets('plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{adminAssets('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{adminAssets('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{adminAssets('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{adminAssets('plugins/summernote/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{adminAssets('plugins/parsley/parsley.css')}}">
  
  <!-- Toastr -->
  <link rel="stylesheet" href="{{adminAssets('plugins/toastr/toastr.min.css')}}">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{adminAssets('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  
  <!-- Google Font: Source Sans Pro -->
  <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  @stack('css')
  <link rel="stylesheet" href="{{adminAssets('css/custom.css')}}">
  @stack('style')
</head>
<body class="hold-transition sidebar-mini layout-fixed text-sm">
  <div class="glob_loader">
    <i class="fas fa-2x fa-sync-alt fa-spin"></i><span class="ml-3" >Loading ...</span>
  </div>
              
<div class="wrapper">
  @include('admin.includes.header')
  @include('admin.includes.sidebar-left')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">@yield('title')</h1>
          </div><!-- /.col -->
          <?php /*<div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->*/ ?>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </section>
  </div>
  
  @include('admin.includes.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script>
	var msgSucc = "{{ session('success') ?: '' }}";
	var msgErr = "{{ session('error') ?: '' }}";
</script>
<!-- jQuery -->
<script src="{{adminAssets('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{adminAssets('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{adminAssets('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{adminAssets('plugins/moment/moment.min.js')}}"></script>
<script src="{{adminAssets('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{adminAssets('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{adminAssets('plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
<!-- Summernote -->
<script src="{{adminAssets('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{adminAssets('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{adminAssets('plugins/select2/js/select2.full.min.js')}}"></script>

<script src="{{adminAssets('plugins/parsley/parsley.min.js')}}"></script>
<script src="{{adminAssets('plugins/toastr/toastr.min.js')}}"></script>
<!-- SweetAlert2 -->
<script src="{{adminAssets('plugins/sweetalert2/sweetalert2.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{adminAssets('dist/js/adminlte.js')}}"></script>
@stack('js')
<script src="{{adminAssets('js/custom.js')}}"></script>
@stack('jsfun')
</body>
</html>