@extends('advertiser.app')

@section('content')
    <main>
        <div class="breadcrumb  p-0 mb-4 bg-white">
            <div class="container">
                <h4 class="mb-0">Chat</h4>
                <!-- <div class="d-flex align-items-end justify-content-between flex-wrap">
                  <nav aria-label="breadcrumb " class="breadcrumb-wrapper  mb-0 mr-2 ">
                    <ol class="breadcrumb mb-0 p-0 bg-white">
                      <li class="breadcrumb-item"><a href="my-ads.html" class="text-yellow text-decoration-none">My Ads</a></li>
                      <li class="breadcrumb-item"><a href="completed-ads.html" class="text-yellow text-decoration-none">Standing Requests</a></li>
                      <li class="breadcrumb-item  active" aria-current="page">Invites</li>
                    </ol>
                  </nav>
                  <a href="#" class="btn btn-primary px-4"><i class="fa fa-plus mr-1"></i> INVITE NEW</a>
                </div> -->
            </div>
        </div>
        <div class="container">
            <div class="info-wrapper message-wrapper">
                <div class="row">
                    <div class="col-lg-4 ">
                        <div class="message-contact-wrapper border-right border-top pt-3">
                            <div class="contact-search">
                                <img src="{{ frontAssets('advertiser/images/search-icon.png') }}"
                                    class="contact-search-icon" width="20">
                                <input type="text" name="message" placeholder="Search by name" class="form-control">
                                <div class="dropdown">
                                    <a class="position-relative card-dropdown d-inline-block nav-link dropdown-toggle font14 semi-bold "
                                        href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ frontAssets('advertiser/images/menu-icon.png') }}">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"
                                        style="">
                                        <a href="#" class="dropdown-item semi-bold font14 text-black text-uppercase">VIEW
                                            BLOCKED USER</a>

                                    </div>
                                </div>
                            </div>

                            <div class="contact-body border-top mt-3">
                                <div class="contact-info">
                                    <div class="contact-image">
                                        <a href="#"><img src="{{ frontAssets('advertiser/images/chat-3.png') }}"
                                                width="50"></a>
                                    </div>
                                    <a href="#" class="contact-chat-wrapper">
                                        <div>
                                            <div class="contact-chat-detail">
                                                <p class="chat-name">George Miller</p>
                                                <span class="chat-detail">06:30pm</span>

                                            </div>
                                            <div class="chat-info-wrapper">
                                                <p>Hello....How R u?</p>

                                            </div>

                                        </div>
                                    </a>

                                </div>
                                <div class="contact-info active  standing-active">
                                    <div class="contact-image">
                                        <a href="#"><img src="{{ frontAssets('advertiser/images/chat-1.png') }}"
                                                width="50"></a>
                                    </div>
                                    <a href="#" class="contact-chat-wrapper">
                                        <div>
                                            <div class="contact-chat-detail">
                                                <p class="chat-name">James Cook</p>
                                                <span class="chat-detail">06:30pm</span>
                                                <!-- <span class="chat-detail">06:30pm</span> -->

                                            </div>
                                            <div class="chat-info-wrapper">
                                                <p>I think we need to confirm first...</p>

                                                <!-- <span class="message-counter">2</span> -->
                                            </div>

                                        </div>
                                    </a>

                                </div>
                                <div class="contact-info progress-active">
                                    <div class="contact-image">
                                        <a href="#">
                                            <img src="{{ frontAssets('advertiser/images/chat-2.png') }}" width="50">

                                            <!-- <div class="contact-image-badge">
                                    <img src="images/icon-pending_badge.png" width="25">
                              </div>
           -->
                                        </a>
                                    </div>
                                    <a href="#" class="contact-chat-wrapper">
                                        <div>
                                            <div class="contact-chat-detail">
                                                <p class="chat-name">Ted Whistler</p>
                                                <!-- <span class="chat-detail">06:30pm</span> -->

                                            </div>
                                            <div class="chat-info-wrapper">
                                                <p>No Problem:)</p>
                                                <!-- <span class="message-counter">2</span> -->
                                            </div>

                                        </div>
                                    </a>

                                </div>
                                <div class="contact-info completed-active">
                                    <div class="contact-image">
                                        <a href="#">
                                            <img src="{{ frontAssets('advertiser/images/chat-1.png') }}" width="50">

                                            <!-- <div class="contact-image-badge">
                                    <img src="images/icon-pending_badge.png" width="25">
                              </div> -->
                                        </a>
                                    </div>
                                    <a href="#" class="contact-chat-wrapper">
                                        <div>
                                            <div class="contact-chat-detail">
                                                <p class="chat-name">Larry Page</p>
                                                <span class="chat-detail">06:30pm</span>

                                            </div>
                                            <div class="chat-info-wrapper">
                                                <p>Deborah Harmes Change the proposal </p>
                                                <!-- <span class="message-counter">2</span> -->
                                            </div>

                                        </div>
                                    </a>

                                </div>
                                <div class="contact-info saved-active">
                                    <div class="contact-image">
                                        <a href="#">
                                            <img src="{{ frontAssets('advertiser/images/chat-3.png') }}" width="50">

                                            <!-- <div class="contact-image-badge">
                                    <img src="images/icon-pending_badge.png" width="25">
                              </div> -->
                                        </a>
                                    </div>
                                    <a href="#" class="contact-chat-wrapper">
                                        <div>
                                            <div class="contact-chat-detail">
                                                <p class="chat-name">Mario Speedwagon</p>
                                                <span class="chat-detail">06:30pm</span>

                                            </div>
                                            <div class="chat-info-wrapper">
                                                <p>Deborah Harmes Change the proposal </p>

                                            </div>

                                        </div>
                                    </a>

                                </div>
                                <div class="contact-info">
                                    <div class="contact-image">
                                        <a href="#">
                                            <img src="{{ frontAssets('advertiser/images/chat-2.png') }}" width="50">

                                            <!-- <div class="contact-image-badge">
                                    <img src="images/icon-pending_badge.png" width="25">
                              </div> -->
                                        </a>
                                    </div>
                                    <a href="#" class="contact-chat-wrapper">
                                        <div>
                                            <div class="contact-chat-detail">
                                                <p class="chat-name">Mario Speedwagon</p>
                                                <span class="chat-detail">06:30pm</span>

                                            </div>
                                            <div class="chat-info-wrapper">
                                                <p>Deborah Harmes Change the proposal </p>

                                            </div>

                                        </div>
                                    </a>

                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8 ">
                        <div class="message-chat-detail border-top">

                            <div class="chat-box-wrapper">
                                <div class="box-header p-2 border-bottom d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-start ">
                                        <img src="{{ frontAssets('advertiser/images/user1.png') }}"
                                            class="img-fluid rounded-circle progress-circle" width="50px">
                                        <div class="mx-2 flex-auto">
                                            <h4 class="font-14 mb-0">George Miller</h4>
                                            <p class="font-12 mb-0"><img
                                                    src="{{ frontAssets('advertiser/images/location-icon.png') }}"
                                                    class="mr-1">
                                                Riyadh | Social Media Advertising</p>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <a class="position-relative card-dropdown d-inline-block nav-link dropdown-toggle font14 semi-bold "
                                            href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <img src="{{ frontAssets('advertiser/images/menu-icon.png') }}">
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"
                                            style="">
                                            <a href="#" class="dropdown-item semi-bold font14 text-black text-uppercase"
                                                data-target="#block-list-modal" data-toggle="modal">BLOCKED USER</a>
                                            <a href="#"
                                                class="dropdown-item semi-bold font14 text-black text-uppercase">CLEAR
                                                CHAT</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-cener justify-content-between border-bottom p-3 flex-wrap">
                                    <div class="d-flex align-items-center ">
                                        <img src="{{ frontAssets('advertiser/images/s1.png') }}" class="img-fluid "
                                            width="80px">
                                        <div class="mx-2 flex-auto">
                                            <h4 class="font-14 mb-0">Headline goes here lorem ipsum dummy text</h4>
                                            <p class="font-12 mb-0">Duration: 09 Mar, 2020 - 10 Mar, 2020</p>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-outline-primary border-radius-30 font14  text-uppercase">View
                                        Details</a>
                                </div>
                                <div class="box-body px-3">
                                    <div class="direct-chat-messages">
                                        <div class="direct-chat-days ">Today</div>
                                        <div class="direct-chat-msg">
                                            <div class="direct-chat-text ">
                                                <span>Hello! how are you? I am searching for a good advertiser
                                                    for my ads let me know if you are interested.</span> <span
                                                    class="text-white light font-12 text-right">10:00 AM</span>
                                            </div>
                                        </div>
                                        <div class="direct-chat-msg right">
                                            <div class="direct-chat-text ">
                                                <span>Yeah, Sure. I would be happy to work with you.</span> <span
                                                    class="text-white light font-12 text-right">10:00 AM</span>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="box-footer border-top border-bottom py-3">
                                    <form action="#" method="post" class="d-flex align-items-center">
                                        <a class=" btn-flat px-3"> <img class="attach"
                                                src="{{ frontAssets('advertiser/images/paperclip.png') }}"></a>
                                        <div class="input-group mr-3">
                                            <input type="text" name="message" placeholder="Type Here..."
                                                class="form-control border-radius-8">

                                        </div>

                                        <a class=" btn-flat"> <img class="send-msg "
                                                src="{{ frontAssets('advertiser/images/icon-send.png') }}"
                                                alt="send message" width="45"></a>

                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="web-help">
        <a href="{{route('adv.web-service')}}" class="position-relative d-inline-block text-decoration-none">
            <div class="d-flex align-items-center">
                <p class="mb-0 border-radius-8 web-tooltip">
                    How can I help you?
                </p>
                <img src="{{ frontAssets('advertiser/images/logo-stickey.png') }}" class="img-fluid">
            </div>
        </a>
    </div>
    <!--jQuery -->
    <!-- <script type="text/javascript" src="js/jquery.js"></script>      -->
    <!--jQuery and Bootstrap Bundle (includes Popper)-->
    <div class="modal fade" id="block-list-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header  pb-0">
                    <h2 class="font-24 flex-auto text-center mb-3 pl-4">Blocked Users</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="{{ frontAssets('advertiser/images/close-icon.png') }}">
                    </button>
                </div>
                <div class="modal-body pt--">
                    <div class="">

                        <div class="row align-items-center">

                            <div class="col-12 mb-3 mt-0">
                                <div
                                    class="border-bottom py-3 d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap">
                                    <div class="d-flex align-items-center ">
                                        <img src="{{ frontAssets('advertiser/images/user1.png') }}"
                                            class="img-fluid rounded-circle" width="50px">
                                        <div class="mx-2 flex-auto">
                                            <h4 class="font-14 mb-0">George Miller</h4>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-outline-primary border-radius-30 px-4 text-uppercase">unblock</a>
                                </div>
                                <div
                                    class="border-bottom py-3 d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap">
                                    <div class="d-flex align-items-center ">
                                        <img src="{{ frontAssets('advertiser/images/user1.png') }}"
                                            class="img-fluid rounded-circle" width="50px">
                                        <div class="mx-2 flex-auto">
                                            <h4 class="font-14 mb-0">George Miller</h4>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-outline-primary border-radius-30 px-4 text-uppercase">unblock</a>
                                </div>
                                <div
                                    class="border-bottom py-3 d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap">
                                    <div class="d-flex align-items-center ">
                                        <img src="{{ frontAssets('advertiser/images/user1.png') }}"
                                            class="img-fluid rounded-circle" width="50px">
                                        <div class="mx-2 flex-auto">
                                            <h4 class="font-14 mb-0">George Miller</h4>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-outline-primary border-radius-30 px-4 text-uppercase">unblock</a>
                                </div>
                                <div
                                    class="border-bottom py-3 d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap">
                                    <div class="d-flex align-items-center ">
                                        <img src="{{ frontAssets('advertiser/images/user1.png') }}"
                                            class="img-fluid rounded-circle" width="50px">
                                        <div class="mx-2 flex-auto">
                                            <h4 class="font-14 mb-0">George Miller</h4>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-outline-primary border-radius-30 px-4 text-uppercase">unblock</a>
                                </div>
                                <div
                                    class="border-bottom py-3 d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap">
                                    <div class="d-flex align-items-center ">
                                        <img src="{{ frontAssets('advertiser/images/user1.png') }}"
                                            class="img-fluid rounded-circle" width="50px">
                                        <div class="mx-2 flex-auto">
                                            <h4 class="font-14 mb-0">George Miller</h4>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-outline-primary border-radius-30 px-4 text-uppercase">unblock</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link href="{{ frontAssets('advertiser/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ frontAssets('advertiser/css/bootstrap-slider.min.css') }}" />
    <link href="{{ frontAssets('advertiser/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ frontAssets('advertiser/css/jalendar.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ frontAssets('advertiser/css/bootstrap-datepicker3.css') }}" type="text/css" />

@endpush
@push('js')
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="{{ frontAssets('advertiser/js/jalendar.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ frontAssets('advertiser/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ frontAssets('advertiser/js/bootstrap-slider.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.js"></script>
    <script src="{{ frontAssets('advertiser/select2/js/select2.min.js') }}"></script>
@endpush
@push('jsfun')

    <script type="text/javascript">
        $('#yourId').jalendar({
            color: '#577e9a',
            color2: '#57c8bf',
            lang: 'EN'
        });
        $(".calendar-icon").click(function() {
            $("#yourcal").toggleClass("d-none");
        });

    </script>
    <script>
        $(document).ready(function() {
            // Range Slider
            var slider = new Slider("#range", {
                min: 0,
                max: 100,
                value: [0, 50],
                tooltip_split: true,
                range: true,
                // tooltip: 'always'
            });
            var slider = new Slider("#range2", {
                min: 0,
                max: 150,
                value: [10, 300],
                tooltip_split: true,
                range: true,
                // tooltip: 'always'
            });
        });

        $(function() {
            $('.multiselect-ui').multiselect({
                includeSelectAllOption: true
            });
        });
        $('.select2').select2({
            theme: 'bootstrap4',
        });

        /*=============multi select==========*/

        $(".js-select2").select2({
            closeOnSelect: false,
            placeholder: "Placeholder",
            allowHtml: true,
            allowClear: true,
            tags: true // создает новые опции на лету
        });

        $('.icons_select2').select2({
            width: "100%",
            templateSelection: iformat,
            templateResult: iformat,
            allowHtml: true,
            placeholder: "Placeholder",
            dropdownParent: $('.select-icon'), //обавили класс
            allowClear: true,
            multiple: false
        });


        function iformat(icon, badge, ) {
            var originalOption = icon.element;
            var originalOptionBadge = $(originalOption).data('badge');

            return $('<span><i class="fa ' + $(originalOption).data('icon') + '"></i> ' + icon.text +
                '<span class="badge">' + originalOptionBadge + '</span></span>');
        }

    </script>
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

        $(".filter-box").click(function() {
            $(this).toggleClass("active");
            $(".filter-wrapper").toggleClass("d-none");
        });

    </script>

@endpush
