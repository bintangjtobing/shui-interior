<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Bintang j Tobing" />
    <link rel="icon" type="image/png" href="images/favicon.png">

    <title>CV. Sumber Mitra Sejati | Sumber Diesel</title>

    <link href="{!!asset('css/plugins.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/style.css')!!}" rel="stylesheet">
    <link rel="stylesheet" href="{!!asset('fontawesome/css/all.min.css')!!}">
    <link rel="stylesheet" href="{!!asset('fontawesome/css/fontawesome.css')!!}">

    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,800,700,600%7CRaleway:100,300,600,700,800"
        rel="stylesheet" type="text/css" />
</head>

<body>

    <div class="body-inner">

        <div id="topbar" class="d-none d-xl-block d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="top-menu">
                            <li><a href="/tel:081200000000">Phone: +62 812 0000-0000</a></li>
                            <li><a href="/mailto:info@sumberparts.com">Email: info@sumberparts.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 d-none d-sm-block">
                        <div class="social-icons social-icons-colored-hover">
                            <ul>
                                <li class="social-facebook"><a href="https://facebook.com/"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li class="social-instagram"><a href="https://instagram.com/"><i
                                            class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <header id="header">
            <div class="header-inner">
                <div class="container">

                    <div id="logo"> <a href="/"><span class="logo-default">SMJ</span><span
                                class="logo-dark">SMJ</span></a> </div>
                    <div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>

                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li class="dropdown"><a href="#">Shop</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="/hydraulic-dump-truck">Hydraulic Dump Truck</a>
                                            </li>
                                            <li><a href="/diesel">Diesel</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/about">About us</a></li>
                                    <li><a href="/contact">Contact us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        @yield('content')

        <footer id="footer">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="widget">
                                <div class="widget-title">Sumber Diesel</div>
                                <p class="mb-5">Built with love by <a href="https://infinitysolutions.co.id">Infinity
                                        Solutions</a>
                                    <br> All rights reserved. Copyright © 2019. Infinity Solutions.</p>
                            </div>
                        </div>
                        {{-- <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Features</div>
                                        <ul class="list">
                                            <li><a href="#">Layouts</a></li>
                                            <li><a href="#">Headers</a></li>
                                            <li><a href="#">Widgets</a></li>
                                            <li><a href="#">Footers</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">
                    <?php $yearCurrent = date('Y'); ?>
                    <div class="copyright-text text-center">&copy; {{$yearCurrent}} SUMBER DIESEL
                        All Rights Reserved.<a href="//infinitysolutions.co.id" target="_blank"> Infinity Solutions</a>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

    <script src="{!!asset('js/jquery.js')!!}"></script>
    <script src="{!!asset('js/plugins.js')!!}"></script>

    <script src="{!!asset('js/functions.js')!!}"></script>

    <script type='text/javascript'
        src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAZIus-_huNW25Jl7RPmHgoGZjD5udgBMI'></script>
    <script type="text/javascript" src="{!!asset('js/gmap3.min.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('js/map-styles.js')!!}"></script>
    <script src="{!!asset('fontawesome/js/all.min.js')!!}"></script>
    <script src="{!!asset('fontawesome/js/conflict-detection.min.js')!!}"></script>
    <script src="{!!asset('fontawesome/js/fontawesome.js')!!}"></script>
</body>

</html>
