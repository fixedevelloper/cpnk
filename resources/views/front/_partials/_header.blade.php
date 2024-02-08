<!-- Header -->
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="javascript:void(0)">
                        <img src="{{asset("front/images/logo.png")}}" class="img-fluid" alt="CAPITALNORISK">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="la la-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto w-100 justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link active" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#ico">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#faq">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav justify-content-end">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                English
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)">French</a>
                                <a class="dropdown-item" href="javascript:void(0)">English</a>
                            </div>
                        </li>
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <li class="nav-item dropdown" >
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                    <img src="{{asset("backend/images/avatars/02.png")}}" alt="User-Profile" class="img-fluid avatar avatar-50 avatar-rounded">
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('profil')}}">Profile</a>
                                    <a class="dropdown-item" href="/">Privacy Setting</a>
                                    <a class="border-0"><hr class="m-0 dropdown-divider"></a>
                                    <a class="dropdown-item" href="{{route('destroy')}}">Logout</a>
                                </div>
                            </li>
                        @else

                            <li class="nav-item iq-mlr-0">
                                <a class="nav-link button" data-bs-toggle="modal" data-bs-target=".iq-login" data-whatever="@mdo" href="javascript:void(0)">Login</a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header END -->
