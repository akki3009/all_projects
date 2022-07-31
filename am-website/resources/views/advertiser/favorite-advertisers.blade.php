@extends('advertiser.app')

@section('content')
    <main>
        <div class="breadcrumb  p-0 mb-4 bg-white">
            <div class="container">
                <h4 class="mb-0">Favorite</h4>
                <!-- <nav aria-label="breadcrumb " class="breadcrumb-wrapper  mb-0 mr-2 ">
                      <ol class="breadcrumb mb-0 p-0 bg-white">
                        <li class="breadcrumb-item "><a href="./browse.html" class="text-yellow text-decoration-none">Browse Ads</a></li>
                        <li class="breadcrumb-item  active" aria-current="page">Favorite Ads</li>
                      </ol>
                    </nav> -->
            </div>
        </div>
        <div class="container">
            <!-- MultiStep Form -->
            <div class="row">

                <div class="col-md-12 mb-4">
                    <div class="my-ads-wrapper tabs-wrapper">
                        <ul class="nav nav-pills mb-3 border-bottom" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active semi-bold " id="Standing-Requests-tab" data-toggle="pill"
                                    href="#Standing-Requests" role="tab" aria-controls="Standing-Requests"
                                    aria-selected="true">Invites | 09</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link semi-bold" id="Progress-tab" data-toggle="pill" href="#Progress"
                                    role="tab" aria-controls="Progress" aria-selected="false">Ads | 10</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link semi-bold" id="Completed-tab" data-toggle="pill" href="#Completed"
                                    role="tab" aria-controls="Completed" aria-selected="false">Beneficiaries | 02</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="Standing-Requests" role="tabpanel"
                                aria-labelledby="Standing-Requests-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card p-0 overflow-hidden mb-3">
                                            <div class="card-header p-3 bg-white ">
                                                <div class="d-flex align-items-start justify-content-between ">
                                                    <div class="mr-2">

                                                        <p class="font-16 medium text-black mb-0">Headline goes here lorem
                                                            ipsum dummy text</p>
                                                    </div>
                                                    <div class=" d-flex align-items-center ">
                                                        <a class="position-relative d-inline-block mr-3" href="#">
                                                            <img
                                                                src="{{ frontAssets('advertiser/images/chat-icon.png') }}">
                                                            <span class="card-badge bg-purple">3</span>
                                                        </a>
                                                        <div class="product-wishlist active">
                                                            <i class="fa fa-heart"></i>
                                                            <i class="fa fa-heart-o "></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div
                                                            class="d-flex align-items-start justify-content-between flex-wrap">
                                                            <div class="d-flex align-items-start ">
                                                                <img src="{{ frontAssets('advertiser/images/user1.png') }}"
                                                                    class="img-fluid rounded-circle" width="50px">
                                                                <div class="mx-2 flex-auto">
                                                                    <h4 class="font-14 mb-0">George Miller</h4>
                                                                    <p class="font-12 mb-0"> Riyadh </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-end justify-content-between">
                                                            <div class="mr-2">
                                                                <p class="font-14 text-black mb-0 mt-2">Headline goes here
                                                                </p>
                                                                <p class="font-14 text-black mb-1">9 Mar, 2020 - 10:00AM</p>
                                                                <p class="font-14 text-black mb-0 medium">SAR 110 - 200</p>
                                                            </div>
                                                            <div>
                                                                <a href="#"
                                                                    class=" btn btn-purple rounded-pill px-4 verify-otp-btn px-4 mr-2">SEND
                                                                    OFFER</a>
                                                                <a href="#"
                                                                    class="btn btn-outline-primary border-radius-30 font14  text-uppercase px-4">REJECT</a>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="card-footer bg-white p-0">
                                                <div class="d-flex align-items-center justify-content-between p-3">
                                                    <div class="text-center d-flex align-items-start ">
                                                        <span class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/facebook-icon.png') }}"
                                                                class="img-fluid">
                                                        </span>
                                                        <span class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/twitter-icon.png') }}"
                                                                class="img-fluid">
                                                        </span>
                                                        <span class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/instagram-icon.png') }}"
                                                                class="img-fluid">
                                                        </span>
                                                    </div>
                                                    <a href="javascript:;"
                                                        class="text-primary text-decoration-none medium view-detail"> View
                                                        Details <i class="fa fa-angle-down medium"></i></a>
                                                </div>
                                                <div class="bg-gray p-3 view-more-detail d-none">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <p class="mb-2 font-14 medium text-black mb-0">Descriptions</p>
                                                            <p class="font-13 text-black">Lorem ipsum, or lipsum as it is
                                                                sometimes known, is dummy text used in laying out print,
                                                                graphic or web designs. The passage is attributed to an
                                                                unknown typesetter in the 15th century who is thought to
                                                                have scrambled parts of Cicero's De Finibus Bonorum et
                                                                Malorum for use in a type specimen book.</p>
                                                            <p class="mb-2 font-14 text-black mb-2">Gender:<span
                                                                    class="medium"> Male, Female</span></p>
                                                            <p class="mb-2 font-14 text-black mb-2">Age Group:<span
                                                                    class="medium"> 20 - 60</span></p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h4 class="font-14 text-black medium mb-3">Attachments (5)</h4>
                                                            <div class="attachment-wrapper">
                                                                <a href="#"><img
                                                                        src="{{ frontAssets('advertiser/images/a1.png') }}"
                                                                        class="img-fluid mr-2 mb-2"></a>
                                                                <a href="#"><img
                                                                        src="{{ frontAssets('advertiser/images/a2.png') }}"
                                                                        class="img-fluid mr-2 mb-2"></a>
                                                                <a href="#"><img
                                                                        src="{{ frontAssets('advertiser/images/a3.png') }}"
                                                                        class="img-fluid mr-2 mb-2"></a>
                                                                <a href="#"><img
                                                                        src="{{ frontAssets('advertiser/images/a1.png') }}"
                                                                        class="img-fluid mr-2 mb-2"></a>
                                                                <a href="#"><img
                                                                        src="{{ frontAssets('advertiser/images/a2.png') }}"
                                                                        class="img-fluid mr-2 mb-2"></a>
                                                                <a href="#"><img
                                                                        src="{{ frontAssets('advertiser/images/a3.png') }}"
                                                                        class="img-fluid mr-2 mb-2"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card p-0 overflow-hidden mb-3">
                                            <div class="card-header p-3 bg-white ">
                                                <div class="d-flex align-items-start justify-content-between ">
                                                    <div class="mr-2">

                                                        <p class="font-16 medium text-black mb-0">Headline goes here lorem
                                                            ipsum dummy text</p>
                                                    </div>
                                                    <div class=" d-flex align-items-center ">
                                                        <a class="position-relative d-inline-block mr-3" href="#">
                                                            <img
                                                                src="{{ frontAssets('advertiser/images/chat-icon.png') }}">
                                                            <span class="card-badge bg-purple">3</span>
                                                        </a>
                                                        <div class="product-wishlist active">
                                                            <i class="fa fa-heart"></i>
                                                            <i class="fa fa-heart-o "></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div
                                                            class="d-flex align-items-start justify-content-between flex-wrap">
                                                            <div class="d-flex align-items-start ">
                                                                <img src="{{ frontAssets('advertiser/images/user1.png') }}"
                                                                    class="img-fluid rounded-circle" width="50px">
                                                                <div class="mx-2 flex-auto">
                                                                    <h4 class="font-14 mb-0">George Miller</h4>
                                                                    <p class="font-12 mb-0"> Riyadh </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-end justify-content-between">
                                                            <div class="mr-2">
                                                                <p class="font-14 text-black mb-0 mt-2">Headline goes here
                                                                </p>
                                                                <p class="font-14 text-black mb-1">9 Mar, 2020 - 10:00AM</p>
                                                                <p class="font-14 text-black mb-0 medium">SAR 110 - 200</p>
                                                            </div>
                                                            <div>
                                                                <a href="#"
                                                                    class=" btn btn-purple rounded-pill px-4 verify-otp-btn px-4 mr-2">SEND
                                                                    OFFER</a>
                                                                <a href="#"
                                                                    class="btn btn-outline-primary border-radius-30 font14  text-uppercase px-4">REJECT</a>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="card-footer bg-white p-0">
                                                <div class="d-flex align-items-center justify-content-between p-3">
                                                    <div class="text-center d-flex align-items-start ">
                                                        <span class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/facebook-icon.png') }}"
                                                                class="img-fluid">
                                                        </span>
                                                        <span class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/twitter-icon.png') }}"
                                                                class="img-fluid">
                                                        </span>
                                                        <span class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/instagram-icon.png') }}"
                                                                class="img-fluid">
                                                        </span>
                                                    </div>
                                                    <a href="javascript:;"
                                                        class="text-primary text-decoration-none medium view-detail"> View
                                                        Details <i class="fa fa-angle-down medium"></i></a>
                                                </div>
                                                <div class="bg-gray p-3 view-more-detail d-none">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <p class="mb-2 font-14 medium text-black mb-0">Descriptions</p>
                                                            <p class="font-13 text-black">Lorem ipsum, or lipsum as it is
                                                                sometimes known, is dummy text used in laying out print,
                                                                graphic or web designs. The passage is attributed to an
                                                                unknown typesetter in the 15th century who is thought to
                                                                have scrambled parts of Cicero's De Finibus Bonorum et
                                                                Malorum for use in a type specimen book.</p>
                                                            <p class="mb-2 font-14 text-black mb-2">Gender:<span
                                                                    class="medium"> Male, Female</span></p>
                                                            <p class="mb-2 font-14 text-black mb-2">Age Group:<span
                                                                    class="medium"> 20 - 60</span></p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h4 class="font-14 text-black medium mb-3">Attachments (5)</h4>
                                                            <div class="attachment-wrapper">
                                                                <a href="#"><img
                                                                        src="{{ frontAssets('advertiser/images/a1.png') }}"
                                                                        class="img-fluid mr-2 mb-2"></a>
                                                                <a href="#"><img
                                                                        src="{{ frontAssets('advertiser/images/a2.png') }}"
                                                                        class="img-fluid mr-2 mb-2"></a>
                                                                <a href="#"><img
                                                                        src="{{ frontAssets('advertiser/images/a3.png') }}"
                                                                        class="img-fluid mr-2 mb-2"></a>
                                                                <a href="#"><img
                                                                        src="{{ frontAssets('advertiser/images/a1.png') }}"
                                                                        class="img-fluid mr-2 mb-2"></a>
                                                                <a href="#"><img
                                                                        src="{{ frontAssets('advertiser/images/a2.png') }}"
                                                                        class="img-fluid mr-2 mb-2"></a>
                                                                <a href="#"><img
                                                                        src="{{ frontAssets('advertiser/images/a3.png') }}"
                                                                        class="img-fluid mr-2 mb-2"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Progress" role="tabpanel" aria-labelledby="Progress-tab">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="card p-0 overflow-hidden">
                                            <div class="px-3 pb-3 pt-3">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <div>
                                                        <span class=" text-gray">Company - Riyadh</span>
                                                        <h3 class="font-14 text-left  border-top">Headline goes here</h3>
                                                        <p class="font-14 text-black mb-1">SAR 110 - 200</p>
                                                        <p class="font-14 text-black mb-1">9 Mar, 2020 - 10:00AM</p>
                                                    </div>
                                                    <div class="d-flex align-items-start">
                                                        <a class="position-relative d-inline-block mr-3 mt-1"
                                                            href="{{ route('adv.chat') }}" data-toggle="tooltip" data-placement="bottom"
                                                            title="" data-original-title="Messages">
                                                            <img
                                                                src="{{ frontAssets('advertiser/images/chat-icon.png') }}">
                                                            <span class="card-badge bg-purple">3</span>
                                                        </a>
                                                        <div class="product-wishlist mt-2 active">
                                                            <i class="fa fa-heart"></i>
                                                            <i class="fa fa-heart-o "></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start flex-wrap justify-content-between">
                                                    <div class="text-center d-flex align-items-start mr-2 mt-2">
                                                        <a href="#" class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/twitter-icon.png') }}"
                                                                class="img-fluid">

                                                        </a>
                                                        <a href="#" class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/facebook-icon.png') }}"
                                                                class="img-fluid">

                                                        </a>
                                                        <a href="#" class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/instagram-icon.png') }}"
                                                                class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <a class="btn btn-outline-primary px-4 border-radius-30">SEND OFFER</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card p-0 overflow-hidden">
                                            <div class="px-3 pb-3  pt-3">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <div>
                                                        <span class=" text-gray">Company - Riyadh</span>
                                                        <h3 class="font-14 text-left  border-top">Headline goes here</h3>
                                                        <p class="font-14 text-black mb-1">SAR 110 - 200</p>
                                                        <p class="font-14 text-black mb-1">9 Mar, 2020 - 10:00AM</p>
                                                    </div>
                                                    <div class="product-wishlist mt-2 active">
                                                        <i class="fa fa-heart"></i>
                                                        <i class="fa fa-heart-o "></i>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start flex-wrap justify-content-between">
                                                    <div class="text-center d-flex align-items-start mr-2 mt-2">
                                                        <a href="#" class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/twitter-icon.png') }}"
                                                                class="img-fluid">

                                                        </a>
                                                        <a href="#" class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/facebook-icon.png') }}"
                                                                class="img-fluid">

                                                        </a>
                                                        <a href="#" class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/instagram-icon.png') }}"
                                                                class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <a class="btn btn-outline-primary px-4 border-radius-30">SEND OFFER</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card p-0 overflow-hidden">
                                            <div class="px-3 pb-3 pt-3">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <div>
                                                        <span class=" text-gray">Company - Riyadh</span>
                                                        <h3 class="font-14 text-left  border-top">Headline goes here</h3>
                                                        <p class="font-14 text-black mb-1">SAR 110 - 200</p>
                                                        <p class="font-14 text-black mb-1">9 Mar, 2020 - 10:00AM</p>
                                                    </div>
                                                    <div class="product-wishlist mt-2 active">
                                                        <i class="fa fa-heart"></i>
                                                        <i class="fa fa-heart-o "></i>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start flex-wrap justify-content-between">
                                                    <div class="text-center d-flex align-items-start mr-2 mt-2">
                                                        <a href="#" class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/twitter-icon.png') }}"
                                                                class="img-fluid">

                                                        </a>
                                                        <a href="#" class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/facebook-icon.png') }}"
                                                                class="img-fluid">

                                                        </a>
                                                        <a href="#" class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/instagram-icon.png') }}"
                                                                class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <a class="btn btn-outline-primary px-4 border-radius-30">SEND OFFER</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card p-0 overflow-hidden">
                                            <div class="px-3 pb-3 pt-3">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <div>
                                                        <span class=" text-gray">Company - Riyadh</span>
                                                        <h3 class="font-14 text-left  border-top">Headline goes here</h3>
                                                        <p class="font-14 text-black mb-1">SAR 110 - 200</p>
                                                        <p class="font-14 text-black mb-1">9 Mar, 2020 - 10:00AM</p>
                                                    </div>
                                                    <div class="product-wishlist mt-2 active">
                                                        <i class="fa fa-heart"></i>
                                                        <i class="fa fa-heart-o "></i>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start flex-wrap justify-content-between">
                                                    <div class="text-center d-flex align-items-start mr-2 mt-2">
                                                        <a href="#" class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/twitter-icon.png') }}"
                                                                class="img-fluid">

                                                        </a>
                                                        <a href="#" class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/facebook-icon.png') }}"
                                                                class="img-fluid">

                                                        </a>
                                                        <a href="#" class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/instagram-icon.png') }}"
                                                                class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <a class="btn btn-outline-primary px-4 border-radius-30">SEND OFFER</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card p-0 overflow-hidden">
                                            <div class="px-3 pb-3 pt-3">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <div>
                                                        <span class=" text-gray">Company - Riyadh</span>
                                                        <h3 class="font-14 text-left  border-top">Headline goes here</h3>
                                                        <p class="font-14 text-black mb-1">SAR 110 - 200</p>
                                                        <p class="font-14 text-black mb-1">9 Mar, 2020 - 10:00AM</p>
                                                    </div>
                                                    <div class="product-wishlist mt-2 active">
                                                        <i class="fa fa-heart"></i>
                                                        <i class="fa fa-heart-o "></i>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start flex-wrap justify-content-between">
                                                    <div class="text-center d-flex align-items-start mr-2 mt-2">
                                                        <a href="#" class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/twitter-icon.png') }}"
                                                                class="img-fluid">

                                                        </a>
                                                        <a href="#" class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/facebook-icon.png') }}"
                                                                class="img-fluid">

                                                        </a>
                                                        <a href="#" class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/instagram-icon.png') }}"
                                                                class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <a class="btn btn-outline-primary px-4 border-radius-30">SEND OFFER</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card p-0 overflow-hidden">
                                            <div class="px-3 pb-3 pt-3">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <div>
                                                        <span class=" text-gray">Company - Riyadh</span>
                                                        <h3 class="font-14 text-left  border-top">Headline goes here</h3>
                                                        <p class="font-14 text-black mb-1">SAR 110 - 200</p>
                                                        <p class="font-14 text-black mb-1">9 Mar, 2020 - 10:00AM</p>
                                                    </div>
                                                    <div class="product-wishlist mt-2 active">
                                                        <i class="fa fa-heart"></i>
                                                        <i class="fa fa-heart-o "></i>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start flex-wrap justify-content-between">
                                                    <div class="text-center d-flex align-items-start mr-2 mt-2">
                                                        <a href="#" class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/twitter-icon.png') }}"
                                                                class="img-fluid">

                                                        </a>
                                                        <a href="#" class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/facebook-icon.png') }}"
                                                                class="img-fluid">

                                                        </a>
                                                        <a href="#" class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/instagram-icon.png') }}"
                                                                class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <a class="btn btn-outline-primary px-4 border-radius-30">SEND OFFER</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card p-0 overflow-hidden">
                                            <div class="px-3 pb-3 pt-3">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <div>
                                                        <span class=" text-gray">Company - Riyadh</span>
                                                        <h3 class="font-14 text-left  border-top">Headline goes here</h3>
                                                        <p class="font-14 text-black mb-1">SAR 110 - 200</p>
                                                        <p class="font-14 text-black mb-1">9 Mar, 2020 - 10:00AM</p>
                                                    </div>
                                                    <div class="product-wishlist mt-2 active">
                                                        <i class="fa fa-heart"></i>
                                                        <i class="fa fa-heart-o "></i>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start flex-wrap justify-content-between">
                                                    <div class="text-center d-flex align-items-start mr-2 mt-2">
                                                        <a href="#" class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/twitter-icon.png') }}"
                                                                class="img-fluid">

                                                        </a>
                                                        <a href="#" class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/facebook-icon.png') }}"
                                                                class="img-fluid">

                                                        </a>
                                                        <a href="#" class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/instagram-icon.png') }}"
                                                                class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <a class="btn btn-outline-primary px-4 border-radius-30">SEND OFFER</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card p-0 overflow-hidden ">
                                            <div class="px-3 pb-3 pt-3">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <div>
                                                        <span class=" text-gray">Company - Riyadh</span>
                                                        <h3 class="font-14 text-left  border-top">Headline goes here</h3>
                                                        <p class="font-14 text-black mb-1">SAR 110 - 200</p>
                                                        <p class="font-14 text-black mb-1">9 Mar, 2020 - 10:00AM</p>
                                                    </div>
                                                    <div class="product-wishlist mt-2 active">
                                                        <i class="fa fa-heart"></i>
                                                        <i class="fa fa-heart-o "></i>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start flex-wrap justify-content-between">
                                                    <div class="text-center d-flex align-items-start mr-2 mt-2">
                                                        <a href="#" class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/twitter-icon.png') }}"
                                                                class="img-fluid">

                                                        </a>
                                                        <a href="#" class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/facebook-icon.png') }}"
                                                                class="img-fluid">

                                                        </a>
                                                        <a href="#" class="mx-2">
                                                            <img src="{{ frontAssets('advertiser/images/instagram-icon.png') }}"
                                                                class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <a class="btn btn-outline-primary px-4 border-radius-30">SEND OFFER</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Completed" role="tabpanel" aria-labelledby="Completed-tab">
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <div class="card p-0 overflow-hidden">
                                            <div class="p-0 overflow-hidden">
                                                <div class="p-3">
                                                    <div class="d-flex align-items-start ">
                                                        <img src="{{ frontAssets('advertiser/images/user1.png') }}"
                                                            class="img-fluid rounded-circle" width="40px">
                                                        <a href="{{ route('adv.advertiser-detail') }}"
                                                            class="text-decoration-none text-black mx-2 flex-auto">
                                                            <h4 class="font-14 mb-0">Mark Henry</h4>
                                                            <p class="font-12 mb-0">Riyadh</p>
                                                        </a>
                                                        <div class="product-wishlist active">
                                                            <i class="fa fa-heart"></i>
                                                            <i class="fa fa-heart-o "></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card p-0 overflow-hidden">
                                            <div class="p-0 overflow-hidden">
                                                <div class="p-3">
                                                    <div class="d-flex align-items-start ">
                                                        <img src="{{ frontAssets('advertiser/images/user1.png') }}"
                                                            class="img-fluid rounded-circle" width="40px">
                                                        <a href=""
                                                            class="text-decoration-none text-black mx-2 flex-auto">
                                                            <h4 class="font-14 mb-0">Mark Henry</h4>
                                                            <p class="font-12 mb-0">Riyadh</p>
                                                        </a>
                                                        <div class="product-wishlist active">
                                                            <i class="fa fa-heart"></i>
                                                            <i class="fa fa-heart-o "></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card p-0 overflow-hidden">
                                            <div class="p-0 overflow-hidden">
                                                <div class="p-3">
                                                    <div class="d-flex align-items-start ">
                                                        <img src="{{ frontAssets('advertiser/images/user1.png') }}"
                                                            class="img-fluid rounded-circle" width="40px">
                                                        <a href="{{ route('adv.advertiser-detail') }}"
                                                            class="text-decoration-none text-black mx-2 flex-auto">
                                                            <h4 class="font-14 mb-0">Mark Henry</h4>
                                                            <p class="font-12 mb-0">Riyadh</p>
                                                        </a>
                                                        <div class="product-wishlist active">
                                                            <i class="fa fa-heart"></i>
                                                            <i class="fa fa-heart-o "></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card p-0 overflow-hidden">
                                            <div class="p-0 overflow-hidden">
                                                <div class="p-3">
                                                    <div class="d-flex align-items-start ">
                                                        <img src="{{ frontAssets('advertiser/images/user1.png') }}"
                                                            class="img-fluid rounded-circle" width="40px">
                                                        <a href="{{ route('adv.advertiser-detail') }}"
                                                            class="text-decoration-none text-black mx-2 flex-auto">
                                                            <h4 class="font-14 mb-0">Mark Henry</h4>
                                                            <p class="font-12 mb-0">Riyadh</p>
                                                        </a>
                                                        <div class="product-wishlist active">
                                                            <i class="fa fa-heart"></i>
                                                            <i class="fa fa-heart-o "></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card p-0 overflow-hidden">
                                            <div class="p-0 overflow-hidden">
                                                <div class="p-3">
                                                    <div class="d-flex align-items-start ">
                                                        <img src="{{ frontAssets('advertiser/images/user1.png') }}"
                                                            class="img-fluid rounded-circle" width="40px">
                                                        <a href="{{ route('adv.advertiser-detail') }}"
                                                            class="text-decoration-none text-black mx-2 flex-auto">
                                                            <h4 class="font-14 mb-0">Mark Henry</h4>
                                                            <p class="font-12 mb-0">Riyadh</p>
                                                        </a>
                                                        <div class="product-wishlist active">
                                                            <i class="fa fa-heart"></i>
                                                            <i class="fa fa-heart-o "></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card p-0 overflow-hidden">
                                            <div class="p-0 overflow-hidden">
                                                <div class="p-3">
                                                    <div class="d-flex align-items-start ">
                                                        <img src="{{ frontAssets('advertiser/images/user1.png') }}"
                                                            class="img-fluid rounded-circle" width="40px">
                                                        <a href="{{ route('adv.advertiser-detail') }}"
                                                            class="text-decoration-none text-black mx-2 flex-auto">
                                                            <h4 class="font-14 mb-0">Mark Henry</h4>
                                                            <p class="font-12 mb-0">Riyadh</p>
                                                        </a>
                                                        <div class="product-wishlist active">
                                                            <i class="fa fa-heart"></i>
                                                            <i class="fa fa-heart-o "></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card p-0 overflow-hidden">
                                            <div class="p-0 overflow-hidden">
                                                <div class="p-3">
                                                    <div class="d-flex align-items-start ">
                                                        <img src="{{ frontAssets('advertiser/images/user1.png') }}"
                                                            class="img-fluid rounded-circle" width="40px">
                                                        <a href="{{ route('adv.advertiser-detail') }}"
                                                            class="text-decoration-none text-black mx-2 flex-auto">
                                                            <h4 class="font-14 mb-0">Mark Henry</h4>
                                                            <p class="font-12 mb-0">Riyadh</p>
                                                        </a>
                                                        <div class="product-wishlist active">
                                                            <i class="fa fa-heart"></i>
                                                            <i class="fa fa-heart-o "></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card p-0 overflow-hidden">
                                            <div class="p-0 overflow-hidden">
                                                <div class="p-3">
                                                    <div class="d-flex align-items-start ">
                                                        <img src="{{ frontAssets('advertiser/images/user1.png') }}"
                                                            class="img-fluid rounded-circle" width="40px">
                                                        <a href="{{ route('adv.advertiser-detail') }}"
                                                            class="text-decoration-none text-black mx-2 flex-auto">
                                                            <h4 class="font-14 mb-0">Mark Henry</h4>
                                                            <p class="font-12 mb-0">Riyadh</p>
                                                        </a>
                                                        <div class="product-wishlist active">
                                                            <i class="fa fa-heart"></i>
                                                            <i class="fa fa-heart-o "></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.MultiStep Form -->
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
    <div class="modal fade" id="save-as-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="">

                        <div class="row align-items-center">

                            <div class="col-12 mb-3 mt-4">
                                <div class="text-center">
                                    <img src="{{ frontAssets('advertiser/images/check-icon.png') }}" class="img-fluid">
                                    <h3 class="text-black mb-0 font24 mb-0 semi-bold">Ad Saved Successfully!</h3>
                                    <p class="text-gray font18 my-3">Your ad is saved successfully. edit or post your ad
                                        request at anytime from "Saved Ads" section in "My Ads".</p>
                                    <div class="d-flex align-items-center justify-content-between w-75 mx-auto">
                                        <a href="#" class="btn btn-outline-primary border-radius-30 w-100 mx-2">HOME</a>
                                        <a href="#" class="btn btn-outline-primary border-radius-30 w-100 mx-2">MY ADS</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ad-request-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="">

                        <div class="row align-items-center">

                            <div class="col-12 mb-3 mt-4">
                                <div class="text-center">
                                    <img src="{{ frontAssets('advertiser/images/check-icon.png') }}   "
                                        class="img-fluid">
                                    <h3 class="text-black mb-0 font24 mb-0 semi-bold">Ad Request Posted <br /> Successfully!
                                    </h3>
                                    <p class="text-gray font18 my-3">Start Inviting advertisers for your private ad request
                                        to <br />receive offers from them.</p>
                                    <div class="d-flex align-items-center justify-content-between w-75 mx-auto">
                                        <a href="{{ route('adv.dashboard') }}"
                                            class="btn btn-outline-primary border-radius-30 w-100 mx-2">HOME</a>
                                        <a href="{{ route('adv.my-ads') }}"
                                            class="btn btn-outline-primary border-radius-30 w-100 mx-2">MY ADS</a>
                                    </div>
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
