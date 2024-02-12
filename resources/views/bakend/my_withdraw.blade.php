{{-- Extends layout --}}
@extends('bakend.layout')



{{-- Content --}}
@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between border-0">
            <div class="header-title ">
                <h4 class="card-title">My Withdraw</h4>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table id="basic-table" class="table table-striped table-shadow mb-0" role="grid">
                    <thead class="border-0">
                    <tr>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Method</th>
                        <th>Status</th>
                        <th>Completion</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($withdraws as $transaction)
                        <tr>
                            <td>{{$transaction->created_at}}</td>
                            <td>{{$transaction->amount}}</td>
                            <td>{{$transaction->method_payment}}</td>
                            <td>{{$transaction->status}}</td>
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
                        {!! $withdraws->links() !!}
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
