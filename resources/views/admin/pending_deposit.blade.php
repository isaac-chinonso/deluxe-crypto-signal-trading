@extends('layout.apps1')
@section('title')
Pending Deposit | Deluxe Crypto Signal Trading
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
                            <li class="breadcrumb-item active">Deposit</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pending Deposit</h4>
                                <p class="text-muted"><code></code>
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Fullname</th>
                                                <th>Country</th>
                                                <th>Amount</th>
                                                <th>Payment Type</th>
                                                <th>Proof of Payment</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $number = 1; ?>
                                            @foreach($pendingdeposit as $pendepo)
                                            <tr>
                                                <td>{{ $number }}</td>
                                                <td>{{ $pendepo->user->profile->first()->fname }} {{ $pendepo->user->profile->first()->lname }}</td>
                                                <td>{{ $pendepo->user->profile->first()->country }}</td>
                                                <td>${{ number_format($pendepo->amount, 0, '.', ', ') }}</td>
                                                <td>{{ $pendepo->payment_type }}</td>
                                                <td>
                                                    <a href="../upload/{{ $pendepo->image->first()->source }}" target="_blank"><img src="../upload/{{ $pendepo->image->first()->source }}" title="{{ $pendepo->name }}" width="50px" height="50px"></a>
                                                </td>
                                                <td>
                                                    @if($pendepo->status == 0)
                                                    <span style="color:red;">Pending Confirmation</span>
                                                    @endif
                                                </td>
                                                <td><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#activate{{ $pendepo->id }}">Approve Deposit</button></td>
                                                    <!-- modal content -->
                                                    <div id="activate{{ $pendepo->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel">Approve Deposit</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h4><strong>Confirm Approval</strong></h4>
                                                                    <p>Are you sure you want to Approve Depost from {{ $pendepo->user->profile->first()->fname }}</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                                    <a href="{{ route('approvedeposit',$pendepo->id) }}" class="btn btn-success btn-sm waves-effect waves-light">Approve Deposit</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal -->
                                            </tr>
                                            <?php $number++; ?>
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