@extends('beneficiary.app')

@section('content')
    <main>
        <section class="login-register">
            <div class="container-xl">
                <h1 class="title mb-5">Sign up</h1>
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active semi-bold" id="Standing-Requests-tab" data-toggle="pill"
                            href="#Standing-Requests" role="tab" aria-controls="Standing-Requests" aria-selected="true">I am
                            a Beneficiary</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link semi-bold" id="advertiser-tab" data-toggle="pill" href="#advertiser" role="tab"
                            aria-controls="advertiser" aria-selected="false">I am an advertiser</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="Standing-Requests" role="tabpanel"
                        aria-labelledby="Standing-Requests-tab"> <span class="text-gray font-12 mb-3">
                            <div class="row justify-content-center mt-4 pt-3">
                                <div class="col-md-4 col-xl-5">
                                    <form action="" method="post" id="signupform">
                                        <input type="hidden" id="beneficiary" name="v_type" value="Beneficiary">
                                        <div class="form-group relative">
                                            <i class="icon user-icon"></i>
                                            <input class="form-control" type="text"
                                                placeholder="{{ trans('labels.v_name') }}" name="v_name" required>
                                        </div>
                                        <div class="form-group relative">
                                            <i class="icon mail-icon"></i>
                                            <input class="form-control" type="email"
                                                placeholder="{{ trans('labels.v_email') }}" name="v_email" required>
                                        </div>
                                        <div class="form-group relative">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="icon phone-icon relative"></i></span>
                                                </div>
                                                <div class="input-group-prepend">
                                                    <select data-placeholder="Choose one thing" data-allow-clear="1"
                                                        name="v_countrycode">
                                                        <option>+966</option>
                                                        <option>+1</option>
                                                        <option>+2</option>
                                                        <option>+3</option>
                                                    </select>
                                                </div>
                                                <input class="form-control pl-3" type="text"
                                                    placeholder="{{ trans('labels.v_number') }}" name="v_number" required
                                                    data-parsley-errors-container="#err-anumber">
                                            </div>
                                            <div id="err-anumber" class="error-p"></div>
                                        </div>
                                        <!-- <div class="form-group">
                                                               <label>Register as</label>
                                                               <div class="clear"></div>
                                                               <div class="custom-control custom-radio custom-control-inline">
                                                                 <input type="radio" name="types" checked="checked" value="1" class="custom-control-input" id="customRadio11"/>

                                                                 <label class="custom-control-label" for="customRadio11">Individual</label>
                                                              </div>
                                                              <div class="custom-control custom-radio custom-control-inline">
                                                                 <input type="radio" name="types" value="2"  class="custom-control-input" id="customRadio22" />

                                                                 <label class="custom-control-label" for="customRadio22">Company</label>
                                                              </div>
                                                           </div> -->
                                        <!-- <div class="form-group relative desc" id="types2" style="display: none;">
                                                                  <i class="icon building-icon"></i>
                                                                  <input class="form-control" type="text" placeholder="Company Name" name="name">
                                                               </div> -->
                                        <div class="form-group relative" id="show_hide_password_1">
                                            <a href="#"><img src="{{ frontAssets('beneficiary/images/eye.svg') }}"
                                                    width="15px" /></a>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text border-right-0"><i
                                                            class="icon lock-icon relative"></i></span>
                                                </div>
                                                <input class="form-control pl-2 border-left-0" type="password"
                                                    placeholder="{{ trans('labels.v_password') }}" name="password"
                                                    id="password" required data-parsley-errors-container="#err-apassword">
                                            </div>
                                            <div id="err-apassword" class="error-p"></div>
                                        </div>
                                        <div class="form-group relative" id="show_hide_password_2">
                                            <a href="#"><img src="{{ frontAssets('beneficiary/images/eye.svg') }}"
                                                    width="15px" /></a>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text border-right-0"><i
                                                            class="icon lock-icon relative"></i></span>
                                                </div>
                                                <input class="form-control pl-2 border-left-0" type="password"
                                                    placeholder="{{ trans('labels.v_confirm_password') }}"
                                                    name="password_confirmation" required
                                                    data-parsley-errors-container="#err-password"
                                                    data-parsley-equalto="#password">
                                            </div>
                                            <div id="err-password" class="error-p"></div>
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="customCheck"
                                                    name="example1">
                                                <label class="custom-control-label font-14 text-black"
                                                    for="customCheck">Agree to Terms & Conditions and Privacy Policy</label>
                                            </div>
                                        </div>
                                        <div class="form-group pt-3">
                                            <button type="submit" class="btn btn-purple rounded-pill btn-block"
                                                onclick="signup()">Sign up</button>
                                            {{-- <a href="{{ route('otp-verify') }}" class="btn btn-purple rounded-pill btn-block" >Sign up</a> --}}
                                        </div>
                                        <div class="form-group text-right ">
                                            <p class="text-center pt-3 font-14">Already have an account? <a
                                                    href="{{ route('login') }}" class="link">Login</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="advertiser" role="tabpanel" aria-labelledby="advertiser-tab">
                        <div class="row justify-content-center mt-4 pt-3">
                            <div class="col-md-4 col-xl-5">
                                <form action="" method="post" id="adsignupform">
                                    <input type="hidden" id="advertisery" name="v_type" value="Advertiser">
                                    <div class="form-group relative">
                                        <i class="icon user-icon"></i>
                                        <input class="form-control" type="text" placeholder="{{ trans('labels.v_name') }}"
                                            name="name" required>
                                    </div>
                                    <div class="form-group relative">
                                        <i class="icon mail-icon"></i>
                                        <input class="form-control" type="text" placeholder="{{ trans('labels.v_email') }}"
                                            name="email" required>
                                    </div>
                                    <div class="form-group relative">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="icon phone-icon relative"></i></span>
                                            </div>
                                            <div class="input-group-prepend">
                                                <select data-placeholder="Choose one thing" data-allow-clear="1"
                                                    name="countrycode">
                                                    <option>+966</option>
                                                    <option>+1</option>
                                                    <option>+2</option>
                                                    <option>+3</option>
                                                </select>
                                            </div>
                                            <input class="form-control pl-3" type="text"
                                                placeholder="{{ trans('labels.v_number') }}" name="number" required
                                                data-parsley-errors-container="#err-number">
                                        </div>
                                        <div id="err-number" class="error-p"></div>
                                    </div>
                                    <!-- <div class="form-group">
                                                               <label>Register as</label>
                                                               <div class="clear"></div>
                                                               <div class="custom-control custom-radio custom-control-inline">
                                                                 <input type="radio" name="types" checked="checked" value="1" class="custom-control-input" id="customRadio1"/>

                                                                 <label class="custom-control-label" for="customRadio1">Individual</label>
                                                              </div>
                                                              <div class="custom-control custom-radio custom-control-inline">
                                                                 <input type="radio" name="types" value="2"  class="custom-control-input" id="customRadio2" />

                                                                 <label class="custom-control-label" for="customRadio2">Company</label>
                                                              </div>
                                                           </div>
                                                           <div class="form-group relative desc" id="types2" style="display: none;">
                                                             <i class="icon building-icon"></i>
                                                             <input class="form-control" type="text" placeholder="Company Name" name="name">
                                                          </div> -->
                                    <div class="form-group relative" id="show_hide_password_1">
                                        <a href="#"><img src="{{ frontAssets('beneficiary/images/eye.svg') }}"
                                                width="15px" /></a>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text border-right-0"><i
                                                        class="icon lock-icon relative"></i></span>
                                            </div>
                                            <input class="form-control pl-2 border-left-0" type="password"
                                                placeholder="{{ trans('labels.v_password') }}" name="pass" id="pass"
                                                required data-parsley-errors-container="#err-advpassword">
                                        </div>
                                        <div id="err-advpassword" class="error-p"></div>
                                    </div>
                                    <div class="form-group relative" id="show_hide_password_2">
                                        <a href="#"><img src="{{ frontAssets('beneficiary/images/eye.svg') }}"
                                                width="15px" /></a>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text border-right-0"><i
                                                        class="icon lock-icon relative"></i></span>
                                            </div>
                                            <input class="form-control pl-2 border-left-0" type="password"
                                                placeholder="{{ trans('labels.v_confirm_password') }}"
                                                name="pass_confirmation" required
                                                data-parsley-errors-container="#err-advcpassword"
                                                data-parsley-equalto="#pass">
                                        </div>
                                        <div id="err-advcpassword" class="error-p"></div>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1"
                                                name="example1">
                                            <label class="custom-control-label" for="customCheck">Agree to Terms &
                                                Conditions and Privacy Policy</label>
                                        </div>
                                    </div>
                                    <div class="form-group pt-3">
                                        <button type="submit" class="btn btn-purple rounded-pill btn-block"
                                            onclick="advSignup()">Sign up</button>
                                        {{-- <a href="{{ route('otp-verify') }}"
                                            class="btn btn-purple rounded-pill btn-block">Sign up</a> --}}
                                    </div>
                                    <div class="form-group text-right">
                                        <p class="text-center pt-3">Already have an account? <a
                                                href="{{ route('login') }}" class="link">Login</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </section>
    </main>
    <!--/main-->
@endsection
@push('css')
    <link href="{{ frontAssets('beneficiary/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ frontAssets('beneficiary/select2/css/select2-bootstrap4.css') }}" rel="stylesheet">\
    <link rel="stylesheet" href="{{ frontAssets('beneficiary/parsley/parsley.css') }}">

@endpush
@push('js')
    <script src="{{ frontAssets('beneficiary/select2/js/select2.min.js') }}"></script>
    <script src="{{ frontAssets('beneficiary/parsley/parsley.min.js') }}"></script>
    <script src="{{ frontAssets('custom.js') }}"></script>
@endpush
@push('jsfun')
    <script>
        $('select').select2({
            theme: 'bootstrap4',
        });

        var register_route = "{{ route('front.register') }}";

    </script>
    <script>
        jQuery(document).ready(function() {
            jQuery('#adsignupform').parsley();
        });

    </script>
    <script>
        jQuery(document).ready(function() {
            jQuery('#signupform').parsley();
        });

    </script>

@endpush
