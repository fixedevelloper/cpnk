<!DOCTYPE html>
<html lang="en">

<head>
    <title>Capital no risk </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Sites meta Data -->
    <meta name="application-name"
          content="Infinix force - Crypto, BitCoin, Etheruim">
    <meta name="author" content="thetork">
    <meta name="keywords" content="Infinix force - Crypto, BitCoin, Etheruim">
    <meta name="description"
          content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset("favicon.ico")}}" />


    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/typography.css')}}">
    <!-- main css for template -->
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/custom.css')}}">
</head>

<body data-spy="scroll" data-offset="80">

<!-- ===============>> Preloader start here <<================= -->
<!-- loading -->
<div id="loading">
    <div id="loading-center">
        <div class='loader loader2'>
            <div>
                <div>
                    <div>
                        <div>
                            <div>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- loading End -->
<!-- ===============>> Preloader end here <<================= -->
@include('front._partials._header')
@yield('content')
@include('front._partials._footer')

<!-- ===============>> scrollToTop start here <<================= -->
<a href="#" class="scrollToTop scrollToTop--style1"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
<!-- ===============>> scrollToTop ending here <<================= -->



<div class="modal fade iq-login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content blue-bg">
            <div class="modal-header text-center">
                <h4 class="modal-title ">Login</h4>
                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form  method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="contact-form">

                        <div class="section-field">
                            <input class="require" id="contact_phone" type="text" placeholder="Phone*" name="phone">
                        </div>
                        <div class="section-field">
                            <input class="require" id="contact_password" type="password" placeholder="Password*" name="password">
                        </div>
                        <button type="submit" class="button iq-mtb-10">Sign In</button>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-sm-6 text-end">
                                <a href="javascript:void(0)">Forgot Password</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer text-center">
                <div> Don't Have an Account? <a  data-bs-toggle="modal" data-bs-target=".iq-register" data-whatever="@mdo" href="javascript:void(0)" class="iq-font-yellow">Register Now</a></div>
                <ul class="iq-media-blog iq-mt-20">
                    <li><a href="# "><i class="fa fa-twitter "></i></a></li>
                    <li><a href="# "><i class="fa fa-facebook "></i></a></li>
                    <li><a href="# "><i class="fa fa-google "></i></a></li>
                    <li><a href="# "><i class="fa fa-github "></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="modal fade iq-register" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content blue-bg">
            <div class="modal-header text-center">
                <h4 class="modal-title ">Register</h4>
                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('register_post')}}">
                    @csrf
                    <div class="contact-form">
                        <div class="section-field">
                            <input class="require" id="contact_name" type="text" placeholder="Name*" name="name">
                        </div>
                        <div class="section-field">
                            <input class="require" id="contact_phone" type="text" placeholder="Phone*" name="phone">
                        </div>
                        <div class="section-field">
                            <input class="require" id="contact_email" type="email" placeholder="Email*" name="email">
                        </div>
                        <div class="section-field">
                            <input class="require" id="contact_password" type="password" placeholder="Password*" name="password">
                        </div>

                        <button type="submit" class="button iq-mtb-10">Register</button>
                    </div>
                </form>

            </div>
            <div class="modal-footer text-center">
                <div> You Have an Account? <a data-bs-toggle="modal" data-bs-target=".iq-login" data-whatever="@mdo" href="javascript:void(0)" class="iq-font-yellow">Login</a></div>
                <ul class="iq-media-blog iq-mt-20">
                    <li><a href="# "><i class="fa fa-twitter "></i></a></li>
                    <li><a href="# "><i class="fa fa-facebook "></i></a></li>
                    <li><a href="# "><i class="fa fa-google "></i></a></li>
                    <li><a href="# "><i class="fa fa-github "></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- vendor plugins -->

<script src="{{asset('front/js/jquery-min.js')}}"></script>
<script src="{{asset('front/js/popper.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/all-plugins.js')}}"></script>
<script src="{{asset('front/js/timeline.min.js')}}"></script>


<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/js/particles1.min.js')}}"></script>
<script src="{{asset('front/js/app.js')}}"></script>
<script src="{{asset('front/js/stats.js')}}"></script>
@stack('scripts')
<script src="{{asset('front/js/custom.js')}}"></script>
</body>

</html>
