@extends('layout.app1')
@section('title')
Transaction History | Deluxe Crypto Signal Trading
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
                            <li class="breadcrumb-item active">Transaction History</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Transactions on your account</h4><br>
                                <!-- Nav tabs -->
                                <div class="default-tab">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; Deposit &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; Withdrawal &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel">
                                            <div class="p-t-15">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered zero-configuration">
                                                        <thead>
                                                            <tr>
                                                                <th>S/N</th>
                                                                <th>Amount</th>
                                                                <th>Payment Type</th>
                                                                <th>Status</th>
                                                                <th>Date Created</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $number = 1; ?>
                                                            @foreach($deposit as $dep)
                                                            <tr>
                                                                <td>{{ $number }}</td>
                                                                <td>${{ number_format($dep->amount, 0, '.', ', ') }}</td>
                                                                <td>{{ $dep->payment_type }}</td>
                                                                <td>
                                                                    @if($dep->status == 1 )
                                                                    <button class="btn btn-outline-success btn-sm">Confirmed</button>
                                                                    @elseif($dep->status == 0 )
                                                                    <button class="btn btn-outline-danger btn-sm">Pending</button>
                                                                    @endif
                                                                </td>
                                                                <td>{{ $dep->created_at->diffForHumans() }}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile">
                                            <div class="p-t-15">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered zero-configuration">
                                                        <thead>
                                                            <tr>
                                                                <th>S/N</th>
                                                                <th>Amount Requested</th>
                                                                <th>Receiving Mode</th>
                                                                <th>Status</th>
                                                                <th>Date Created</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $number = 1; ?>
                                                            @foreach($withdraw as $with)
                                                            <tr>
                                                                <td>{{ $number }}</td>
                                                                <td>${{ number_format($with->amount, 0, '.', ', ') }}</td>
                                                                <td>{{ $with->payment_type }}</td>
                                                                <td>
                                                                    @if($with->status == 1 )
                                                                    <button class="btn btn-outline-success btn-sm">Paid</button>
                                                                    @elseif($with->status == 0 )
                                                                    <button class="btn btn-outline-danger btn-sm">Pending</button>
                                                                    @endif
                                                                </td>
                                                                <td>{{ $with->created_at->diffForHumans() }}</td>
                                                            </tr>   
                                                            @endforeach
                                                        </tbody>
                                                    </table>
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