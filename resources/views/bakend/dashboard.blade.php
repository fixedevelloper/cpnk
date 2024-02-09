{{-- Extends layout --}}
@extends('bakend.layout')



{{-- Content --}}
@section('content')

    <div class="row pt-2">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card shining-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M12.2744 19.75V4.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M18.299 13.7002L12.275 19.7502L6.25 13.7002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <span class="fs-5 me-2">Deposit</span>
                                            <svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.86124 21.6224L11.2734 16.8577C11.6095 16.6417 12.041 16.6447 12.3718 16.8655L18.9661 21.2663C19.2968 21.4871 19.7283 21.4901 20.0644 21.2741L27.875 16.2534" stroke="#1aa053" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M26.7847 13.3246L31.6677 14.0197L30.4485 18.7565L26.7847 13.3246ZM30.2822 19.4024C30.2823 19.4023 30.2823 19.4021 30.2824 19.402L30.2822 19.4024ZM31.9991 14.0669L31.9995 14.0669L32.0418 13.7699L31.9995 14.0669C31.9994 14.0669 31.9993 14.0669 31.9991 14.0669Z" fill="#1aa053" stroke="#1aa053"/>
                                            </svg>
                                        </div>
                                        <div class="dropdown">
                                            <a href="#" class="text-gray" id="dropdownMenuButton36" data-bs-toggle="dropdown" aria-expanded="true">
                                                <svg width="22" height="5" viewBox="0 0 22 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6788 5C20.9595 5 22 3.96222 22 2.68866C22 1.41318 20.9595 0.373465 19.6788 0.373465C18.3981 0.373465 17.3576 1.41318 17.3576 2.68866C17.3576 3.96222 18.3981 5 19.6788 5ZM11.0005 5C12.2812 5 13.3217 3.96222 13.3217 2.68866C13.3217 1.41318 12.2812 0.373465 11.0005 0.373465C9.71976 0.373465 8.67929 1.41318 8.67929 2.68866C8.67929 3.96222 9.71976 5 11.0005 5ZM4.64239 2.68866C4.64239 3.96222 3.60192 5 2.3212 5C1.04047 5 0 3.96222 0 2.68866C0 1.41318 1.04047 0.373465 2.3212 0.373465C3.60192 0.373465 4.64239 1.41318 4.64239 2.68866Z" fill="#B3B3B7"></path>
                                                </svg>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton36" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 23px);" data-popper-placement="bottom-end">
                                                <li><a class="dropdown-item" href="#">This Week</a></li>
                                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                                <li><a class="dropdown-item" href="#">This Year</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="pt-3">
                                        <h4 class="counter" style="visibility: visible;">34.850,10 FCFA</h4>
                                        <div class="pt-3">
                                            <small class="text-success">+ 0.8%</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card shining-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M11.7261 4.25L11.7261 19.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M5.70149 10.2998L11.7255 4.2498L17.7505 10.2998" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <span class="fs-5 me-2">Withdraw</span>
                                            <svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.86124 21.6224L11.2734 16.8577C11.6095 16.6417 12.041 16.6447 12.3718 16.8655L18.9661 21.2663C19.2968 21.4871 19.7283 21.4901 20.0644 21.2741L27.875 16.2534" stroke="#1aa053" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M26.7847 13.3246L31.6677 14.0197L30.4485 18.7565L26.7847 13.3246ZM30.2822 19.4024C30.2823 19.4023 30.2823 19.4021 30.2824 19.402L30.2822 19.4024ZM31.9991 14.0669L31.9995 14.0669L32.0418 13.7699L31.9995 14.0669C31.9994 14.0669 31.9993 14.0669 31.9991 14.0669Z" fill="#1aa053" stroke="#1aa053"/>
                                            </svg>
                                        </div>
                                        <div class="dropdown">
                                            <a href="#" class="text-gray" id="dropdownMenuButton36" data-bs-toggle="dropdown" aria-expanded="true">
                                                <svg width="22" height="5" viewBox="0 0 22 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6788 5C20.9595 5 22 3.96222 22 2.68866C22 1.41318 20.9595 0.373465 19.6788 0.373465C18.3981 0.373465 17.3576 1.41318 17.3576 2.68866C17.3576 3.96222 18.3981 5 19.6788 5ZM11.0005 5C12.2812 5 13.3217 3.96222 13.3217 2.68866C13.3217 1.41318 12.2812 0.373465 11.0005 0.373465C9.71976 0.373465 8.67929 1.41318 8.67929 2.68866C8.67929 3.96222 9.71976 5 11.0005 5ZM4.64239 2.68866C4.64239 3.96222 3.60192 5 2.3212 5C1.04047 5 0 3.96222 0 2.68866C0 1.41318 1.04047 0.373465 2.3212 0.373465C3.60192 0.373465 4.64239 1.41318 4.64239 2.68866Z" fill="#B3B3B7"></path>
                                                </svg>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton36" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 23px);" data-popper-placement="bottom-end">
                                                <li><a class="dropdown-item" href="#">This Week</a></li>
                                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                                <li><a class="dropdown-item" href="#">This Year</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="progress-detail pt-3">
                                        <h4 class="counter" style="visibility: visible;">2,138.87 FCFA</h4>
                                        <div class="pt-3">
                                            <small class="text-success">+ 0.8%</small>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card shining-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M10.33 16.5928H4.0293" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M13.1406 6.90042H19.4413" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.72629 6.84625C8.72629 5.5506 7.66813 4.5 6.36314 4.5C5.05816 4.5 4 5.5506 4 6.84625C4 8.14191 5.05816 9.19251 6.36314 9.19251C7.66813 9.19251 8.72629 8.14191 8.72629 6.84625Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.0002 16.5538C20.0002 15.2581 18.9429 14.2075 17.6379 14.2075C16.3321 14.2075 15.2739 15.2581 15.2739 16.5538C15.2739 17.8494 16.3321 18.9 17.6379 18.9C18.9429 18.9 20.0002 17.8494 20.0002 16.5538Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <span class="fs-5 me-2">Investment</span>
                                            <svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.86124 21.6224L11.2734 16.8577C11.6095 16.6417 12.041 16.6447 12.3718 16.8655L18.9661 21.2663C19.2968 21.4871 19.7283 21.4901 20.0644 21.2741L27.875 16.2534" stroke="#1aa053" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M26.7847 13.3246L31.6677 14.0197L30.4485 18.7565L26.7847 13.3246ZM30.2822 19.4024C30.2823 19.4023 30.2823 19.4021 30.2824 19.402L30.2822 19.4024ZM31.9991 14.0669L31.9995 14.0669L32.0418 13.7699L31.9995 14.0669C31.9994 14.0669 31.9993 14.0669 31.9991 14.0669Z" fill="#1aa053" stroke="#1aa053"/>
                                            </svg>
                                        </div>
                                        <div class="dropdown">
                                            <a href="#" class="text-gray" id="dropdownMenuButton36" data-bs-toggle="dropdown" aria-expanded="true">
                                                <svg width="22" height="5" viewBox="0 0 22 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6788 5C20.9595 5 22 3.96222 22 2.68866C22 1.41318 20.9595 0.373465 19.6788 0.373465C18.3981 0.373465 17.3576 1.41318 17.3576 2.68866C17.3576 3.96222 18.3981 5 19.6788 5ZM11.0005 5C12.2812 5 13.3217 3.96222 13.3217 2.68866C13.3217 1.41318 12.2812 0.373465 11.0005 0.373465C9.71976 0.373465 8.67929 1.41318 8.67929 2.68866C8.67929 3.96222 9.71976 5 11.0005 5ZM4.64239 2.68866C4.64239 3.96222 3.60192 5 2.3212 5C1.04047 5 0 3.96222 0 2.68866C0 1.41318 1.04047 0.373465 2.3212 0.373465C3.60192 0.373465 4.64239 1.41318 4.64239 2.68866Z" fill="#B3B3B7"></path>
                                                </svg>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton36" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 23px);" data-popper-placement="bottom-end">
                                                <li><a class="dropdown-item" href="#">This Week</a></li>
                                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                                <li><a class="dropdown-item" href="#">This Year</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="progress-detail pt-3">
                                        <h4 class="counter" style="visibility: visible;">34.850,10 FCFA</h4>
                                        <div class="pt-3">
                                            <small class="text-success">+ 0.8%</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card card-block card-stretch custom-scroll">
                        <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                            <div class="caption">
                                <h4 class="font-weight-bold mb-2">Recent Investments</h4>
                            </div>
                            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                <input type="checkbox" class="btn-check" id="btncheck1">
                                <label class="btn btn-sm btn-secondary active rounded-start" for="btncheck1">Monthly</label>

                                <input type="checkbox" class="btn-check" id="btncheck2">
                                <label class="btn btn-sm btn-secondary " for="btncheck2">Weekly</label>

                                <input type="checkbox" class="btn-check" id="btncheck3">
                                <label class="btn btn-sm btn-secondary rounded-end" for="btncheck3">Today</label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table data-table mb-0">
                                    <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">24h %</th>
                                        <th scope="col">7d %</th>
                                        <th scope="col">Market Cap</th>
                                        <th scope="col">Volume(24th)</th>
                                        <th scope="col">Circulating</th>
                                        <th scope="col">Last 7 Days</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="white-space-no-wrap">
                                        <td>
                                            <img src="../assets/images/coins/02.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img23" />
                                            Bitcoin BTC<a href="#" class="button btn-primary badge ms-2" >Buy</a>
                                        </td>
                                        <td class="pe-2">$40,501.87</td>
                                        <td class="text-danger">
                                            <svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z" fill="#FF2E2E"/>
                                            </svg>
                                            6.93%
                                        </td>
                                        <td class="text-success"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z" fill="#00EC42"/>
                                            </svg>
                                            4.58%
                                        </td>
                                        <td>$123,456,789,159</td>
                                        <td>$373,359,580,155<br>
                                            <small class="ms-5">635,237 BTC</small>
                                        </td>
                                        <td class="ms-5">18,777,768 BTC</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <div id="sparklinechart-1"></div>
                                                <div class="dropdown ms-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" role="tablist" width="20" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-expanded="false" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                    </svg>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                                        <li><a class="dropdown-item" href="#">View Charts</a></li>
                                                        <li><a class="dropdown-item" href="#">View Markets</a></li>
                                                        <li><a class="dropdown-item" href="#">View Historical Data</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="white-space-no-wrap">
                                        <td>
                                            <img src="../assets/images/coins/02.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img23" />
                                            Ethereum ETH<a href="#" class="button btn-primary badge ms-2">Buy</a>
                                        </td>
                                        <td class="pe-2">$2,796.60</td>
                                        <td class="text-danger"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z" fill="#FF2E2E"/>
                                            </svg>
                                            3.33%
                                        </td>
                                        <td class="text-success"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z" fill="#00EC42"/>
                                            </svg>
                                            15.45%
                                        </td>
                                        <td>$123,456,789,159</td>
                                        <td>$373,359,580,155<br>
                                            <small class="ms-5">635,237 BTC</small>
                                        </td>
                                        <td class="ms-5">18,777,768 BTC</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <div id="sparklinechart-2"></div>
                                                <div class="dropdown ms-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" role="tablist" id="dropdownMenuButton8" data-bs-toggle="dropdown" aria-expanded="false" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                    </svg>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton8">
                                                        <li><a class="dropdown-item" href="#">View Charts</a></li>
                                                        <li><a class="dropdown-item" href="#">View Markets</a></li>
                                                        <li><a class="dropdown-item" href="#">View Historical Data</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="white-space-no-wrap">
                                        <td>
                                            <img src="../assets/images/coins/02.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img23" />
                                            Monero XMR<a href="#" class="button btn-primary badge ms-2">Buy</a>
                                        </td>
                                        <td class="pe-2">$1.00</td>
                                        <td class="text-success"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z" fill="#00EC42"/>
                                            </svg>
                                            0.01%
                                        </td>
                                        <td class="text-danger"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z" fill="#FF2E2E"/>
                                            </svg>
                                            0.02%
                                        </td>
                                        <td>$123,456,789,159</td>
                                        <td>$373,359,580,155<br>
                                            <small class="ms-5">635,237 BTC</small>
                                        </td>
                                        <td class="ms-5">18,777,768 BTC</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <div id="sparklinechart-3"></div>
                                                <div class="dropdown ms-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" role="tablist" id="dropdownMenuButton9" data-bs-toggle="dropdown" aria-expanded="false" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                    </svg>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton9">
                                                        <li><a class="dropdown-item" href="#">View Charts</a></li>
                                                        <li><a class="dropdown-item" href="#">View Markets</a></li>
                                                        <li><a class="dropdown-item" href="#">View Historical Data</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="white-space-no-wrap">
                                        <td>
                                            <img src="../assets/images/coins/02.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img23" />
                                            Litecoin LTC<a href="#" class="button btn-primary badge ms-2" >Buy</a>
                                        </td>
                                        <td class="pe-2">$40,501.87</td>
                                        <td class="text-danger"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z" fill="#FF2E2E"/>
                                            </svg>
                                            6.93%
                                        </td>
                                        <td class="text-success">
                                            <svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z" fill="#00EC42"/>
                                            </svg>
                                            4.58%
                                        </td>
                                        <td>$123,456,789,159</td>
                                        <td>$373,359,580,155<br>
                                            <small class="ms-5">635,237 BTC</small>
                                        </td>
                                        <td class="ms-5">18,777,768 BTC</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <div id="sparklinechart-4"></div>
                                                <div class="dropdown ms-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" role="tablist" width="20" id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                    </svg>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton10">
                                                        <li><a class="dropdown-item" href="#">View Charts</a></li>
                                                        <li><a class="dropdown-item" href="#">View Markets</a></li>
                                                        <li><a class="dropdown-item" href="#">View Historical Data</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="white-space-no-wrap">
                                        <td>
                                            <img src="../assets/images/coins/02.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img23" />
                                            Bitcoin BTC<a href="#" class="button btn-primary badge ms-2">Buy</a>
                                        </td>
                                        <td class="pe-2">$40,501.87</td>
                                        <td class="text-success"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z" fill="#00EC42"/>
                                            </svg>
                                            6.93%
                                        </td>
                                        <td class="text-danger"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z" fill="#FF2E2E"/>
                                            </svg>
                                            4.58%
                                        </td>
                                        <td>$123,456,789,159</td>
                                        <td>$373,359,580,155<br>
                                            <small class="ms-5">635,237 BTC</small>
                                        </td>
                                        <td class="ms-5">18,777,768 BTC</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <div id="sparklinechart-5"></div>
                                                <div class="dropdown ms-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" id="dropdownMenuButton11" role="tablist" data-bs-toggle="dropdown" aria-expanded="false" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                    </svg>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton11">
                                                        <li><a class="dropdown-item" href="#">View Charts</a></li>
                                                        <li><a class="dropdown-item" href="#">View Markets</a></li>
                                                        <li><a class="dropdown-item" href="#">View Historical Data</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between flex-wrap">
                            <div class="header-title">
                                <h4 class="card-title">Make an investment</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="d-grid gap-card" method="POST" action="{{route("make_investiment")}}">
                                @csrf
                                <div class= "d-grid grid-cols-5 gap-card mb-4">

                                </div>
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="basic-addon7">Amount</span>
                                    <input name="amount" type="text" class="form-control col-lg-8" placeholder="126.5" aria-label="Recipient's username" aria-describedby="basic-addon3">
                                </div>
                                <div class="d-grid grid-cols-1 gap-card justify-content-between">
                                    <div>
                                        <button type="submit" class="btn btn-primary w-100">
                                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.74074 8.25926L2 6.7037L16 1M8.74074 8.25926L10.8148 15L16 1M8.74074 8.25926L16 1" stroke="white"/>
                                            </svg>
                                            <span class="ms-2">Send Now</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-3">
                            <div class="header-title">
                                <h4 class="card-title">Earnings</h4>
                            </div>
                            <div class="dropdown">
                                <a href="#" class="btn btn-primary dropdown-toggle " id="dropdownMenuButton12" data-bs-toggle="dropdown" aria-expanded="false">
                                    This Week
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton12">
                                    <li><a class="dropdown-item" href="#">This Week</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div id="multiple-radialbar-chart" class="col-md-8 col-lg-8 multiple-radialbar-chart"></div>
                                <div class="d-grid gap col-md-4 col-lg-4">
                                    <div class="d-flex align-items-start">
                                        <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#00EC42">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="#00EC42"></circle>
                                            </g>
                                        </svg>
                                        <div class="ms-3">
                                            <span class="text-light">Bitcoin</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#FF2E2E">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="#FF2E2E"></circle>
                                            </g>
                                        </svg>
                                        <div class="ms-3">
                                            <span class="text-light">Litecoin</span>
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



@endsection
@push("scripts")
    {{-- <script src="{{asset('backend/js/dashboard-1.js')}}"></script>--}}
@endpush
