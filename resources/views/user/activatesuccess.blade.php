@extends('layout.app')
@section('title')
Activate Account | Deluxe Crypto Signal Trading
@endsection
@section('content')

<div class="login-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card">
                            <div class="card-body">
                                <div class="logo text-center">
                                    <a href="index.html">
                                        <img src="../assets/images/logo1.png" alt="">
                                    </a>
                                </div><br><br>
                                <h4 class="text-center m-t-15">Congratulation, your account has been activaed successfully, click button below to continue</h4>
                                <br><br>
                                <a href="{{ route ('userdasboard') }}">
                                  <button class="btn btn-success btn-sm" align="center">
                                      Go to Dashboard
                                  </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection