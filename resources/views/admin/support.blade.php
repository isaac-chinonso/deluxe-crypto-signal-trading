@extends('layout.apps1')
@section('title')
Support | Deluxe Crypto Signal Trading
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
                            <li class="breadcrumb-item active">Support</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Support</h4>
                                <p class="text-muted"><code></code>
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Fullname</th>
                                                <th>Email Address</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $number = 1; ?>
                                            @foreach($support as $supp)
                                            <tr>
                                                <td>{{ $number }}
                                                <td>{{ $supp->user->profile->first()->fname }} {{ $supp->user->profile->first()->lname }}</td>
                                                <td>{{ $supp->user->email }}</td>
                                                <td>{{ $supp->support_subject }}</td>
                                                <td>{{ $supp->support_message }}</td>
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