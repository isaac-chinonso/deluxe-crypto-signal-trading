@extends('layout.app')
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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Support</li>
                        </ol>
                    </div>
                </div>
                @include('include.success')
                @include('include.warning')
                @include('include.error')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-center">Deluxe Crypto Signal Trading Support </h4>
                                <p class=" text-muted text-center"><code>For inquiries, suggestions or complains. Drop us a Message</code>
                                </p>
                                <div class="row">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-8">
                                        <fieldset>
                                            <form method="POST" action="{{ url('/user/send-support') }}">
                                            @csrf
                                                <div class="form-group">
                                                    <label>Subject</label>
                                                    <input type="text" class="form-control" name="support_subject" placeholder="Enter Subject">
                                                </div>
                                                <div class="form-group">
                                                    <label>Message</label>
                                                    <textarea class="form-control" name="support_message" placeholder="Enter Message"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                                                </div>
                                            </form>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-2">
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