{{-- Extends layout --}}
@extends('bakend.layout')

@section('content')
    <div class="card">
        <div class="card-body p-2">
            <div class="form-group">
                <div class="form-check d-block">
                    <input class="form-check-input" checked type="checkbox" id="flexCheckDefault2">
                    <label class="form-check-label" for="flexCheckDefault2">
                        MTN MOBILE MONEY
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body p-3">
            <div class="row">
                <div class="col-md-6">
                    <dl class="text-white text-start">
                        <dt>Code marchant</dt>
                        <dd>833425</dd>
                        <dt>Name</dt>
                        <dd>ETS AGENSIC SOLUTION</dd>
                    </dl>
                    <img class="img-thumbnail" src="{{asset("backend/images/momo.jpg")}}">
                </div>
                <div class="col-md-6">
                    <form method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="email">Proof ID</label>
                            <input type="text" class="form-control" id="proof" name="id_proof">
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
