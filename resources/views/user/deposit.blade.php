@extends('layout.app1')
@section('title')
Deposit | Deluxe Crypto Signal Trading
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
                            <li class="breadcrumb-item active">Deposit</li>
                        </ol>
                    </div>
                </div>
                @include('include.success')
                @include('include.warning')
                @include('include.error')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Your deposits</h4>
                                <div class="text-right"></div><a href="{{ url('/user/new-deposit') }}"><button type="button" class="btn btn-primary"><i class="mdi mdi-plus"></i>New Deposit</button></a></div>
                            <!-- Nav tabs -->
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
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
    <!-- #/ content body -->
@endsection