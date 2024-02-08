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
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label class="form-label" for="email">Name receiver</label>
                            <input type="text" class="form-control" id="proof">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email">Phone number</label>
                            <input type="text" class="form-control" id="phone">
                        </div>
                        <button type="submit" class="btn btn-primary rounded">Withdraw</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push("scripts")
    {{-- <script src="{{asset('backend/js/dashboard-1.js')}}"></script>--}}
@endpush
