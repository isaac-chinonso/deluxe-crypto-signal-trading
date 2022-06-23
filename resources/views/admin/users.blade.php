@extends('layout.apps1')
@section('title')
Users | Deluxe Crypto Signal Trading
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
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">User Details</h4>
                                <p class="text-muted"><code></code>
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Firstname</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Country</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $number = 1; ?>
                                            @foreach($users as $use)
                                            <tr>
                                                <td>{{ $number }}</td>
                                                <td>{{ $use->profile->first()->fname }}</td>
                                                <td>{{ $use->profile->first()->lname }}</td>
                                                <td>{{ $use->email }}</td>
                                                <td>{{ $use->profile->first()->phone }}</td>
                                                <td>{{ $use->profile->first()->country }}</td>
                                                <td>
                                                    @if($use->status == 1)
                                                    <span style="color:green;">Active</span>
                                                    @elseif($use->status == 0)
                                                    <span style="color:red;">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($use->status == 1)
                                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deactivate{{ $use->id }}">Deactivate</button>
                                                    @elseif($use->status == 0)
                                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#activate{{ $use->id }}">Activate</button>
                                                    @endif
                                                </td>
                                                    <!-- modal content -->
                                                    <div id="deactivate{{ $use->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel">Deactivate User</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h4><strong>Confirm Deactivation</strong></h4>
                                                                    <p>Are you sure you want to Deactivate {{ $use->profile->first()->fname }}</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                                    <a href="{{ route('deactivateuser',$use->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Deactivate User</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal -->
                                                    <!-- modal content -->
                                                    <div id="activate{{ $use->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel">Activate Product</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h4><strong>Confirm Activation</strong></h4>
                                                                    <p>Are you sure you want to Activate {{ $use->profile->first()->fname }}</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                                    <a href="{{ route('activateuser',$use->id) }}" class="btn btn-success btn-sm waves-effect waves-light">Activate User</a>
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