<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <link href="../assets/css/style.css" rel="stylesheet">
    <script src="../assets/js/modernizr-3.6.0.min.js"></script>
    <link href="../assets/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body class="v-light vertical-nav fix-header fix-sidebar">
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50"><circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10"/></svg>
        </div>
    </div>
    <div id="main-wrapper">
        <!-- header -->
        <div class="header">
            <div class="nav-header">
                <div class="brand-logo"><span class=""><img src="../assets/images/logo1.png" alt=""></span>
                </div>
                <div class="nav-control">
                    <div class="hamburger"><span class="line"></span> <span class="line"></span> <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="header-content">
                <div class="header-right">
                    <ul>
                        <li class="icons"><a href="javascript:void(0)"><i class="mdi mdi-bell f-s-18" aria-hidden="true"></i><div class="pulse-css"></div></a>
                            <div class="drop-down animated bounceInDown">
                                <div class="dropdown-content-heading"><span class="text-left">Recent Notifications</span>
                                </div>
                                <div class="dropdown-content-body">
                                    <!-- <ul>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img" src="../../../assets/images/avatar/1.jpg" alt="">
                                                <div class="notification-content"><small class="notification-timestamp pull-right">02:34 PM</small>
                                                    <div class="notification-heading">Mr. Saifun</div>
                                                    <div class="notification-text">5 members joined today</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="text-center"><a href="#" class="more-link">See All</a>
                                        </li>
                                    </ul> -->
                                </div>
                            </div>
                        </li>
                        <li class="icons"><a href="javascript:void(0)"><i class="mdi mdi-account f-s-20" aria-hidden="true"></i></a>
                            <div class="drop-down dropdown-profile animated bounceInDown">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="{{ url('/user/change-password') }}"><i class="mdi mdi-settings"></i> <span>Setting</span></a>
                                        </li>
                                        <li><a href="{{ url('/logout') }}"><i class="icon-power"></i> <span>Logout</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #/ header -->
        <!-- sidebar -->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
            <ul class="metismenu" id="menu">
                    <li class="nav-label">Main</li>
                    <li><a href="{{ url('/user/dashboard') }}"><i class=" mdi mdi-view-dashboard"></i> <span class="nav-text">Dashboard</span></a>
                    </li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-account-circle"></i> <span class="nav-text">Account</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('/user/withdrawal-info') }}">Withdrawal Info</a>
                            </li>
                            <li><a href="{{ url('/user/notification') }}">Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/user/support') }}"><i class="mdi mdi-alert-decagram"></i> <span class="nav-text">Supports</span></a></li>
                    <li><a href="{{ url('/user/tradinghistory') }}"><i class="mdi mdi-chart-bar"></i> <span class="nav-text">P/L Record</span></a></li>
                    <li><a href="{{ url('/user/transactionhistory') }}"><i class="mdi mdi-clipboard-text"></i> <span class="nav-text">Transaction History</span></a></li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-credit-card"></i> <span class="nav-text">Deposit/Withdrawal</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('/user/withdraw') }}">Withdrawal</a>
                            </li>
                            <li><a href="{{ url('/user/deposit') }}">Deposit</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-database"></i> <span class="nav-text">Trades</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('/user/packages') }}">Trade Packages</a>
                            </li>
                            <li><a href="#">My Trade</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #/ nk nav scroll -->
        </div>
        <!-- #/ sidebar -->
        @yield('content')
        <!-- footer -->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; <a href="#">Deluxe Crypto Signal Trading</a> 2021. Powered By <a href="#">Dcode Arena</a></p>
            </div>
        </div>
        <!-- #/ footer -->
    </div>
    <!-- Common JS -->
    <script src="../assets/plugins/common/common.min.js"></script>
    <!-- Custom script -->
    <script src="../assets/js/custom.min.js"></script>
    <!-- Chartjs chart -->
    <script src="../assets/plugins/chartjs/Chart.bundle.js"></script>
    <!-- Custom dashboard script -->
    <script src="../assets/js/dashboard-1.js"></script>
    <script src="../assets/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
</body>

</html>

</html>