<!DOCTYPE html>

<html lang="en">

<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="asset/images/favicon.html" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="asset/images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>@yield('title')</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="asset/css/fontawesome/asset/css/font-awesome.min.css" />
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="asset/css/flaticon.min.css">
    <!-- ANIMATE STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="asset/css/animate.min.css">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="asset/css/owl.carousel.min.css">
    <!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap-select.min.css">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="asset/css/magnific-popup.min.css">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="asset/css/loader.min.css">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="asset/css/style.css">
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="asset/css/skin/skin-1.css">
    <!-- CUSTOM  STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="asset/css/custom.css">


    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="asset/plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="asset/plugins/revolution/revolution/css/navigation.css">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round:400,400i&amp;subset=latin-ext" rel="stylesheet">


</head>

<body id="bg">

    <div class="page-wraper">

        <!-- HEADER START -->
        <header class="site-header header-style-3 topbar-transparent">

            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="clearfix">
                            <div class="wt-topbar-left">
                                <ul class="list-unstyled e-p-bx pull-left">
                                    <li><i class="fa fa-envelope"></i>info@deluxcryptosignaltrading.com</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <li><i class="fa fa-phone"></i>(1) 9299-491213</li>
                                </ul>
                            </div>

                            <div class="wt-topbar-right">

                                <ul class="list-unstyled e-p-bx pull-right">
                                    <li><a href="{{ url('/register') }}"><i class="fa fa-sign-in"></i>Join Delux Crypto Signal Trading</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sticky-header main-bar-wraper">
                <div class="main-bar">
                    <div class="container">

                        <div class="logo-header mostion">
                            <a href="{{ url('/') }}">
                                <img src="asset/images/logo1.png" width="230" height="67" alt="" />
                            </a>
                        </div>

                        <!-- NAV Toggle Button -->
                        <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        <!-- MAIN Vav -->
                        <div class="header-nav navbar-collapse collapse ">
                            <ul class=" nav navbar-nav">
                                <li class="active">
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ url('/about') }}">About</a>
                                </li>
                                <li>
                                    <a href="{{ url('/services') }}">What we do</a>
                                </li>
                                <li>
                                    <a href="{{ url('/our-plan') }}">Our Plans</a>
                                </li>
                                <li>
                                    <a href="{{ url('/FAQ') }}">FAQ</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </header>
        <!-- HEADER END -->
        @yield('content')
        <!-- FOOTER START -->
        <footer class="site-footer footer-dark bg-no-repeat bg-full-height bg-center " style="background-image:url(asset/images/background/footer-bg.jpg);">
            <!-- FOOTER BLOCKES START -->
            <div class="footer-top overlay-wraper">
                <div class="overlay-main bg-black opacity-05"></div>
                <div class="container">
                    <div class="row">
                        <!-- ABOUT COMPANY -->
                        <div class="col-md-4 col-sm-6">
                            <div class="widget widget_about">
                                <h4 class="widget-title text-white">Who we are</h4>
                                <p>We believe that everyone deserves an equal chance at financial success. Our life mission, “Give to everyone the same opportunity in life” fuels us in our businesses.
                                </p>
                            </div>
                        </div>
                        <!-- USEFUL LINKS -->
                        <div class="col-md-4 col-sm-6">
                            <div class="widget widget_services">
                                <h4 class="widget-title text-white">Useful links</h4>
                                <ul>
                                    <li><a href="{{ url('/about') }}">About</a></li>
                                    <li><a href="{{ url('/FAQ') }}">FAQ</a></li>
                                    <li><a href="{{ url('/services') }}">Why Choose us</a></li>
                                    <li><a href="{{ url('/our-plan') }}">Our Plans</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- NEWSLETTER -->
                        <div class="col-md-4 col-sm-6">
                            <div class="widget widget_newsletter">
                                <h4 class="widget-title text-white">Newsletter</h4>
                                <div class="newsletter-bx">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                            <input name="news-letter" class="form-control" placeholder="ENTER YOUR EMAIL" type="text">
                                            <span class="input-group-btn">
                                            <button type="submit" class="site-button"><i class="fa fa-paper-plane-o"></i></button>
                                        </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- SOCIAL LINKS -->
                            <div class="widget widget_social_inks">
                                <h4 class="widget-title text-white">Social Links</h4>
                                <ul class="social-icons social-square social-darkest">
                                    <li>
                                        <a href="javascript:void(0);" class="fa fa-facebook"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="fa fa-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="fa fa-linkedin"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="fa fa-instagram"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom  overlay-wraper">
                <div class="overlay-main"></div>
                <div class="constrot-strip"></div>
                <div class="container p-t30">
                    <div class="row">
                        <div class="wt-footer-bot-left">
                            <span class="copyrights-text">© 2021 Delux Crpto Trading Signal. All Rights Reserved. Powered By <a href="#">Dcode Arena</a></span>
                        </div>
                        <div class="wt-footer-bot-right">
                            <ul class="copyrights-nav pull-right">
                                <li><a href="javascript:void(0);">Terms  & Condition</a></li>
                                <li><a href="javascript:void(0);">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->


        <!-- BUTTON TOP START -->
        <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>



    </div>

    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="cssload-container">
                <div class="cssload-dot bg-primary"><i class="fa fa-bitcoin"></i></div>
                <div class="step" id="cssload-s1"></div>
                <div class="step" id="cssload-s2"></div>
                <div class="step" id="cssload-s3"></div>
            </div>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->

    <!-- JAVASCRIPT  FILES ========================================= -->
    <script src="asset/js/jquery-1.12.4.min.js"></script>
    <!-- JQUERY.MIN JS -->
    <script src="asset/js/bootstrap.min.js"></script>
    <!-- BOOTSTRAP.MIN JS -->

    <script src="asset/js/bootstrap-select.min.js"></script>
    <!-- FORM JS -->
    <script src="asset/js/jquery.bootstrap-touchspin.min.js"></script>
    <!-- FORM JS -->

    <script src="asset/js/magnific-popup.min.js"></script>
    <!-- MAGNIFIC-POPUP JS -->

    <script src="asset/js/waypoints.min.js"></script>
    <!-- WAYPOINTS JS -->
    <script src="asset/js/counterup.min.js"></script>
    <!-- COUNTERUP JS -->
    <script src="asset/js/waypoints-sticky.min.js"></script>
    <!-- COUNTERUP JS -->

    <script src="asset/js/isotope.pkgd.min.js"></script>
    <!-- MASONRY  -->

    <script src="asset/js/owl.carousel.min.js"></script>
    <!-- OWL  SLIDER  -->

    <script src="asset/js/stellar.min.js"></script>
    <!-- PARALLAX BG IMAGE   -->
    <script src="asset/js/scrolla.min.js"></script>
    <!-- ON SCROLL CONTENT ANIMTE   -->

    <script src="asset/js/custom.js"></script>
    <!-- CUSTOM FUCTIONS  -->
    <script src="asset/js/shortcode.js"></script>
    <!-- SHORTCODE FUCTIONS  -->
    <script src="asset/js/switcher.js"></script>
    <!-- SWITCHER FUCTIONS  -->
    <script src="asset/js/jquery.bgscroll.js"></script>
    <!-- BACKGROUND SCROLL -->
    <script src="asset/js/tickerNews.min.js"></script>
    <!-- TICKERNEWS-->
    <!-- TICKERNEWS FUNCTiON -->
    <script type="text/javascript">
        jQuery(function() {
            var timer = !1;
            _Ticker = jQuery("#T1").newsTicker();
            _Ticker.on("mouseenter", function() {
                var __self = this;
                timer = setTimeout(function() {
                    __self.pauseTicker();
                }, 200);
            });
            _Ticker.on("mouseleave", function() {
                clearTimeout(timer);
                if (!timer) return !1;
                this.startTicker();
            });
        });
    </script>
    <!-- REVOLUTION JS FILES -->

    <script src="asset/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="asset/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="asset/plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>

    <!-- REVOLUTION SLIDER FUNCTION  ===== -->
    <script src="asset/js/rev-script-1.js"></script>


</body>


</html>