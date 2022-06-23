@extends('layout.app1')
@section('title')
New Deposit | Deluxe Crypto Signal Trading
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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Deposit</a>
                            </li>
                            <li class="breadcrumb-item active">Payment</li>
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
                                <h4 class="card-title">Make Payment</h4>
                                <p class="text-muted"><code>You are to make payment using your preferred mode of payment below. Screenshot the proof of payment</code>
                                </p>

                                <div id="accordion-one" class="accordion">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Bitcoin <img src="../assets/images/btc.png"></h5>
                                                </div>
                                                <div id="collapseOne" class="collapse" data-parent="#accordion-one">
                                                    <div class="card-body">
                                                        <h5>BTC Address:</h5>
                                                        <p>3NaWPc561tsTFcDYXGVtgt4R3vYBhh7Pdq</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Ethereum <img src="../assets/images/eth.png">
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" data-parent="#accordion-one">
                                                    <div class="card-body">
                                                        <h5>ETH ADDRESS:</h5>
                                                        <p>0x90CBebF5626b187D17D750C64ded63AdCB4B7805</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Cardano <img src="../assets/images/ada.png"></h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" data-parent="#accordion-one">
                                                    <div class="card-body">
                                                        <h5>ADA ADDRESS:</h5>
                                                        <p>addr1vxvxrzw0thw4knuvqw33p023dfqgpf3vrqmc9kesz74xazqyvhgkq</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div><br><br>

                                <div class="card">
                                    <div class="card-header">
                                        Upload Payment proof after payment.
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <form method="POST" action="{{ url('/user/save-deposit') }}" enctype="multipart/form-data">
                                                @csrf
                                                    <div class="form-group">
                                                        <label>Amount ($)</label>
                                                        <input type="text" class="form-control" name="amount" placeholder="Enter Amount Paid">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Payment Mode Used</label>
                                                        <select class="form-control" name="payment_type">
                                                            <option selected disabled>Select Payment Mode</option>
                                                            <option value="Ethereum">Ethereum</option>
                                                            <option value="Bitcoin">Bitcoin</option>
                                                            <option value="Cardano">Cardano</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Upload Screenshot</label>
                                                        <input type="file" class="form-control" name="image">
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary btn-sm">Submit Payment</button>
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