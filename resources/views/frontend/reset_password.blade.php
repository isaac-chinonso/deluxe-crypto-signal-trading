<!DOCTYPE html>
<html lang="en" class="h-100" id="login-page1">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Reset Password | Deluxe Crypto Signal Trading</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
</head>

<body class="h-100">
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50"><circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10"/></svg>
        </div>
    </div>
    <div class="login-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card">
                            <div class="card-body">
                                <div class="logo text-center">
                                    <a href="{{ url('/') }}">
                                        <img src="assets/images/logo1.png" alt="">
                                    </a>
                                </div>
                                <h4 class="text-center m-t-30">Password assistance</h4>
                                <p class="text-center" style="font-size:12px;"><i class="fa fa-info-circle" style="font-size:18px;"></i> &nbsp &nbsp Please enter the e-mail address associated with your Deluxe account. We will send you a link to this e-mail address to reset your password.</p>
                                <form method="post" action="{{ route('forget.password.post') }}" class="m-t-30 m-b-30">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Enter your e-mail address">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="text-center m-b-15 m-t-30">
                                        <button type="submit" class="btn btn-primary">Reset Password Link</button>
                                    </div><br>
                                    <h5 class="text-center"><a href="{{ url('/login') }}">RETURN TO LOGIN</a></h5>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
    <!-- Common JS -->
    <script src="assets/plugins/common/common.min.js"></script>
    <!-- Custom script -->
    <script src="assets/js/custom.min.js"></script>
</body>

</html>