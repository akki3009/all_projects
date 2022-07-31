@extends('advertiser.app')

@section('content')
    <main>
        <section class="login-register">
            <div class="container-xl">
                <h1 class="title mb-5">My Profile</h1>

                <div class="row justify-content-center">
                    <div class="col-md-4 col-xl-5">

                        <form action="" method="post">
                            @csrf
                            $currentPage = "<script>
                                document.write(localStorage.getItem('access_token'));

                            </script>";
                            <div class="form-group profile-upload">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview"
                                            style="background-image: url(http://i.pravatar.cc/500?img=7);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group relative">
                                <i class="icon user-icon"></i>
                                <input class="form-control" type="text" placeholder="Full Name" name="v_name">
                            </div>
                            <div class="form-group relative">
                                <i class="icon mail-icon"></i>
                                <input class="form-control" type="text" placeholder="Email" name="v_email">
                            </div>
                            <div class="form-group relative">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon phone-icon relative"></i></span>
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
                                    <input class="form-control pl-3" type="text" placeholder="Contact Number"
                                        name="v_number" required data-parsley-errors-container="#err-anumber">
                                </div>
                                <div id="err-anumber" class="error-p"></div>
                            </div>

                            {{-- <div class="form-group">
                                <label>Register as</label>
                                <div class="clear"></div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="types" checked="checked" value="1"
                                        class="custom-control-input" id="customRadio1" />

                                    <label class="custom-control-label" for="customRadio1">Individual</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="types" value="2" class="custom-control-input"
                                        id="customRadio2" />

                                    <label class="custom-control-label" for="customRadio2">Company</label>
                                </div>
                            </div>
                            <div class="form-group relative desc" id="types2" style="display: none;">
                                <i class="icon building-icon"></i>
                                <input class="form-control" type="text" placeholder="Company Name" name="name">
                            </div> --}}
                            <div class="form-group relative" id="show_hide_password_1">
                                <a href="#"><img src="{{ frontAssets('advertiser/images/eye.svg') }}" width="15px" /></a>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text border-right-0"><i
                                                class="icon lock-icon relative"></i></span>
                                    </div>
                                    <input class="form-control pl-2 border-left-0" type="password"
                                        placeholder="Created Password" name="password" id="password" required
                                        data-parsley-errors-container="#err-apassword">
                                </div>
                                <div id="err-apassword" class="error-p"></div>
                            </div>
                            <div class="form-group relative" id="show_hide_password_2">
                                <a href="#"><img src="{{ frontAssets('advertiser/images/eye.svg') }}" width="15px" /></a>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text border-right-0"><i
                                                class="icon lock-icon relative"></i></span>
                                    </div>
                                    <input class="form-control pl-2 border-left-0" type="password"
                                        placeholder="Confirm Password" name="password_confirmation" required
                                        data-parsley-errors-container="#err-password" data-parsley-equalto="#password">
                                </div>
                                <div id="err-password" class="error-p"></div>
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                    <label class="custom-control-label" for="customCheck">Agree to Terms & Conditions and
                                        Privacy Policy</label>
                                </div>
                            </div>
                            <div class="form-group pt-3">
                                <a href="{{ route('adv.otp-verify') }}" class="btn btn-purple rounded-pill btn-block">Sign
                                    up</a>
                            </div>
                            <div class="form-group text-right">
                                <p class="text-center pt-3">Already have an account? <a href="{{ route('adv.login') }}"
                                        class="link">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('css')

    <link href="{{ frontAssets('advertiser/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ frontAssets('advertiser/select2/css/select2-bootstrap4.css') }}" rel="stylesheet">
@endpush
@push('js')
    <script src="{{ frontAssets('advertiser/select2/js/select2.min.js') }}"></script>
    <script>
        $('select').select2({
            theme: 'bootstrap4',
        });

    </script>
@endpush
@push('jsfun')
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });

    </script>
@endpush
