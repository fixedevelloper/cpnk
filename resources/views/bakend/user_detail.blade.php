{{-- Extends layout --}}
@extends('bakend.layout')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between border-0">
            <h4 class="card-title">Information User</h4>
        </div>
        <div class="card-body">
        </div>
    </div>
    <div class="card">
        <div class="card-header d-flex justify-content-between border-0">
            <h4 class="card-title">Deposit/Withdraw</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="basic-table" class="table table-striped table-shadow mb-0" role="grid">
                    <thead class="border-0">
                    <tr>
                        <th>Date</th>
                        <th>User</th>
                        <th>Type</th>
                        <th>Amount</th>
                        <th>Method</th>
                        <th>Status</th>
                        <th>Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($transactions as $transaction)
                        <tr>
                            <td>{{$transaction->created_at}}</td>
                            <td>{{$transaction->user->name}}</td>
                            @if($transaction->type=="withdraw")
                            <td class="text-danger"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z" fill="#FF2E2E"/>
                                </svg> {{$transaction->type}}</td>
                            @else
                                <td class="text-success"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z" fill="#00EC42"/>
                                    </svg> {{$transaction->type}}</td>
                            @endif
                            <td>{{$transaction->amount}}</td>
                            <td>{{$transaction->method_payment}}</td>
                            <td>{{$transaction->status}}</td>
                            <td><a class="btn btn-sm btn-success" href="{{route("transaction_detail",['id'=>$transaction->id])}}"><i class="fa fa-eye">
                                        <svg width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.1614 12.0531C15.1614 13.7991 13.7454 15.2141 11.9994 15.2141C10.2534 15.2141 8.83838 13.7991 8.83838 12.0531C8.83838 10.3061 10.2534 8.89111 11.9994 8.89111C13.7454 8.89111 15.1614 10.3061 15.1614 12.0531Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.998 19.355C15.806 19.355 19.289 16.617 21.25 12.053C19.289 7.48898 15.806 4.75098 11.998 4.75098H12.002C8.194 4.75098 4.711 7.48898 2.75 12.053C4.711 16.617 8.194 19.355 12.002 19.355H11.998Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <div class="row justify-content-center text-center mt-3">
                <div class="col-sm-auto">
                    <div class="d-flex justify-content-center ">
                        <!-- Pagination -->
                        {!! $transactions->links() !!}
                        <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                    </div>
                </div>
            </div>
            <!-- End Pagination -->
        </div>
    </div>
    <div class="card">
        <div class="card-header d-flex justify-content-between border-0">
            <h4 class="card-title">Investment</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="basic-table" class="table table-striped table-shadow mb-0" role="grid">
                    <thead class="border-0">
                    <tr>
                        <th>Date</th>
                        <th>User</th>
                        <th>Amount</th>
                        <th>Pourcentage</th>
                        <th>Duree(By Month)</th>
                        <th>Amount total</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($invests as $transaction)
                        <tr>
                            <td>{{$transaction->created_at}}</td>
                            <td>{{$transaction->user->name}}</td>
                            <td>{{$transaction->amount}} FCFA</td>
                            <td>{{$transaction->pourcentage}}/Month</td>
                            <td>{{\App\Helpers\Helper::getTotalMonth($transaction->created_at)}}</td>
                            <td>{{($transaction->amount * ($transaction->pourcentage/100)*\App\Helpers\Helper::getTotalMonth($transaction->created_at))+$transaction->amount}} FCFA</td>
                            <td></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <div class="row justify-content-center text-center mt-3">
                <div class="col-sm-auto">
                    <div class="d-flex justify-content-center ">
                        <!-- Pagination -->
                        {!! $invests->links() !!}
                        <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                    </div>
                </div>
            </div>
            <!-- End Pagination -->
        </div>
    </div>
@endsection
@push("scripts")
    {{-- <script src="{{asset('backend/js/dashboard-1.js')}}"></script>--}}
@endpush

