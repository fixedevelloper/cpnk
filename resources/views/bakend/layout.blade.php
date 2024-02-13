
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CAPITALNORISK | Capital no risk</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset("favicon.ico")}}" />
    <link rel="stylesheet" href="{{asset("backend/css/core/libs.min.css")}}">
    <link rel="stylesheet" href="{{asset("backend/css/coinex.min.css?v=1.0.0")}}">
    <link rel="stylesheet" href="{{asset("backend/css/custom.css?v=1.0.0")}}">
</head>
<body class=" ">
<!-- loader Start -->
<div id="loading">
    <div class="loader simple-loader">
        <div class="loader-body"></div>
    </div>
</div>
<!-- loader END -->
@include("bakend.elements.sidebar")
<main class="main-content">
    <div class="position-relative">
        @include('bakend.elements.header')
    </div>
    <div class="container-fluid content-inner pb-0">
        @yield('content')
    </div>
    @include("bakend.elements.footer")
</main>

<!-- Backend Bundle JavaScript -->
<script src="{{asset("backend/js/core/libs.min.js")}}"></script>
<script src="{{asset("backend/js/core/external.min.js")}}"></script>
<!-- app JavaScript -->
<script src="{{asset("backend/js/coinex.js")}}"></script>
@stack("scripts")
<!-- Gsap Animation Init -->
<script src="{{asset("backend/vendor/gsap/gsap.min.js")}}"></script>
</body>
</html>
