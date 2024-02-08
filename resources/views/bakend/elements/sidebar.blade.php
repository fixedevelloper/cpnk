<aside class="sidebar sidebar-default navs-rounded ">
    <div class="sidebar-header d-flex align-items-center justify-content-start">
        <a href="{{route("dashboard")}}" class="navbar-brand dis-none align-items-center">
            <img src="../assets/images/logo.svg" class="img-fluid "  alt="logo">            <h4 class="logo-title m-0">OINEX</h4>
        </a>
        <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
            <i class="icon">
                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5"></path>
                    <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5"></path>
                </svg>
            </i>
        </div>
    </div>
    <div class="sidebar-body p-0 data-scrollbar">
        <div class="navbar-collapse pe-3" id="sidebar">
            <ul class="navbar-nav iq-main-menu">
                <li class="nav-item ">
                    <a class="nav-link {{Request::is('dashboard')?'active':''}}" aria-current="page" href="{{route("dashboard")}}">
                        <i class="icon">
                            <svg width="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3 6.5C3 3.87479 3.02811 3 6.5 3C9.97189 3 10 3.87479 10 6.5C10 9.12521 10.0111 10 6.5 10C2.98893 10 3 9.12521 3 6.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14 6.5C14 3.87479 14.0281 3 17.5 3C20.9719 3 21 3.87479 21 6.5C21 9.12521 21.0111 10 17.5 10C13.9889 10 14 9.12521 14 6.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3 17.5C3 14.8748 3.02811 14 6.5 14C9.97189 14 10 14.8748 10 17.5C10 20.1252 10.0111 21 6.5 21C2.98893 21 3 20.1252 3 17.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14 17.5C14 14.8748 14.0281 14 17.5 14C20.9719 14 21 14.8748 21 17.5C21 20.1252 21.0111 21 17.5 21C13.9889 21 14 20.1252 14 17.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </i>
                        <span class="item-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-special" role="button" aria-expanded="false" aria-controls="sidebar-special">
                        <i class="icon">
                            <svg width="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M16.8397 20.1642V6.54639" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M20.9173 16.0681L16.8395 20.1648L12.7617 16.0681" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M6.91102 3.83276V17.4505" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M2.8335 7.92894L6.91127 3.83228L10.9891 7.92894" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </i>
                        <span class="item-name">Transactions</span>
                        <i class="right-icon">

                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </i>
                    </a>
                    <ul class="sub-nav collapse" id="sidebar-special" data-bs-parent="#sidebar">
                        <li class="nav-item">
                            <a class="nav-link {{Request::is('my_withdraw')?'active':''}}" href="{{route("my_withdraw")}}">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon">W </i>
                                <span class="item-name">Withdraw</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::is('my_deposit')?'active':''}} " href="{{route("my_deposit")}}">
                                <i class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon">D </i>
                                <span class="item-name">Deposit</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{Request::is('my_investment')?'active':''}}" aria-current="page" href="{{route("my_investment")}}">
                        <i class="icon">
                            <svg width="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.33 16.5928H4.0293" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M13.1406 6.90042H19.4413" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.72629 6.84625C8.72629 5.5506 7.66813 4.5 6.36314 4.5C5.05816 4.5 4 5.5506 4 6.84625C4 8.14191 5.05816 9.19251 6.36314 9.19251C7.66813 9.19251 8.72629 8.14191 8.72629 6.84625Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.0002 16.5538C20.0002 15.2581 18.9429 14.2075 17.6379 14.2075C16.3321 14.2075 15.2739 15.2581 15.2739 16.5538C15.2739 17.8494 16.3321 18.9 17.6379 18.9C18.9429 18.9 20.0002 17.8494 20.0002 16.5538Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </i>
                        <span class="item-name">Investment</span>
                    </a>
                </li>
                <li><hr class="hr-horizontal"></li>

            </ul>
        </div>
    </div>
</aside>
