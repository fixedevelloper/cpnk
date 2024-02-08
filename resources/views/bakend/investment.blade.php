{{-- Extends layout --}}
@extends('bakend.layout')



{{-- Content --}}
@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between border-0">
            <div class="header-title ">
                <h4 class="card-title">All Investments</h4>
            </div>
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
                    @foreach($investiments as $transaction)
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
        </div>
    </div>
@endsection
@push("scripts")
    {{-- <script src="{{asset('backend/js/dashboard-1.js')}}"></script>--}}
@endpush
