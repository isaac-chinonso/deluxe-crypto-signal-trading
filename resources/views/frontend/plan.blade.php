@extends('layout.master1')
@section('title')
Our Plan | Deluxe Crypto Signal Trading
@endsection
@section('content')

<!-- CONTENT START -->
<div class="page-content">

<!-- INNER PAGE BANNER -->
<div class="wt-bnr-inr overlay-wraper" style="background-image:url(asset/images/banner/faq-banner.jpg);">
    <div class="overlay-main bg-black opacity-07"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <h1 class="text-white">Our Plan</h1>
        </div>
    </div>
</div>
<!-- INNER PAGE BANNER END -->

<!-- BREADCRUMB ROW -->
<div class="bg-gray-light p-tb20">
    <div class="container">
        <ul class="wt-breadcrumb breadcrumb-style-2">
            <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
            <li>Our Plan</li>
        </ul>
    </div>
</div>
<!-- BREADCRUMB ROW END -->

<!-- SECTION CONTENT -->
<div class="section-full p-t80 p-b50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- TITLE START-->
                <div class="section-head text-center">
                    <span class="wt-title-subline font-16 text-gray-dark m-b15">About Delux Crypto Signal Trading Plans</span>
                    <h2 class="text-uppercase">Our Plans</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator bg-primary"></div>
                    </div>
                </div>
                <!-- TITLE END-->

                <div class="m-b100">
                    <!-- PRICING STYLE-1 COLUMNS 3 WITH GAP -->
                    <div class="section-content">
                        <div class="pricingtable-row m-b30 p-lr15 no-col-gap">
                            <div class="row">

                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 m-b40">
                                    <div class="pricingtable-wrapper">
                                        <div class="pricingtable-inner">

                                            <div class="pricingtable-title">
                                                <h3>Basic Plan</h3>
                                            </div>

                                            <div class="pricingtable-price">
                                                <span class="pricingtable-bx">$1,000 - $20,000</span>
                                            </div>

                                            <ul class="pricingtable-features">
                                                <li><i class="fa fa-check"></i> 15% </li>
                                                <li><i class="fa fa-times"></i> Usually 24 Hours</li>
                                            </ul>

                                            <div class="pricingtable-footer">
                                                <a href="{{ url('/register') }}" class="site-button  text-uppercase">Invest Now</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 m-b40">
                                    <div class="pricingtable-wrapper">
                                        <div class="pricingtable-inner pricingtable-highlight">

                                            <div class="pricingtable-title">
                                                <h3>Gold Plan</h3>
                                            </div>

                                            <div class="pricingtable-price">
                                                <span class="pricingtable-bx">$25,000 - $100,000</span>
                                            </div>

                                            <ul class="pricingtable-features">
                                                <li><i class="fa fa-check"></i> 30% </li>
                                                <li><i class="fa fa-check"></i> Usually 72 Hours </li>
                                            </ul>

                                            <div class="pricingtable-footer">
                                                <a href="{{ url('/register') }}" class="site-button  text-uppercase">Invest Now</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 m-b240">
                                    <div class="pricingtable-wrapper">
                                        <div class="pricingtable-inner">

                                            <div class="pricingtable-title">
                                                <h3>Platinum Plan</h3>
                                            </div>

                                            <div class="pricingtable-price">
                                                <span class="pricingtable-bx">$150,000 - $500,000</span>
                                            </div>

                                            <ul class="pricingtable-features">
                                                <li><i class="fa fa-check"></i> 40% </li>
                                                <li><i class="fa fa-check"></i> Usually 1 Week</li>
                                            </ul>

                                            <div class="pricingtable-footer">
                                                <a href="{{ url('/register') }}" class="site-button  text-uppercase">Invest Now</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 m-b40">
                                    <div class="pricingtable-wrapper">
                                        <div class="pricingtable-inner">

                                            <div class="pricingtable-title">
                                                <h3>VIP Plan</h3>
                                            </div>

                                            <div class="pricingtable-price">
                                                <span class="pricingtable-bx">$500,000 - $2M</span>
                                            </div>



                                            <ul class="pricingtable-features">
                                                <li><i class="fa fa-check"></i> 50% </li>
                                                <li><i class="fa fa-check"></i> Usually 1 Month </li>
                                            </ul>

                                            <div class="pricingtable-footer">
                                                <a href="{{ url('/register') }}" class="site-button  text-uppercase">Invest Now</a>
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
<!-- SECTION CONTENT END -->

</div>
<!-- CONTENT END -->
@endsection