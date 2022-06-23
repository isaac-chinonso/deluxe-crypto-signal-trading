@extends('layout.app')
@section('title')
Change Password | Deluxe Crypto Signal Trading
@endsection
@section('content')

<!-- content body -->
<div class="content-body">
            <div class="container">
                @include('include.success')
                @include('include.warning')
                @include('include.error')
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
                            <li class="breadcrumb-item active">Change Password</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h2>Change Your Password</h2><br>
                               
                                <div class="basic-form">
                                    <form method="post" action="{{ route('change.password') }}">
                                    @csrf 
                                        <div class="form-group">
                                            <label>Current Password</label>
                                            <input type="password" class="form-control input-default" placeholder="Current Password" name="current_password" autocomplete="current-password">
                                        </div>
                                        <div class="form-group">
                                            <label>Enter New Password</label>
                                            <input type="password" class="form-control input-default" placeholder="New Password" name="new_password" autocomplete="current-password">
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm New Password</label>
                                            <input type="password" class="form-control input-default" placeholder="Confirm New Password" name="new_confirm_password" autocomplete="current-password">
                                        </div>
                                        <button class="btn btn-primary" type="submit">Update Password</button>
                                    </form>
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