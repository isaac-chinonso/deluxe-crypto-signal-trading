@extends('layout.app')
@section('title')
Packages | Deluxe Crypto Signal Trading
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
                            <li class="breadcrumb-item active">Trade</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="background-color: #eee;">
                            <div class="card-body">
                                <h4 class="card-title">Available packages</h4>

                                <!-- row -->
                                <div class="pricing_table_one">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="pricing_table_content m-t-40">
                                                    <div class="package">Plan A</div>
                                                    <div class="price">$1000</div>
                                                    <hr>
                                                    <ul class="price_list">
                                                        <li><i class="ion-checkmark"></i>Minimum Possible Deposit:&nbsp;&nbsp;$1000</li>
                                                        <li><i class="ion-checkmark"></i>Maximum Possible Deposit:&nbsp;&nbsp;$20,000</li>
                                                        <li><i class="ion-checkmark"></i>Duration:&nbsp;&nbsp;24 hours</li>
                                                        <li>
                                                            <form>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="" placeholder="$1000">
                                                                </div>
                                                            </form>

                                                        </li>
                                                    </ul><a href="{{ url('/user/new-deposit') }}" class="btn price-btn"><i class="mdi mdi-plus"></i>Join Plan</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="pricing_table_content m-t-40">
                                                    <div class="package">Plan B</div>
                                                    <div class="price">$25,000</div>
                                                    <hr>
                                                    <ul class="price_list">
                                                        <li><i class="ion-checkmark"></i>Minimum Possible Deposit:&nbsp;&nbsp;$25,000</li>
                                                        <li><i class="ion-checkmark"></i>Maximum Possible Deposit:&nbsp;&nbsp;$100,000</li>
                                                        <li><i class="ion-checkmark"></i>Duration:&nbsp;&nbsp;72 hours</li>
                                                        <li>
                                                            <form>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="" placeholder="$25,000">
                                                                </div>
                                                            </form>

                                                        </li>
                                                    </ul><a href="{{ url('/user/new-deposit') }}" class="btn price-btn"><i class="mdi mdi-plus"></i>Join Plan</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="pricing_table_content m-t-40">
                                                    <div class="package">Plan C</div>
                                                    <div class="price">$150,000</div>
                                                    <hr>
                                                    <ul class="price_list">
                                                        <li><i class="ion-checkmark"></i>Minimum Possible Deposit:&nbsp;&nbsp;$150,000</li>
                                                        <li><i class="ion-checkmark"></i>Maximum Possible Deposit:&nbsp;&nbsp;$500,000</li>
                                                        <li><i class="ion-checkmark"></i>Duration:&nbsp;&nbsp;One Week</li>
                                                        <li>
                                                            <form>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="" placeholder="$150,000">
                                                                </div>
                                                            </form>

                                                        </li>
                                                    </ul><a href="{{ url('/user/new-deposit') }}" class="btn price-btn"><i class="mdi mdi-plus"></i>Join Plan</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="pricing_table_content m-t-40">
                                                    <div class="package">Plan D</div>
                                                    <div class="price">$500,000</div>
                                                    <hr>
                                                    <ul class="price_list">
                                                        <li><i class="ion-checkmark"></i>Minimum Possible Deposit:&nbsp;&nbsp;$500,000</li>
                                                        <li><i class="ion-checkmark"></i>Maximum Possible Deposit:&nbsp;&nbsp;$2M</li>
                                                        <li><i class="ion-checkmark"></i>Duration:&nbsp;&nbsp;One Month</li>
                                                        <li>
                                                            <form>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="" placeholder="$500,000">
                                                                </div>
                                                            </form>

                                                        </li>
                                                    </ul><a href="{{ url('/user/new-deposit') }}" class="btn price-btn"><i class="mdi mdi-plus"></i>Join Plan</a>
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