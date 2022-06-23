@extends('layout.app')
@section('title')
Withdrawal Info | Deluxe Crypto Signal Trading
@endsection
@section('content')

 <!-- content body -->
 <div class="content-body">
            <div class="container">
                <div class="row page-titles">
                    <div class="col p-0">
                        @if (date("H") < 12) <h4>Good morning <img src="../assets/images/morning1.png">, {{ Auth::user()->profile->first()->fname }}</h4>
                        @elseif (date("H") >= 12 && date("H") < 16) <h4>Good afternoon <img src="../assets/images/afternoon.png">, {{ Auth::user()->profile->first()->fname }}</h4>
                        @elseif (date("H") >= 15 && date("H") < 24)<h4>Good evening <img src="../assets/images/evening.png">, {{ Auth::user()->profile->first()->fname }}</h4>
                        @endif
                    </div>
                    <div class="col p-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Account</a>
                            </li>
                            <li class="breadcrumb-item active">Withdrawal Info</li>
                        </ol>
                    </div>
                </div>
                @include('include.success')
                @include('include.warning')
                @include('include.error')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" style="background-color: #ddd;">
                            <div class="card-body">
                                <h4 class="card-title">Add your withdrawal info</h4>
                                <p class="text-muted"><code></code>
                                </p>

                                <div id="accordion-one" class="accordion">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fa" aria-hidden="true"></i> Bitcoin</h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#accordion-one">
                                            <div class="card-body">
                                                <form method="POST" action="{{ route('updatebtcwithdrawinfo', $withdrawinfo->id) }}">
                                                @csrf
                                                    <div class="form-group">
                                                        <label>BTC ADDRESS</label>
                                                        <input type="text" class="form-control" name="btcaddress" value="{{ $withdrawinfo->btcaddress }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary btn-sm">Update Address</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa" aria-hidden="true"></i> Ethereum
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordion-one">
                                            <div class="card-body">
                                                <form method="POST" action="{{ route('updateethwithdrawinfo', $withdrawinfo->id) }}">
                                                @csrf
                                                    <div class="form-group">
                                                        <label>ETH ADDRESS</label>
                                                        <input type="text" class="form-control" name="ethwallet" value="{{ $withdrawinfo->ethwallet }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary btn-sm">Update Address</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa" aria-hidden="true"></i> Cardano</h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#accordion-one">
                                            <div class="card-body">
                                                <form method="POST" action="{{ route('updateadawithdrawinfo', $withdrawinfo->id) }}">
                                                @csrf
                                                    <div class="form-group">
                                                        <label>ADA ADDRESS</label>
                                                        <input type="text" class="form-control" name="adawallet" value="{{ $withdrawinfo->adawallet }}" placeholder="Enter ADA ADDRESS">
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary btn-sm">Update Address</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!-- #/ content body -->
        
@endsection