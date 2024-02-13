<!--Nav Start-->
<nav class="nav navbar navbar-expand-lg navbar-light iq-navbar border-bottom pb-lg-3  pt-lg-3 ">
    <div class="container-fluid navbar-inner">
        <a href="{{route("dashboard")}}" class="navbar-brand">
        </a>
        <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
            <i class="icon">
                <svg width="20px" height="20px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                </svg>
            </i>
        </div>
        <h4 class="title" data-toggle="copy" data-bs-toggle="tooltip" data-bs-placement="top">
            {{$page_title}}
        </h4>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
                  <span class="navbar-toggler-bar bar1 mt-2"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto navbar-list mb-2 mb-lg-0 align-items-center">
                <li class="nav-item dropdown " title="Make investment" data-toggle="copy" data-bs-toggle="tooltip" data-bs-placement="top">
                    <a href="#" class="nav-link fusus py-0 d-flex align-items-center"  id="mail-drop"  data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="h3">{{\Illuminate\Support\Facades\Auth::user()->sold}} FCFA </span>
                        <svg class=" amount-clignote" width="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.9028 8.85107L13.4596 12.4641C12.6201 13.1301 11.4389 13.1301 10.5994 12.4641L6.11865 8.85107" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M16.9089 21C19.9502 21.0084 22 18.5095 22 15.4384V8.57001C22 5.49883 19.9502 3 16.9089 3H7.09114C4.04979 3 2 5.49883 2 8.57001V15.4384C2 18.5095 4.04979 21.0084 7.09114 21H16.9089Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        <span class="bg-primary count-mail"></span>
                    </a>
                    <div class="sub-drop dropdown-menu dropdown-menu-end p-0" aria-labelledby="mail-drop">
                        <div class="card shadow-none p-2">
                            <div class="card-header d-flex justify-content-between py-3">
                                    <h4 class="px-0">Make an investment</h4>
                            </div>
                            <div class="card-body mt-3">
                                <form class="d-grid gap-card" method="POST" action="{{route("make_investiment")}}">
                                @csrf
                                    <div class="form-group mb-3">
                                    <div class="input-group">
                                        <input type="text" name="amount" class="form-control" placeholder="150" aria-label="Recipient's username" aria-describedby="basic-addon4">
                                        <span class="input-group-text" id="basic-addon45">FCFA</span>
                                    </div>
                                </div>
                                <button data-toggle="copy" data-bs-toggle="tooltip" data-bs-placement="top" title="Save your investment" class="btn btn-primary">Validate</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item mx-2">
                    <a href="{{route("make_deposit")}}"  class="nav-link btn btn-success text-white">
                        Deposit
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route("make_withdraw")}}"  class="nav-link btn btn-danger text-white">
                        Withdraw
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link py-0 d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       @if(is_null(\Illuminate\Support\Facades\Auth::user()->image))
                            <img src="{{asset("backend/images/avatars/01.png")}}" alt="User-Profile" class="img-fluid avatar avatar-50 avatar-rounded">
                        @else
                            <img src="{{asset('storage/uploads/'.\Illuminate\Support\Facades\Auth::user()->image)}}" alt="User-Profile" class="img-fluid avatar avatar-50 avatar-rounded">
                        @endif

                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li class="border-0"><a class="dropdown-item" href="{{route("profil")}}">Profile</a></li>
                        <li class="border-0"><a class="dropdown-item" href="/">Privacy Setting</a></li>
                        <li class="border-0"><hr class="m-0 dropdown-divider"></li>
                        <li class="border-0"><a class="dropdown-item" href="{{route('destroy')}}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>        <!--Nav End-->
