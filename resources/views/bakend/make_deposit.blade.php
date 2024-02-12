{{-- Extends layout --}}
@extends('bakend.layout')

@section('content')
    <div class="card">
        <div class="card-body p-2">
            <div class="row">
                <div class="form-check d-block col-md-3">
                    <input class="form-check-input" checked type="radio" id="momo" name="method">
                    <label class="form-check-label" for="momo">
                        MTN MOBILE MONEY
                    </label>
                </div>
                <div class="form-check d-block col-md-3">
                    <input class="form-check-input" type="radio" id="crypto" name="method">
                    <label class="form-check-label" for="crypto">
                        CRYPTO MONEY
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body p-3">
            <div class="row" id="momo_panel">
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
            <div class="row" id="crypto_panel">
                <div class="col-md-6">
                    <dl class="text-white text-start">
                        <h3>Instruction:</h3>
                        <ul>
                            <li>Check if your browser is compatible <br>
                            <button onclick="capital.initialiseEtheruim()" class="btn btn-sm btn-success">verify your browser</button>
                            </li>
                            <li>Connect your wallet <br>
                                <w3m-core-button></w3m-core-button>
                            </li>
                            <li>Enter Amount</li>
                            <li>Click send</li>
                        </ul>
                    </dl>
                </div>
                <div class="col-md-6">

                        <div class="form-group">
                            <label class="form-label" for="email">Amount</label>
                            <input type="text" class="form-control" id="amount">
                        </div>
                        <button type="button" onclick="capital.sendPayment()" class="btn btn-primary rounded">Send</button>

                </div>
            </div>
        </div>
    </div>
@endsection
@push("scripts")
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/web3@1.7.3/dist/web3.min.js"></script>
    <script src="https://bscscan.com/assets/js/custom/web3-eth.min.js"></script>
    <script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js" type="application/javascript"></script>
    <script src="{{asset("backend/js/contract/connect-wallet.js")}}" type="module"></script>
    <script src="{{asset("backend/js/contract/capitalnorisk.js")}}"></script>
    <script>
        $(function () {
            if( $('#momo').is(':checked') ){
                $('#crypto_panel').hide()
                $('#momo_panel').show()
            }
            if( $('#crypto').is(':checked') ){
                $('#crypto_panel').show()
                $('#momo_panel').hide()
            }
            $('#momo').change(function () {
                if( $('#momo').is(':checked') ){
                    $('#crypto_panel').hide()
                    $('#momo_panel').show()
                }
            })
            $('#crypto').change(function () {
                if( $('#crypto').is(':checked') ){
                    $('#crypto_panel').show()
                    $('#momo_panel').hide()
                }
            })
        })
    </script>
@endpush
