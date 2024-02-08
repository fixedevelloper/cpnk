{{-- Extends layout --}}
@extends('bakend.layout')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between border-0">

                <h4 class="card-title">Detatil transaction</h4>

        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">
                    <form method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="email">Proof ID</label>
                            <input type="text" class="form-control" id="proof" value="{{$transaction->id_proof}}" disabled>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="amount">Amount</label>
                            <input type="text" value="{{$transaction->amount}}" class="form-control" id="amount" name="amount">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="amount">Amount</label>
                            <select class="form-select" name="status">
                                <option value="pending">Pending</option>
                                <option value="complete">Complete</option>
                                <option value="cancel">Cancel</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary rounded">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push("scripts")
    {{-- <script src="{{asset('backend/js/dashboard-1.js')}}"></script>--}}
@endpush
