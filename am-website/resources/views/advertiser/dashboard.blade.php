@extends('advertiser.app')

@section('content')
    <main>
        <section class="overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ">
                        <div class="card-block mb-3">
                            <div class="row">
                                <div class="col-md-3 col-lg-3  mb-3">
                                    <a href="{{ route('adv.my-ads') }}" id="completes"
                                        class="d-block w-100 text-decoration-none">
                                        <div class="card p-0">
                                            <div class="card-body">
                                                <h2 class="text-purple font-30 mb-0">09</h2>
                                                <p class="mb-0 font-12 text-black">Completed</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3  mb-3">
                                    <a href="{{ route('adv.my-ads') }}" class="d-block w-100 text-decoration-none">
                                        <div class="card p-0">
                                            <div class="card-body">
                                                <h2 class="text-primary font-30 mb-0">10</h2>
                                                <p class="mb-0 font-12 text-black">In Progress</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3  mb-3">
                                    <a href="{{ route('adv.my-ads') }}" class="d-block w-100 text-decoration-none">
                                        <div class="card p-0">
                                            <div class="card-body">
                                                <h2 class="text-success font-30 mb-0">12</h2>
                                                <p class="mb-0 font-12 text-black">Invites</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3  mb-3">
                                    <a href="{{ route('adv.my-ads') }}" class="d-block w-100 text-decoration-none">
                                        <div class="card p-0">
                                            <div class="card-body">
                                                <h2 class="text-yellow font-30 mb-0">10</h2>
                                                <p class="mb-0 font-12 text-black">Upcoming</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3  mb-3">
                                    <a href="{{ route('adv.my-ads') }}"
                                        class="d-block w-100 text-decoration-none completed">
                                        <div class="card p-0">
                                            <div class="card-body">
                                                <h2 class="text-danger font-30 mb-0">06</h2>
                                                <p class="mb-0 font-12 text-black">Offers Sent</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3  mb-3">
                                    <a href="{{ route('adv.standing-contract') }}" class="d-block w-100 text-decoration-none">
                                        <div class="card p-0">
                                            <div class="card-body">
                                                <h2 class="text-purple font-30 mb-0">06</h2>
                                                <p class="mb-0 font-12 text-black">Standing Contract</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-block income-card">
                            <div class="mb-4 row">
                                <div class="col">
                                    <div class="card p-0 position-relative">
                                        <div class="card-body">
                                            <span class="font-16 medium">SAR</span>
                                            <h2 class="text-primary font-30 mb-0">1000</h2>
                                            <p class="text-black mb-0 font-12">Target income </p>
                                            <a href="#" class="edit-card-icon" data-target="#edit-amount-modal"
                                                data-toggle="modal"><img
                                                    src="{{ frontAssets('advertiser/images/icon-edit.png') }}"></a>
                                        </div>
                                    </div>
                                </div>
                                <div id="standing" class="col">
                                    <div class="card p-0">
                                        <div class="card-body">
                                            <span class="font-16 medium">SAR</span>
                                            <h2 class="text-black font-30 mb-0">10</h2>
                                            <p class="mb-0 font-12 text-black">Standing Cashflow</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="inprogress" class="col">
                                    <div class="card p-0">
                                        <div class="card-body">
                                            <span class="font-16 medium">SAR</span>
                                            <h2 class="text-orange font-30 mb-0">200</h2>
                                            <p class="mb-0 font-12 text-black">Income This Month</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="completed" class="col">
                                    <div class="card p-0">
                                        <div class="card-body">
                                            <span class="font-16 medium">SAR</span>
                                            <h2 class="text-warning font-30 mb-0">12</h2>
                                            <p class="mb-0 font-12 text-black">Avg. Monthly Income</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="saved" class="col">
                                    <div class="card p-0">
                                        <div class="card-body">
                                            <span class="font-16 medium">SAR</span>
                                            <h2 class="text-purple font-30 mb-0">06</h2>
                                            <p class="mb-0 font-12 text-black">Total income</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  <h3 class="title font-24 medium mb-3">Favorite Advertisers</h3> -->
                        <div class="row pb-4 ">
                            <div class="col-lg-12 mb-3">
                                <div class="card p-0 overflow-hidden p-3">
                                    <div class="d-flex align-self-start justify-content-between w-100 flex-wrap mb-3">
                                        <div>
                                            <h3 class=" font-16 mb-0">Total Revenue</h3>
                                            <h2 class="text-primary font-24 mb-0">SAR 2000</h2>
                                        </div>
                                        <div class="login-register">
                                            <div class="input-group-prepend">
                                                <select data-placeholder="Choose one thing" data-allow-clear="1">
                                                    <option>This Month</option>
                                                    <option>jan</option>
                                                    <option>feb</option>
                                                    <option>mar</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <canvas id="myChart" width="400" height="250"></canvas>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-4">
                        <h3 class="title font-24 medium mb-3">Ads Schedule</h3>
                        <div class="card p-0 border-radius-20 mb-4">
                            <a class=" d-block d-lg-none calendar-icon btn btn-primary">
                                <i class=" fa fa-calendar"></i> Select Date
                            </a>
                            <div id="yourcal" class="d-none d-lg-block">
                                <div id="yourId" class="jalendar ">
                                    <div class="added-event" data-type="holiday" data-date="19-11-2015"
                                        data-link="http://google.com" data-title="WWDC 13 on San Francisco, LA"></div>

                                    <div class="added-event" data-type="task" data-date="19-11-2015"
                                        data-title="Hazal ve Bora Nikah Töreni"></div>

                                    <div class="added-event" data-date="10-12-2015"
                                        data-title="Tarkan İstanbul Concert on Harbiye Açık Hava Tiyatrosu"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-activity mb-4">
                            <div class="card p-3">
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <a href="{{ route('adv.my-ads') }}"
                                        class="font-16 mb-0 text-black text-deccoration-none">Advertisement 1</a>
                                    <span
                                        class="badge bg-light-warning text-warning regular font-12 position-relative px-2 py-2">Inprogress</span>
                                </div>
                                <p class="font-14 text-black"><img
                                        src="{{ frontAssets('advertiser/images/calendar.png') }}" class="img-fluid mr-1"
                                        width="18px"> 10 Sep, 2020 - 12 Sep, 2020</p>
                                <div class="d-flex">
                                    <a href="#" class="mr-2"><img
                                            src="{{ frontAssets('advertiser/images/twitter-icon.png') }}"></a>
                                    <a href="#" class="mr-2"><img
                                            src="{{ frontAssets('advertiser/images/facebook-icon.png') }}"></a>
                                    <a href="#" class="mr-2"><img
                                            src="{{ frontAssets('advertiser/images/instagram-icon.png') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-activity mb-4">
                            <div class="card p-3">
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <a href="{{ route('adv.my-ads') }}"
                                        class="font-16 mb-0 text-black text-deccoration-none">Advertisement 2</a>
                                    <span
                                        class="badge bg-light-danger text-danger regular font-12 position-relative px-2 py-2">Completed</span>
                                </div>
                                <p class="font-14 text-black"><img
                                        src="{{ frontAssets('advertiser/images/calendar.png') }}" class="img-fluid mr-1"
                                        width="18px"> 10 Sep, 2020 - 12 Sep, 2020</p>
                                <div class="d-flex">
                                    <a href="#" class="mr-2"><img
                                            src="{{ frontAssets('advertiser/images/twitter-icon.png') }}"></a>
                                    <a href="#" class="mr-2"><img
                                            src="{{ frontAssets('advertiser/images/facebook-icon.png') }}"></a>
                                    <a href="#" class="mr-2"><img
                                            src="{{ frontAssets('advertiser/images/instagram-icon.png') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-activity mb-4">
                            <div class="card p-3">
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <a href="{{ route('adv.my-ads') }}"
                                        class="font-16 mb-0 text-black text-deccoration-none">Advertisement 3</a>
                                    <span
                                        class="badge bg-light-success text-success regular font-12 position-relative px-2 py-2">Upcoming</span>
                                </div>
                                <p class="font-14 text-black"><img
                                        src="{{ frontAssets('advertiser/images/calendar.png') }}" class="img-fluid mr-1"
                                        width="18px"> 10 Sep, 2020 - 12 Sep, 2020</p>
                                <div class="d-flex">
                                    <a href="#" class="mr-2"><img
                                            src="{{ frontAssets('advertiser/images/twitter-icon.png') }}"></a>
                                    <a href="#" class="mr-2"><img
                                            src="{{ frontAssets('advertiser/images/facebook-icon.png') }}"></a>
                                    <a href="#" class="mr-2"><img
                                            src="{{ frontAssets('advertiser/images/instagram-icon.png') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-activity mb-4">
                            <div class="card p-3">
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <a href="{{ route('adv.my-ads') }}"
                                        class="font-16 mb-0 text-black text-deccoration-none">Advertisement 3</a>
                                    <span
                                        class="badge bg-light-secondary text-black regular font-12 position-relative px-2 py-2">Passed
                                        Adverts</span>
                                </div>
                                <p class="font-14 text-black"><img
                                        src="{{ frontAssets('advertiser/images/calendar.png') }}" class="img-fluid mr-1"
                                        width="18px"> 10 Sep, 2020 - 12 Sep, 2020</p>
                                <div class="d-flex">
                                    <a href="#" class="mr-2"><img
                                            src="{{ frontAssets('advertiser/images/twitter-icon.png') }}"></a>
                                    <a href="#" class="mr-2"><img
                                            src="{{ frontAssets('advertiser/images/facebook-icon.png') }}"></a>
                                    <a href="#" class="mr-2"><img
                                            src="{{ frontAssets('advertiser/images/instagram-icon.png') }}"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    <div class="modal fade" id="edit-amount-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header  pb-0">
                    <h2 class="font-24 flex-auto text-center mb-3 pl-4">Monthly Target</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="{{ frontAssets('advertiser/images/close-icon.png') }}">
                    </button>
                </div>
                <div class="modal-body login-register">
                    <div class="px-4">
                        <div class="row align-items-center login-register">
                            <div class="col-12 mb-1 mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class=" pl-1 mb-0 text-black">Monthly Target</p>
                                    <p class=" pl-1 mb-0 text-black">Current: SAR 10,000</p>
                                </div>
                            </div>
                            <div class="col-12 mb-3 clear-both">

                                <div class="form-group relative">
                                    <p class="icon pl-1 text-black">SAR</p>
                                    <input class="form-control pl-5" type="text" placeholder="Enter Your Offer Amount"
                                        name="name">
                                </div>
                                <div class="form-group text-center mt-5">
                                    <a href="#" data-dismiss="modal"
                                        class=" btn btn-purple rounded-pill px-4 verify-otp-btn px-4"
                                        data-target="#submit-contract-modal" data-toggle="modal">SAVE</a>
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
    <link href="{{ frontAssets('advertiser/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ frontAssets('advertiser/select2/css/select2-bootstrap4.css') }}" rel="stylesheet" />
    <link href="{{ frontAssets('advertiser/product-tour/product-tour.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ frontAssets('advertiser/css/bootstrap-tour.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ frontAssets('advertiser/css/jalendar.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ frontAssets('advertiser/css/bootstrap-datepicker3.css') }}" type="text/css" />



@endpush
@push('js')
    <script src="{{ frontAssets('advertiser/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ frontAssets('advertiser/js/jalendar.min.js') }}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="{{ frontAssets('advertiser/js/bootstrap.min.js') }}"></script>
    <script src="{{ frontAssets('advertiser/js/popper.min.js') }}"></script>
    <script src="{{ frontAssets('advertiser/js/bootstrap-popover.js') }}"></script>
    <script src="{{ frontAssets('advertiser/js/bootstrap-tooltip.js') }}"></script>
    <script src="{{ frontAssets('advertiser/js/bootstrap.bundle.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
    <script src="{{ frontAssets('advertiser/select2/js/select2.min.js') }}"></script>
    <script src="{{ frontAssets('advertiser/js/custom.js') }}"></script>


@endpush
@push('jsfun')
    <script type="text/javascript">
        /*
        -------------------------------
            : Custom - Tour js :
        -------------------------------
        */
        "use strict";
        $(document).ready(function() {
            var tours = new ProductTour({
                overlay: !0,
                onStart: function() {

                },
                onChanged: function(tours) {

                },
                onClosed: function(tours) {

                }
            });
            tours.steps([{
                element: "#completes",
                title: "Registration Form",
                content: "Easily Customisable User Registration Forms with which you can create flawless user system.",
                // image: "./assets/images/logo.svg",
                position: "bottom"
            }, {
                element: "#standing",
                title: "Image Card with Content",
                content: "This type of cards have multipurpose usage like Blog, Product Listing, Testimonials etc.",
                // image: "./assets/images/logo.svg",
                position: "top"
            }, {
                element: "#inprogress",
                title: "File Upload",
                content: "Easy to use Drag and Drop function which makes file uploading very easy.",
                // image: "./assets/images/logo.svg",
                position: "top"
            }]), tours.startTour()
        });

        /*  $(function() {

               var tour = new Tour({

                steps: [
                {
                  element: "#completes",
                  title: "s",
                  placement: "bottom",
                  content: "<p>This is the Deployment Manager Dashboard.</p><p>It shows you which versions of your software are deployed to your different environments.</p>",
                  duration:5000
                },

                {
                  element: "#standing",
                  title: "1st Panel",
                  content: "This is the first panel",
                  placement: "bottom"
                },{
                  element: "#inprogress",
                  title: "1st Panel",
                  content: "This is the first panel",
                  placement: "bottom"
                },{
                  element: "#completed",
                  title: "1st Panel",
                  content: "This is the first panel",
                  placement: "bottom"
                },
                {
                  element: "#saved",
                  title: "1st Panel",
                  content: "This is the first panel",
                  placement: "bottom"
                },
                ],
                backdrop: true,
                storage: false
              });

              tour.init();
              tour.start(true);
            });
        */

    </script>
    <script type="text/javascript">
        $(function() {
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov',
                        'Dec'
                    ],
                    datasets: [{
                        label: '# of Votes',
                        barPercentage: 20,
                        barThickness: 20,
                        maxBarThickness: 20,
                        minBarLength: 20,
                        data: [12, 19, 3, 5, 2, 3, 12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            '#6D08DF',
                            '#6D08DF',
                            '#6D08DF',
                            '#6D08DF',
                            '#6D08DF',
                            '#6D08DF',
                            '#6D08DF',
                            '#6D08DF',
                            '#6D08DF',
                            '#6D08DF',
                            '#6D08DF',
                            '#6D08DF'
                        ],
                        borderColor: [
                            '#6D08DF',
                            '#6D08DF',
                            '#6D08DF',
                            '#6D08DF',
                            '#6D08DF',
                            '#6D08DF',
                            '#6D08DF',
                            '#6D08DF',
                            '#6D08DF',
                            '#6D08DF',
                            '#6D08DF',
                            '#6D08DF'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });

    </script>
    <script type="text/javascript">
        $('#yourId').jalendar({
            color: '#577e9a',
            color2: '#57c8bf',
            lang: 'EN'
        });

        $(".calendar-icon").click(function() {
            $("#yourcal").toggleClass("d-none");
        });

        $('select').select2({
            theme: 'bootstrap4',
        });

    </script>
@endpush
