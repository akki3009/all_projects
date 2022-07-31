@extends('beneficiary.app')

@section('content')
    <main>
        <section class="overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ">
                        <div class="card-block">
                            <ul class="mb-0">
                                <li class="card-active" id="create-new">
                                    <a href="{{route('create-new-ad-request')}}" class="text-decoration-none">
                                        <div class="card p-0">
                                            <div class="card-body">
                                                <h2 class="text-primary font-30 mb-0">+</h2>
                                                <p class="text-primary mb-0 font-14">Create New </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li id="standing">
                                    <a href="{{route('my-ads')}}" class="text-decoration-none">
                                        <div class="card p-0">
                                            <div class="card-body">
                                                <h2 class="text-primary font-30 mb-0">10</h2>
                                                <p class="mb-0 font-14 text-black">Standing</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li id="inprogress">
                                    <a href="{{ route('my-ads') }}" class="text-decoration-none">
                                        <div class="card p-0">
                                            <div class="card-body">
                                                <h2 class="text-orange font-30 mb-0">09</h2>
                                                <p class="mb-0 font-14 text-black">Inprogress</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li id="completed">
                                    <a href="{{ route('my-ads') }}" class="text-decoration-none completed">
                                        <div class="card p-0">
                                            <div class="card-body">
                                                <h2 class="text-warning font-30 mb-0">12</h2>
                                                <p class="mb-0 font-14 text-black">Completed</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li id="saved">
                                    <a href="{{ route('my-ads') }}" class="text-decoration-none">
                                        <div class="card p-0">
                                            <div class="card-body">
                                                <h2 class="text-purple font-30 mb-0">06</h2>
                                                <p class="mb-0 font-14 text-black">Saved</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="title font-24 medium mb-3">Favorite Advertisers</h3>
                        <div class="row pb-4">
                            <div class="col-lg-4 col-md-6 mb-3">
                                <div class="card p-0 overflow-hidden">
                                    <div class="bg-gray p-0 overflow-hidden">
                                        <div class="p-3">
                                            <div class="d-flex align-items-start ">
                                                <img src="{{ frontAssets('beneficiary/images/user1.png') }}"
                                                    class="img-fluid rounded-circle" width="40px">
                                                <a href="{{ route('advertiser-detail') }}"
                                                    class="text-decoration-none text-black mx-2 flex-auto">
                                                    <h4 class="font-14 mb-0">Mark Henry</h4>
                                                    <p class="font-12 mb-0"><img
                                                            src="{{ frontAssets('beneficiary/images/location-icon.png') }}"
                                                            class="mr-1">Riyadh</p>
                                                </a>
                                                <div class="product-wishlist">
                                                    <i class="fa fa-heart"></i>
                                                    <i class="fa fa-heart-o "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-3 pb-3">
                                        <h3 class="font-12 text-gray text-center mt-3">Social Media Advertising</h3>
                                        <div class="text-center d-flex align-items-start justify-content-center">
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/twitter-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">1.2k</p>
                                            </span>
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/facebook-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">1.4k</p>
                                            </span>
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/instagram-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">2.5k</p>
                                            </span>
                                        </div>
                                        <a href="#" class="btn btn-outline-primary w-100 border-radius-30"
                                            data-target="#invite-modal" data-toggle="modal"> Invite</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-3">
                                <div class="card p-0 overflow-hidden">
                                    <div class="bg-gray p-0 overflow-hidden">
                                        <div class="p-3">
                                            <div class="d-flex align-items-start ">
                                                <img src="{{ frontAssets('beneficiary/images/user1.png') }}"
                                                    class="img-fluid rounded-circle" width="40px">
                                                <a href="{{ route('advertiser-detail') }}"
                                                    class="text-decoration-none text-black mx-2 flex-auto">
                                                    <h4 class="font-14 mb-0">Mark Henry</h4>
                                                    <p class="font-12 mb-0"><img
                                                            src="{{ frontAssets('beneficiary/images/location-icon.png') }}"
                                                            class="mr-1">Riyadh</p>
                                                </a>
                                                <div class="product-wishlist">
                                                    <i class="fa fa-heart"></i>
                                                    <i class="fa fa-heart-o "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-3 pb-3">
                                        <h3 class="font-12 text-gray text-center mt-3">Social Media Advertising</h3>
                                        <div class="text-center d-flex align-items-start justify-content-center">
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/twitter-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">1.2k</p>
                                            </span>
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/facebook-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">1.4k</p>
                                            </span>
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/instagram-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">2.5k</p>
                                            </span>
                                        </div>
                                        <a class="btn btn-outline-primary w-100 border-radius-30">Invite</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-3">
                                <div class="card p-0 overflow-hidden">
                                    <div class="bg-gray p-0 overflow-hidden">
                                        <div class="p-3">
                                            <div class="d-flex align-items-start ">
                                                <img src="{{ frontAssets('beneficiary/images/user1.png') }}"
                                                    class="img-fluid rounded-circle" width="40px">
                                                <a href="{{ route('advertiser-detail') }}"
                                                    class="text-decoration-none text-black mx-2 flex-auto">
                                                    <h4 class="font-14 mb-0">Mark Henry</h4>
                                                    <p class="font-12 mb-0"><img
                                                            src="{{ frontAssets('beneficiary/images/location-icon.png') }}"
                                                            class="mr-1">Riyadh</p>
                                                </a>
                                                <div class="product-wishlist">
                                                    <i class="fa fa-heart"></i>
                                                    <i class="fa fa-heart-o "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-3 pb-3">
                                        <h3 class="font-12 text-gray text-center mt-3">Social Media Advertising</h3>
                                        <div class="text-center d-flex align-items-start justify-content-center">
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/twitter-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">1.2k</p>
                                            </span>
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/facebook-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">1.4k</p>
                                            </span>
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/instagram-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">2.5k</p>
                                            </span>
                                        </div>
                                        <a class="btn btn-outline-primary w-100 border-radius-30">Invite</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="title font-24 medium mb-3">You worked with</h3>
                        <div class="row pb-4">
                            <div class="col-lg-4 col-md-6 mb-3">
                                <div class="card p-0 overflow-hidden">
                                    <div class="bg-gray p-0 overflow-hidden">
                                        <div class="p-3">
                                            <div class="d-flex align-items-start ">
                                                <img src="{{ frontAssets('beneficiary/images/user1.png') }}"
                                                    class="img-fluid rounded-circle" width="40px">
                                                <a href="{{ route('advertiser-detail') }}"
                                                    class="text-decoration-none text-black mx-2 flex-auto">
                                                    <h4 class="font-14 mb-0">Mark Henry</h4>
                                                    <p class="font-12 mb-0"><img
                                                            src="{{ frontAssets('beneficiary/images/location-icon.png') }}"
                                                            class="mr-1">Riyadh</p>
                                                </a>
                                                <div class="product-wishlist">
                                                    <i class="fa fa-heart"></i>
                                                    <i class="fa fa-heart-o "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-3 pb-3">
                                        <h3 class="font-12 text-gray text-center mt-3">Social Media Advertising</h3>
                                        <div class="text-center d-flex align-items-start justify-content-center">
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/twitter-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">1.2k</p>
                                            </span>
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/facebook-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">1.4k</p>
                                            </span>
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/instagram-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">2.5k</p>
                                            </span>
                                        </div>
                                        <a class="btn btn-outline-primary w-100 border-radius-30">Invite</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-3">
                                <div class="card p-0 overflow-hidden">
                                    <div class="bg-gray p-0 overflow-hidden">
                                        <div class="p-3">
                                            <div class="d-flex align-items-start ">
                                                <img src="{{ frontAssets('beneficiary/images/user1.png') }}"
                                                    class="img-fluid rounded-circle" width="40px">
                                                <a href="{{ route('advertiser-detail') }}"
                                                    class="text-decoration-none text-black mx-2 flex-auto">
                                                    <h4 class="font-14 mb-0">Mark Henry</h4>
                                                    <p class="font-12 mb-0"><img
                                                            src="{{ frontAssets('beneficiary/images/location-icon.png') }}"
                                                            class="mr-1">Riyadh</p>
                                                </a>
                                                <div class="product-wishlist">
                                                    <i class="fa fa-heart"></i>
                                                    <i class="fa fa-heart-o "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-3 pb-3">
                                        <h3 class="font-12 text-gray text-center mt-3">Social Media Advertising</h3>
                                        <div class="text-center d-flex align-items-start justify-content-center">
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/twitter-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">1.2k</p>
                                            </span>
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/facebook-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">1.4k</p>
                                            </span>
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/instagram-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">2.5k</p>
                                            </span>
                                        </div>
                                        <a class="btn btn-outline-primary w-100 border-radius-30">Invite</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-3">
                                <div class="card p-0 overflow-hidden">
                                    <div class="bg-gray p-0 overflow-hidden">
                                        <div class="modal fade" id="invite-modal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog  modal-dialog-centered ">
                                                <div class="modal-content">
                                                    <div class="modal-header  pb-0">
                                                        <h2 class="font-24 flex-auto text-center mb-3 pl-4">Select Ad</h2>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <img
                                                                src="{{ frontAssets('beneficiary/images/close-icon.png') }}">
                                                        </button>
                                                    </div>
                                                    <div class="modal-body ">
                                                        <div class="px-4">
                                                            <div class="row align-items-center login-register">
                                                                <div class="col-12 mb-3 mt-4">
                                                                    <div
                                                                        class="row justify-content-center border-bottom pb-3 pt-2 ">
                                                                        <div class="col-md-8">
                                                                            <p class="text-black medium font-14 mb-1">
                                                                                Headline goes here lorem ipsum</p>
                                                                            <p class="text-black font-14 mb-0"><img
                                                                                    src="{{ frontAssets('beneficiary/images/calendar.png') }}"
                                                                                    class="img-fluid mr-2">09 Oct, 2020 - 15
                                                                                Oct, 2020</p>
                                                                            <div class="d-flex mt-2">
                                                                                <a href="#" class="mr-2"><img
                                                                                        src="{{ frontAssets('beneficiary/images/twitter-icon.png') }}"></a>
                                                                                <a href="#" class="mr-2"><img
                                                                                        src="{{ frontAssets('beneficiary/images/facebook-icon.png') }}"></a>
                                                                                <a href="#" class="mr-2"><img
                                                                                        src="{{ frontAssets('beneficiary/images/instagram-icon.png') }}"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 align-self-center">
                                                                            <a href="#"
                                                                                class=" btn btn-purple px-3 border-radius-30"><img
                                                                                    src="{{ frontAssets('beneficiary/images/check.png') }}"
                                                                                    class="mr-1">
                                                                                SENT</a>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="row justify-content-center border-bottom pb-3 pt-2">
                                                                        <div class="col-md-8">
                                                                            <p class="text-black medium font-14 mb-1">
                                                                                Headline goes here lorem ipsum</p>
                                                                            <p class="text-black font-14 mb-0"><img
                                                                                    src="{{ frontAssets('beneficiary/images/calendar.png') }}"
                                                                                    class="img-fluid mr-2">09 Oct, 2020 - 15
                                                                                Oct, 2020</p>
                                                                            <div class="d-flex mt-3">
                                                                                <a href="#" class="mr-2"><img
                                                                                        src="{{ frontAssets('beneficiary/images/twitter-icon.png') }}"></a>
                                                                                <a href="#" class="mr-2"><img
                                                                                        src="{{ frontAssets('beneficiary/images/facebook-icon.png') }}"></a>
                                                                                <a href="#" class="mr-2"><img
                                                                                        src="{{ frontAssets('beneficiary/images/instagram-icon.png') }}"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 align-self-center">
                                                                            <a href="#"
                                                                                class=" btn btn-outline-primary px-4 border-radius-30">SEND</a>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="row justify-content-center border-bottom pb-3 pt-2">
                                                                        <div class="col-md-8">
                                                                            <p class="text-black medium font-14 mb-1">
                                                                                Headline goes here lorem ipsum</p>
                                                                            <p class="text-black font-14 mb-0"><img
                                                                                    src="{{ frontAssets('beneficiary/images/calendar.png') }}"
                                                                                    class="img-fluid mr-2">09 Oct, 2020 - 15
                                                                                Oct, 2020</p>
                                                                            <div class="d-flex mt-2">
                                                                                <a href="#" class="mr-2"><img
                                                                                        src="{{ frontAssets('beneficiary/images/twitter-icon.png') }}"></a>
                                                                                <a href="#" class="mr-2"><img
                                                                                        src="{{ frontAssets('beneficiary/images/facebook-icon.png') }}"></a>
                                                                                <a href="#" class="mr-2"><img
                                                                                        src="{{ frontAssets('beneficiary/images/instagram-icon.png') }}"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 align-self-center">
                                                                            <a href="#"
                                                                                class=" btn btn-outline-primary px-4 border-radius-30">SEND</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group text-center mt-4">
                                                                        <a href="#" data-dismiss="modal"
                                                                            class=" btn btn-purple rounded-pill px-4 verify-otp-btn px-4"
                                                                            data-target="#submit-contract-modal"
                                                                            data-toggle="modal">DONE</a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-3">
                                            <div class="d-flex align-items-start ">
                                                <img src="{{ frontAssets('beneficiary/images/user1.png') }}"
                                                    class="img-fluid rounded-circle" width="40px">
                                                <a href="{{ route('advertiser-detail') }}"
                                                    class="text-decoration-none text-black mx-2 flex-auto">
                                                    <h4 class="font-14 mb-0">Mark Henry</h4>
                                                    <p class="font-12 mb-0"><img
                                                            src="{{ frontAssets('beneficiary/images/location-icon.png') }}"
                                                            class="mr-1">Riyadh</p>
                                                </a>
                                                <div class="product-wishlist">
                                                    <i class="fa fa-heart"></i>
                                                    <i class="fa fa-heart-o "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-3 pb-3">
                                        <h3 class="font-12 text-gray text-center mt-3">Social Media Advertising</h3>
                                        <div class="text-center d-flex align-items-start justify-content-center">
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/twitter-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">1.2k</p>
                                            </span>
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/facebook-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">1.4k</p>
                                            </span>
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/instagram-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">2.5k</p>
                                            </span>
                                        </div>
                                        <a class="btn btn-outline-primary w-100 border-radius-30">Invite</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="title font-24 medium mb-3">Most Interest Advertisers</h3>
                        <div class="row pb-4">
                            <div class="col-lg-4 col-md-6 mb-3">
                                <div class="card p-0 overflow-hidden">
                                    <div class="bg-gray p-0 overflow-hidden">
                                        <div class="p-3">
                                            <div class="d-flex align-items-start ">
                                                <img src="{{ frontAssets('beneficiary/images/user1.png') }}"
                                                    class="img-fluid rounded-circle" width="40px">
                                                <a href="{{ route('advertiser-detail') }}"
                                                    class="text-decoration-none text-black mx-2 flex-auto">
                                                    <h4 class="font-14 mb-0">Mark Henry</h4>
                                                    <p class="font-12 mb-0"><img
                                                            src="{{ frontAssets('beneficiary/images/location-icon.png') }}"
                                                            class="mr-1">Riyadh</p>
                                                </a>
                                                <div class="product-wishlist">
                                                    <i class="fa fa-heart"></i>
                                                    <i class="fa fa-heart-o "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-3 pb-3">
                                        <h3 class="font-12 text-gray text-center mt-3">Social Media Advertising</h3>
                                        <div class="text-center d-flex align-items-start justify-content-center">
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/twitter-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">1.2k</p>
                                            </span>
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/facebook-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">1.4k</p>
                                            </span>
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/instagram-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">2.5k</p>
                                            </span>
                                        </div>
                                        <a class="btn btn-outline-primary w-100 border-radius-30">Invite</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-3">
                                <div class="card p-0 overflow-hidden">
                                    <div class="bg-gray p-0 overflow-hidden">
                                        <div class="p-3">
                                            <div class="d-flex align-items-start ">
                                                <img src="{{ frontAssets('beneficiary/images/user1.png') }}"
                                                    class="img-fluid rounded-circle" width="40px">
                                                <a href="{{ route('advertiser-detail') }}"
                                                    class="text-decoration-none text-black mx-2 flex-auto">
                                                    <h4 class="font-14 mb-0">Mark Henry</h4>
                                                    <p class="font-12 mb-0"><img
                                                            src="{{ frontAssets('beneficiary/images/location-icon.png') }}"
                                                            class="mr-1">Riyadh</p>
                                                </a>
                                                <div class="product-wishlist">
                                                    <i class="fa fa-heart"></i>
                                                    <i class="fa fa-heart-o "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-3 pb-3">
                                        <h3 class="font-12 text-gray text-center mt-3">Social Media Advertising</h3>
                                        <div class="text-center d-flex align-items-start justify-content-center">
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/twitter-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">1.2k</p>
                                            </span>
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/facebook-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">1.4k</p>
                                            </span>
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/instagram-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">2.5k</p>
                                            </span>
                                        </div>
                                        <a class="btn btn-outline-primary w-100 border-radius-30">Invite</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-3">
                                <div class="card p-0 overflow-hidden">
                                    <div class="bg-gray p-0 overflow-hidden">
                                        <div class="p-3">
                                            <div class="d-flex align-items-start ">
                                                <img src="{{ frontAssets('beneficiary/images/user1.png') }}"
                                                    class="img-fluid rounded-circle" width="40px">
                                                <a href="{{ route('advertiser-detail') }}"
                                                    class="text-decoration-none text-black mx-2 flex-auto">
                                                    <h4 class="font-14 mb-0">Mark Henry</h4>
                                                    <p class="font-12 mb-0"><img
                                                            src="{{ frontAssets('beneficiary/images/location-icon.png') }}"
                                                            class="mr-1">Riyadh</p>
                                                </a>
                                                <div class="product-wishlist">
                                                    <i class="fa fa-heart"></i>
                                                    <i class="fa fa-heart-o "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-3 pb-3">
                                        <h3 class="font-12 text-gray text-center mt-3">Social Media Advertising</h3>
                                        <div class="text-center d-flex align-items-start justify-content-center">
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/twitter-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">1.2k</p>
                                            </span>
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/facebook-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">1.4k</p>
                                            </span>
                                            <span class="mx-2">
                                                <img src="{{ frontAssets('beneficiary/images/instagram-icon.png') }}"
                                                    class="img-fluid">
                                                <p class="font-12 tex-black regular mb-2">2.5k</p>
                                            </span>
                                        </div>
                                        <a class="btn btn-outline-primary w-100 border-radius-30">Invite</a>
                                    </div>
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
                                    <a href="{{ route('my-ads') }}"
                                        class="font-16 mb-0 text-black text-deccoration-none">Advertisement 1</a>
                                    <span
                                        class="badge bg-light-warning text-warning regular font-12 position-relative px-2 py-2">Inprogress</span>
                                </div>
                                <p class="font-14 text-black"><img
                                        src="{{ frontAssets('beneficiary/images/calendar.png') }}" class="img-fluid mr-1"
                                        width="18px"> 10 Sep, 2020 - 12 Sep, 2020</p>
                                <div class="d-flex">
                                    <a href="#" class="mr-2"><img
                                            src="{{ frontAssets('beneficiary/images/twitter-icon.png') }}"></a>
                                    <a href="#" class="mr-2"><img
                                            src="{{ frontAssets('beneficiary/images/facebook-icon.png') }}"></a>
                                    <a href="#" class="mr-2"><img
                                            src="{{ frontAssets('beneficiary/images/instagram-icon.png') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-activity mb-4">
                            <div class="card p-3">
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <a href="{{ route('my-ads') }}"
                                        class="font-16 mb-0 text-black text-deccoration-none">Advertisement 2</a>
                                    <span
                                        class="badge bg-light-danger text-danger regular font-12 position-relative px-2 py-2">Completed</span>
                                </div>
                                <p class="font-14 text-black"><img
                                        src="{{ frontAssets('beneficiary/images/calendar.png') }}" class="img-fluid mr-1"
                                        width="18px"> 10 Sep, 2020 - 12 Sep, 2020</p>
                                <div class="d-flex">
                                    <a href="#" class="mr-2"><img
                                            src="{{ frontAssets('beneficiary/images/twitter-icon.png') }}"></a>
                                    <a href="#" class="mr-2"><img
                                            src="{{ frontAssets('beneficiary/images/facebook-icon.png') }}"></a>
                                    <a href="#" class="mr-2"><img
                                            src="{{ frontAssets('beneficiary/images/instagram-icon.png') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-activity mb-4">
                            <div class="card p-3">
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <a href="{{ route('my-ads') }}"
                                        class="font-16 mb-0 text-black text-deccoration-none">Advertisement 3</a>
                                    <span
                                        class="badge bg-light-success text-success regular font-12 position-relative px-2 py-2">Upcoming</span>
                                </div>
                                <p class="font-14 text-black"><img
                                        src="{{ frontAssets('beneficiary/images/calendar.png') }}" class="img-fluid mr-1"
                                        width="18px"> 10 Sep, 2020 - 12 Sep, 2020</p>
                                <div class="d-flex">
                                    <a href="#" class="mr-2"><img
                                            src="{{ frontAssets('beneficiary/images/twitter-icon.png') }}"></a>
                                    <a href="#" class="mr-2"><img
                                            src="{{ frontAssets('beneficiary/images/facebook-icon.png') }}"></a>
                                    <a href="#" class="mr-2"><img
                                            src="{{ frontAssets('beneficiary/images/instagram-icon.png') }}"></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-activity mb-4">
                            <div class="card p-3">
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <a href="{{ route('my-ads') }}"
                                        class="font-16 mb-0 text-black text-deccoration-none">Advertisement 3</a>
                                    <span
                                        class="badge bg-light-secondary text-black regular font-12 position-relative px-2 py-2">Passed
                                        Adverts</span>
                                </div>
                                <p class="font-14 text-black"><img
                                        src="{{ frontAssets('beneficiary/images/calendar.png') }}" class="img-fluid mr-1"
                                        width="18px"> 10 Sep, 2020 - 12 Sep, 2020</p>
                                <div class="d-flex">
                                    <a href="#" class="mr-2"><img
                                            src="{{ frontAssets('beneficiary/images/twitter-icon.png') }}"></a>
                                    <a href="#" class="mr-2"><img
                                            src="{{ frontAssets('beneficiary/images/facebook-icon.png') }}"></a>
                                    <a href="#" class="mr-2"><img
                                            src="{{ frontAssets('beneficiary/images/instagram-icon.png') }}"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="web-help">
        <a href="{{route('web-service')}}" class="position-relative d-inline-block text-decoration-none">
            <div class="d-flex align-items-center">
                <p class="mb-0 border-radius-8 web-tooltip">
                    How can I help you?
                </p>
                <img src="{{ frontAssets('beneficiary/images/logo-stickey.png') }}" class="img-fluid">
            </div>
        </a>
    </div>
    <div class="modal fade" id="invite-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header  pb-0">
                    <h2 class="font-24 flex-auto text-center mb-3 pl-4">Select Ad</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="{{ frontAssets('beneficiary/images/close-icon.png') }}">
                    </button>
                </div>
                <div class="modal-body ">
                    <div class="px-4">
                        <div class="row align-items-center login-register">
                            <div class="col-12 mb-3 mt-4">
                                <div class="row justify-content-center border-bottom pb-3 pt-2 ">
                                    <div class="col-md-8">
                                        <p class="text-black medium font-14 mb-1">Headline goes here lorem ipsum</p>
                                        <p class="text-black font-14 mb-0"><img
                                                src="{{ frontAssets('beneficiary/images/calendar.png') }}"
                                                class="img-fluid mr-2">09 Oct, 2020 - 15 Oct, 2020</p>
                                        <div class="d-flex mt-2">
                                            <a href="#" class="mr-2"><img
                                                    src="{{ frontAssets('beneficiary/images/twitter-icon.png') }}"></a>
                                            <a href="#" class="mr-2"><img
                                                    src="{{ frontAssets('beneficiary/images/facebook-icon.png') }}"></a>
                                            <a href="#" class="mr-2"><img
                                                    src="{{ frontAssets('beneficiary/images/instagram-icon.png') }}"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 align-self-center">
                                        <a href="#" class=" btn btn-purple px-3 border-radius-30"><img
                                                src="{{ frontAssets('beneficiary/images/check.png') }}" class="mr-1">
                                            SENT</a>
                                    </div>
                                </div>
                                <div class="row justify-content-center border-bottom pb-3 pt-2">
                                    <div class="col-md-8">
                                        <p class="text-black medium font-14 mb-1">Headline goes here lorem ipsum</p>
                                        <p class="text-black font-14 mb-0"><img
                                                src="{{ frontAssets('beneficiary/images/calendar.png') }}"
                                                class="img-fluid mr-2">09 Oct, 2020 - 15 Oct, 2020</p>
                                        <div class="d-flex mt-3">
                                            <a href="#" class="mr-2"><img
                                                    src="{{ frontAssets('beneficiary/images/twitter-icon.png') }}"></a>
                                            <a href="#" class="mr-2"><img
                                                    src="{{ frontAssets('beneficiary/images/facebook-icon.png') }}"></a>
                                            <a href="#" class="mr-2"><img
                                                    src="{{ frontAssets('beneficiary/images/instagram-icon.png') }}"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 align-self-center">
                                        <a href="#" class=" btn btn-outline-primary px-4 border-radius-30">SEND</a>
                                    </div>
                                </div>
                                <div class="row justify-content-center border-bottom pb-3 pt-2">
                                    <div class="col-md-8">
                                        <p class="text-black medium font-14 mb-1">Headline goes here lorem ipsum</p>
                                        <p class="text-black font-14 mb-0"><img
                                                src="{{ frontAssets('beneficiary/images/calendar.png') }}"
                                                class="img-fluid mr-2">09 Oct, 2020 - 15 Oct, 2020</p>
                                        <div class="d-flex mt-2">
                                            <a href="#" class="mr-2"><img
                                                    src="{{ frontAssets('beneficiary/images/twitter-icon.png') }}"></a>
                                            <a href="#" class="mr-2"><img
                                                    src="{{ frontAssets('beneficiary/images/facebook-icon.png') }}"></a>
                                            <a href="#" class="mr-2"><img
                                                    src="{{ frontAssets('beneficiary/images/instagram-icon.png') }}"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 align-self-center">
                                        <a href="#" class=" btn btn-outline-primary px-4 border-radius-30">SEND</a>
                                    </div>
                                </div>
                                <div class="form-group text-center mt-4">
                                    <a href="#" data-dismiss="modal"
                                        class=" btn btn-purple rounded-pill px-4 verify-otp-btn px-4"
                                        data-target="#submit-contract-modal" data-toggle="modal">DONE</a>
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
    <link href="{{ frontAssets('beneficiary/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ frontAssets('beneficiary/product-tour/product-tour.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ frontAssets('beneficiary/css/bootstrap-tour.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ frontAssets('beneficiary/css/jalendar.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ frontAssets('beneficiary/css/bootstrap-datepicker3.css') }}" type="text/css" />

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
        // "use strict";
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
                        element: "#create-new",
                        content: "Start creating new ad request using this option.",
                        position: "bottom",
                    },
                    {
                        element: "#standing",
                        content: "Shows number of ads which are open for negotiation and deal.",
                        position: "bottom",
                    },
                    {
                        element: "#inprogress",
                        content: "Shows number of ad campaign which are currently ongoing.",
                        position: "bottom",
                    },
                    {
                        element: "#completed",
                        content: "Shows number of ads for which user has already signed contract and made payment.",
                        position: "bottom",
                    },
                    {
                        element: "#saved",
                        content: "Shows number of ads that are Saved for later which can be posted at anytime.",
                        position: "bottom",
                    }
                ]),
                tours.startTour()
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

    </script>
@endpush
