{{-- Extends layout --}}
@extends('bakend.layout')



{{-- Content --}}
@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between border-0">
            <div class="header-title ">
                <h4 class="card-title">My Deposit</h4>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push("scripts")
    {{-- <script src="{{asset('backend/js/dashboard-1.js')}}"></script>--}}
@endpush
