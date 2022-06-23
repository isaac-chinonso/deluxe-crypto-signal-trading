@extends('layout.app')
@section('title')
Withdraw | Deluxe Crypto Signal Trading
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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Request Withdrawal</li>
                        </ol>
                    </div>
                </div>
                @include('include.success')
                @include('include.warning')
                @include('include.error')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="background-color: #eee;">
                            <div class="card-body">
                                <h4 class="card-title">Request for Withdrawal</h4><br>

                                <!-- row -->
                                <div class="pricing_table_one">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="pricing_table_content m-t-40">
                                                    <div class="package">Bitcoin</div>
                                                    <div class="price">$10 - $10,000</div>
                                                    <hr>
                                                    <ul class="price_list">
                                                        <li><i class="ion-checkmark"></i>Charges (Fixed):&nbsp;&nbsp;&nbsp;&nbsp;$0</li>
                                                        <li><i class="ion-checkmark"></i>Charges (%):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2%</li>
                                                        <li><i class="ion-checkmark"></i>Duration::&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Instant</li>
                                                    </ul><a href="#" class="btn price-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="mdi mdi-plus"></i>Request Withdrawal</a>
                                                </div>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalCenter">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Payment will be sent through your selected method.</h5>
                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                            </div>
                                                            <form method="POST" action="{{ url('/user/request-withdrawal') }}">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="amount" placeholder="Enter Amount here">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="payment_type" value="Bitcoin">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary">Submit Request</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="pricing_table_content">
                                                    <div class="package">Ethereum</div>
                                                    <div class="price">$10 - $2100</div>
                                                    <hr>
                                                    <ul class="price_list">
                                                        <li><i class="ion-checkmark"></i>Charges (Fixed):&nbsp;&nbsp;&nbsp;&nbsp;$0</li>
                                                        <li><i class="ion-checkmark"></i>Charges (%):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0%</li>
                                                        <li><i class="ion-checkmark"></i>Duration::&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Instant</li>
                                                    </ul><a href="#" class="btn price-btn" data-toggle="modal" data-target="#exampleModalCenter1"><i class="mdi mdi-plus"></i>Request Withdrawal</a>
                                                </div>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalCenter1">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Payment will be sent through your selected method.</h5>
                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                            </div>
                                                            <form method="POST" action="{{ url('/user/request-withdrawal') }}">
                                                            @csrf
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="amount" placeholder="Enter Amount here">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="payment_type" value="Ethereum">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary">Submit Request</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="pricing_table_content m-t-40">
                                                    <div class="package">Cardano</div>
                                                    <div class="price">$10 - $10,000</div>
                                                    <hr>
                                                    <ul class="price_list">
                                                        <li><i class="ion-checkmark"></i>Charges (Fixed):&nbsp;&nbsp;&nbsp;&nbsp;$0</li>
                                                        <li><i class="ion-checkmark"></i>Charges (%):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2%</li>
                                                        <li><i class="ion-checkmark"></i>Duration::&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Instant</li>
                                                    </ul><a href="#" class="btn price-btn" data-toggle="modal" data-target="#exampleModalCenter2"><i class="mdi mdi-plus"></i>Request Withdrawal</a>
                                                </div>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalCenter2">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Payment will be sent through your selected method.</h5>
                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                            </div>
                                                            <form method="POST" action="{{ url('/user/request-withdrawal') }}">
                                                            @csrf
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="amount" placeholder="Enter Amount here">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="payment_type" value="Cardano">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary">Submit Request</button>
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
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!-- #/ content body -->
@endsection