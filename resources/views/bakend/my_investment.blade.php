{{-- Extends layout --}}
@extends('bakend.layout')



{{-- Content --}}
@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between border-0">
            <div class="header-title ">
                <h4 class="card-title">My Investiment</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="basic-table" class="table table-striped table-shadow mb-0" role="grid">
                    <thead class="border-0">
                    <tr>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Pourcentage</th>
                        <th>Duree(By Month)</th>
                        <th>Duree(By Days)</th>
                        <th>Amount total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($invests as $transaction)
                        <tr>
                            <td>{{$transaction->created_at}}</td>
                            <td>{{$transaction->amount}} FCFA</td>
                            <td>{{$transaction->pourcentage}}/Month</td>
                            <td>{{\App\Helpers\Helper::getTotalMonth($transaction->created_at)}}</td>
                            <td>{{\App\Helpers\Helper::getTotalDays($transaction->created_at)}}</td>
                            <td>{{($transaction->amount * ($transaction->pourcentage/100)*\App\Helpers\Helper::getTotalMonth($transaction->created_at))+$transaction->amount}} FCFA</td>
                       </tr>
                    @endforeach
                    </tbody>
                    <tfoot>

                    </tfoot>
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
