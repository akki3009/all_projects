@extends('admin.layouts.auth')
@section('title', 'Login')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="{{url('')}}"><b>{{siteName()}}</b> Admin</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login here</p>
      <form id="loginfrm" action="{{route('admin.submit.login')}}" method="post">
        @csrf
        <input type="hidden" name="backurl" value="{{request('backurl')}}" />
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email" required data-parsley-errors-container="#err-email" />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <div id="err-email" class="error-p" ></div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required data-parsley-errors-container="#err-password" />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <div id="err-password" class="error-p" ></div>
        </div>
        <div class="row">
          <div class="col-12 mb-3">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember_me" value="1" >
              <label for="remember">Remember Me</label>
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
        </div>
        
        <?php if($msg = session('error')){?>
        <div class="row">
          <div class="col-12 mt-3">
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>{!! $msg !!}
            </div>
          </div>
        </div>
        <?php } ?>
      </form>
    </div>
  </div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="{{adminAssets('plugins/parsley/parsley.css')}}">
@endpush
@push('js')
<script src="{{adminAssets('plugins/parsley/parsley.min.js')}}"></script>
@endpush
@push('jsfun')
<script>
  jQuery(document).ready(function(){
    jQuery('#loginfrm').parsley();
  });
</script>
@endpush