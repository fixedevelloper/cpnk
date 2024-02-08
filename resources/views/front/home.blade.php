
@extends('front.layout')

@section('content')
    <!-- banner -->
    <div id="home" class="iq-banner-2">
        <div id="particles-js"></div>
        <div class="banner-info">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-lg-12">
                        <div class="banner-text text-center text-white">
                            <h1 class="text-white iq-tw-7 iq-mb-20">Earn up to <b class="iq-font-yellow"> 35%</b> of your deposit</h1>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <div class="iq-countdown">
                            <h5 class="iq-tw-6 text-white"><a href="javascript:void(0)"> Capitalnorisk </a>The African investment platform</h5>
                            <ul id="countdown">
                                <li class="border-white"><span class="days">00</span>
                                    <p class="days_text">Days</p>
                                </li>
                                <li class=" border-white"><span class="hours">00</span>
                                    <p class="hours_text">Hours</p>
                                </li>
                                <li class=" border-white"><span class="minutes">00</span>
                                    <p class="minutes_text">Minutes</p>
                                </li>
                                <li class="border-white"><span class="seconds">00</span>
                                    <p class="seconds_text">Seconds</p>
                                </li>
                            </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-cc-visa"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-paypal"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-bitcoin"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-credit-card-alt"></i></a></li>
                            </ul>
                            <a data-bs-toggle="modal" data-bs-target=".iq-register" data-whatever="@mdo" href="javascript:void(0)" class="button iq-mt-20 iq-ml-10">Registration</a>
                            <a href="javascript:void(0)" class="button bt-white iq-mt-20 iq-ml-10">White Paper</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner -->
    <!-- Main-Contain -->
    <div class="main-contain">
        <!-- Clients -->
        <div class="iq-our-clients iq-ptb-60 light-bg">
            <div class="container">
                <div class="row ">
                    <div class="col-sm-12">
                        <div class="heading-title">
                            <small class="iq-font-green">Main Paper</small>
                            <h2 class="title iq-tw-6">White Paper</h2>
                            <p>Lorem Ipsum is simply dummy text ever sincehar the 1500s, when an unknownshil printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 ">
                        <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="7" data-items-laptop="6" data-items-tab="5" data-items-mobile="2" data-items-mobile-sm="1" data-margin="30">
                            <div class="item"> <a href="javascript:void(0)"><img class="img-fluid center-block" src="{{asset("front/images/01.png")}}" alt="#"></a></div>
                            <div class="item"> <a href="javascript:void(0)"><img class="img-fluid center-block" src="{{asset("front/images/01.png")}}" alt="#"></a></div>
                            <div class="item"> <a href="javascript:void(0)"><img class="img-fluid center-block" src="{{asset("front/images/01.png")}}" alt="#"></a></div>
                            <div class="item"> <a href="javascript:void(0)"><img class="img-fluid center-block" src="{{asset("front/images/01.png")}}" alt="#"></a></div>
                            <div class="item"> <a href="javascript:void(0)"><img class="img-fluid center-block" src="{{asset("front/images/01.png")}}" alt="#"></a></div>
                            <div class="item"> <a href="javascript:void(0)"><img class="img-fluid center-block" src="{{asset("front/images/01.png")}}" alt="#"></a></div>
                            <div class="item"> <a href="javascript:void(0)"><img class="img-fluid center-block" src="{{asset("front/images/01.png")}}" alt="#"></a></div>
                            <div class="item"> <a href="javascript:void(0)"><img class="img-fluid center-block" src="{{asset("front/images/01.png")}}" alt="#"></a></div>
                            <div class="item"> <a href="javascript:void(0)"><img class="img-fluid center-block" src="{{asset("front/images/01.png")}}" alt="#"></a></div>
                            <div class="item"> <a href="javascript:void(0)"><img class="img-fluid center-block" src="{{asset("front/images/01.png")}}" alt="#"></a></div>
                            <div class="item"> <a href="javascript:void(0)"><img class="img-fluid center-block" src="{{asset("front/images/01.png")}}" alt="#"></a></div>
                            <div class="item"> <a href="javascript:void(0)"><img class="img-fluid center-block" src="{{asset("front/images/01.png")}}" alt="#"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Clients -->
        <!-- What is OVEX -->
        <section id="ico" class="overview-block-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <img src="images/about/09.png"  class="img-fluid"  alt="">
                    </div>
                    <div class="col-lg-6 align-self-center mt-5 mt-lg-0">
                        <div class="heading-title left">
                            <small class="iq-font-green">What is crypto</small>
                            <h2 class="iq-tw-6">coinex built a platform
                                to buy and sell shares.</h2>
                        </div>
                        <P>Here is 3 Easy Steps to Busy & Sell Bitcoin. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</P>
                        <p>Here is 3 Easy Steps to Busy & Sell Bitcoin. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        <a class="button iq-mt-20" href="javascript:void(0)" role="button">Buy Tokan</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- What is OVEX END -->
        <!-- About Us -->
        <section class="overview-block-pb">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title">
                            <small class="iq-font-green">Main Features</small>
                            <h2 class="title iq-tw-6">The Crypto Features</h2>
                            <p>Lorem Ipsum is simply dummy text ever sincehar the 1500s, when an unknownshil printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 iq-r-mt-40">
                            <div class="iq-small-icon">
                                <img src="{{asset("front/images/coin/10.png")}}" alt="icon" class="img-fluid" >
                                <h6 class="iq-mb-10">Safe & Secure</h6>
                                <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</P>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 iq-r-mt-40">
                            <div class="iq-small-icon">
                                <img src="{{asset("front/images/coin/10.png")}}" alt="icon" class="img-fluid">
                                <h6 class="iq-mb-10">Excerpt Tokens</h6>
                                <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</P>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 iq-r-mt-40">
                            <div class="iq-small-icon active">
                                <img src="{{asset("front/images/coin/10.png")}}" alt="icon" class="img-fluid">
                                <h6 class="iq-mb-10">Easy Payment</h6>
                                <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</P>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 iq-r-mt-40">
                            <div class="iq-small-icon">
                                <img src="{{asset("front/images/coin/10.png")}}" alt="icon" class="img-fluid">
                                <h6 class="iq-mb-10">Daily Cash Out</h6>
                                <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</P>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 iq-r-mt-40">
                            <div class="iq-small-icon">
                                <img src="{{asset("front/images/coin/10.png")}}" alt="icon" class="img-fluid">
                                <h6 class="iq-mb-10">Safe & Secure</h6>
                                <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</P>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 iq-r-mt-40">
                            <div class="iq-small-icon">
                                <img src="{{asset("front/images/coin/10.png")}}" alt="icon" class="img-fluid">
                                <h6 class="iq-mb-10">Excerpt Tokens</h6>
                                <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</P>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 iq-r-mt-40">
                            <div class="iq-small-icon active">
                                <img src="{{asset("front/images/coin/10.png")}}" alt="icon" class="img-fluid">
                                <h6 class="iq-mb-10">Easy Payment</h6>
                                <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</P>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 iq-r-mt-40">
                            <div class="iq-small-icon">
                                <img src="{{asset("front/images/coin/10.png")}}" alt="icon" class="img-fluid">
                                <h6 class="iq-mb-10">Daily Cash Out</h6>
                                <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us -->
        <!-- Our Mission -->
        <section class="overview-block-ptb">
            <div class="container">
                <div class="row flex-row-reverse ">
                    <div class="col-lg-6 align-self-center">
                        <img src="images/about/08.png"  class="img-fluid"  alt="">
                    </div>
                    <div class="col-lg-6 align-self-center mt-5 mt-lg-0">
                        <div class="heading-title left">
                            <small class="iq-font-green">Coinex chainblock</small>
                            <h2 class="iq-tw-6">Our Coinex Mission</h2>
                        </div>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                        <p>Here is 3 Easy Steps to Busy & Sell Bitcoin. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        <p>Here is 3 Easy Steps to Busy & Sell Bitcoin. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Mission END -->
        <!-- What is OVEX -->
        <section class="overview-block-ptb light-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center text-center">
                        <img  class="img-fluid m-auto d-block"  src="images/about/06.png" alt="">
                    </div>
                    <div class="col-lg-6 align-self-center mt-5 mt-lg-0">
                        <div class="heading-title left">
                            <small class="iq-font-green">What is Capital no risk</small>
                            <h2 class="iq-tw-6">coinex built a platform
                                to buy and sell shares.</h2>
                        </div>
                        <P>Here is 3 Easy Steps to Busy & Sell Bitcoin. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</P>
                        <p>Here is 3 Easy Steps to Busy & Sell Bitcoin. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        <a class="button iq-mt-20" href="javascript:void(0)" role="button">Registration</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- What is OVEX END -->
        <!-- Our Mission -->
        <section class="overview-block-ptb">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-6 align-self-center">
                        <div class="">
                            <img  class="img-fluid"  src="images/device/01.png" alt="#">
                            <a href="video/01.m4v" class="iq-video popup-youtube"><i class="fa fa-play-outline"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center mt-5 mt-lg-0">
                        <div class="heading-title left">
                            <small class="iq-font-green">Coinex chainblock</small>
                            <h2 class="iq-tw-6">Our Coinex Mission</h2>
                        </div>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                        <p>Here is 3 Easy Steps to Busy & Sell Bitcoin. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        <p>Here is 3 Easy Steps to Busy & Sell Bitcoin. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Mission END -->
        <!-- About Us -->
        <section id="product" class="overview-block-pb">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title">
                            <small class="iq-font-green">Features</small>
                            <h2 class="title iq-tw-6">Ecosystem key features</h2>
                            <p>Lorem Ipsum is simply dummy text ever sincehar the 1500s, when an unknownshil printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 iq-r-mt-40">
                            <div class="iq-small-icon">
                                <img src="images/icon/04.png" alt="icon" class="img-fluid">
                                <h6>Safe & Secure</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 iq-r-mt-40">
                            <div class="iq-small-icon">
                                <img src="images/icon/05.png" alt="icon" class="img-fluid">
                                <h6>Excerpt Tokens</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 iq-r-mt-40">
                            <div class="iq-small-icon active">
                                <img src="images/icon/06.png" alt="icon" class="img-fluid">
                                <h6>Easy Payment</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 iq-r-mt-40">
                            <div class="iq-small-icon">
                                <img src="images/icon/07.png" alt="icon" class="img-fluid">
                                <h6>Daily Cash Out</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 iq-r-mt-40">
                            <div class="iq-small-icon">
                                <img src="images/icon/08.png" alt="icon" class="img-fluid">
                                <h6>No Dilution</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 iq-r-mt-40">
                            <div class="iq-small-icon">
                                <img src="images/icon/08.png" alt="icon" class="img-fluid">
                                <h6>No Dilution</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 iq-r-mt-40">
                            <div class="iq-small-icon">
                                <img src="images/icon/07.png" alt="icon" class="img-fluid">
                                <h6>Smart App</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 iq-r-mt-40">
                            <div class="iq-small-icon active">
                                <img src="images/icon/06.png" alt="icon" class="img-fluid">
                                <h6>Easy Payment</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 iq-r-mt-40">
                            <div class="iq-small-icon">
                                <img src="images/icon/05.png" alt="icon" class="img-fluid">
                                <h6>Excerpt Tokens</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 iq-r-mt-40">
                            <div class="iq-small-icon">
                                <img src="images/icon/04.png" alt="icon" class="img-fluid">
                                <h6>Safe & Secure</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us -->
        <!-- PARTNERS -->
        <section class="iq-partners overview-block-pb">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title">
                            <small class="iq-font-green">Executive Partners</small>
                            <h2 class="title iq-tw-6">Partners & Supporters</h2>
                            <p>Lorem Ipsum is simply dummy text ever sincehar the 1500s, when an unknownshil printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="Signal-partners">
                            <img class="img-fluid center-block" src="images/clients/white/01.png" alt="#">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="Signal-partners">
                            <img class="img-fluid center-block" src="images/clients/white/02.png" alt="#">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="Signal-partners">
                            <img class="img-fluid center-block" src="images/clients/white/03.png" alt="#">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="Signal-partners">
                            <img class="img-fluid center-block" src="images/clients/white/04.png" alt="#">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="Signal-partners">
                            <img class="img-fluid center-block" src="images/clients/white/05.png" alt="#">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="Signal-partners">
                            <img class="img-fluid center-block" src="images/clients/white/06.png" alt="#">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="Signal-partners">
                            <img class="img-fluid center-block" src="images/clients/white/06.png" alt="#">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="Signal-partners">
                            <img class="img-fluid center-block" src="images/clients/white/05.png" alt="#">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="Signal-partners">
                            <img class="img-fluid center-block" src="images/clients/white/04.png" alt="#">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="Signal-partners">
                            <img class="img-fluid center-block" src="images/clients/white/05.png" alt="#">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="Signal-partners">
                            <img class="img-fluid center-block" src="images/clients/white/06.png" alt="#">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="Signal-partners">
                            <img class="img-fluid center-block" src="images/clients/white/01.png" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- PARTNERS END -->
        <!-- FAQ -->
        <section class="iq-anything overview-block-pb" id="faq">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title">
                            <small class="iq-font-green">Ask Anything</small>
                            <h2 class="title iq-tw-6">Frequently Asked Questions</h2>
                            <p>Lorem Ipsum is simply dummy text ever sincehar the 1500s, when an unknownshil printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 r9-mt-40">
                        <div class="iq-accordion">
                            <div class="iq-ad-block ad-active"> <a href="javascript:void(0)" class="ad-title iq-tw-6">Ipsum is simply dummy the printing?</a>
                                <div class="ad-details">It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</div>
                            </div>
                            <div class="iq-ad-block"> <a href="javascript:void(0)" class="ad-title iq-tw-6">Dummy the printing and type setting?</a>
                                <div class="ad-details">It has survived not only five centuries, but also the leap into electronic typesetting. It has survived not only five centuries, but also the leap into electronic typesetting.</div>
                            </div>
                            <div class="iq-ad-block"> <a href="javascript:void(0)" class="ad-title iq-tw-6">Standard dummy since the 1500s?</a>
                                <div class="ad-details">It has survived not only five centuries, but also the leap into electronic typesetting. It has survived not only five centuries, but also the leap into electronic typesetting.</div>
                            </div>
                            <div class="iq-ad-block"> <a href="javascript:void(0)" class="ad-title iq-tw-6">It has survived five centuries?</a>
                                <div class="ad-details">It has survived not only five centuries, but also the leap into electronic typesetting. It has survived not only five centuries, but also the leap into electronic typesetting.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ END -->
    </div>

@endsection
@push('scripts')
@endpush
