<!DOCTYPE html>
@inject('produk', 'App\produkDB', @$produk)
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('desc')">

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Bintang j Tobing" />
    <link rel="icon" type="image/png" href="{!!asset('storage/img/icon.png')!!}">
    <title>Shui Interior @yield('title')</title>

    <link href="{!!asset('css/plugins.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/style.css')!!}" rel="stylesheet">
    <link rel="stylesheet" href="{!!asset('fontawesome/css/all.min.css')!!}">
    <link rel="stylesheet" href="{!!asset('fontawesome/css/fontawesome.css')!!}">
    <link rel="stylesheet" href="{!!asset('dashboard_admin/dist/css/customstyle.css')!!}">

    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,800,700,600%7CRaleway:100,300,600,700,800"
        rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                xfbml: true,
                version: 'v6.0'
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/id_ID/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    </script>

    <!-- Your customer chat code -->
    <div class="fb-customerchat" attribution=setup_tool page_id="104925591111733" theme_color="#d6af42"
        logged_in_greeting="Halo.  Ada yang bisa kami bantu?" logged_out_greeting="Halo.  Ada yang bisa kami bantu?">
    </div>
    <div class="body-inner">
        <div id="topbar" class="d-none d-xl-block d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="top-menu">
                            <li><a href="tel:085370359971">Phone: +62 853 7373 0023</a></li>
                            <li><a href="tel:082176018371">Phone: +62 821 7601 8371</a></li>
                            <li><a href="mailto:info@shui-interior.com">Email: info@shui-interior.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 d-none d-sm-block">
                        <div class="social-icons social-icons-colored-hover">
                            <ul>
                                <li class="social-facebook"><a href="https://facebook.com/shuiinteriormedan"><i
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

                    <a href="/"><img src="{!!asset('storage/logo_shui_long.png')!!}" class="imglogosmj"
                            alt="logo shui interior"></a>
                    <div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>

                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    @yield('menu')
                                    <li><a href="/about">Tentang kami</a></li>
                                    <li><a href="/contact">Hubungi kami</a></li>
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
                        <div class="col-lg-4">
                            <div class="widget">
                                <div class="widget-title">Shui Interior</div>
                                <p class="mb-5">Built with love by <a href="https://bintangtobing.com">Bintang
                                        Tobing</a>
                                    <?php $yearCurrent = date('Y'); ?>
                                    <br> All rights reserved. Copyright © {{$yearCurrent}}. Bintang Tobing</p>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="widget">
                                <div class="widget-title">Toko Kami</div>
                                <h5>Medan</h5>
                                <p>Jl. Mustafa No. 80B<br>
                                    Pulo Brayan Darat I Kec.Medan Timur<br>
                                    Kota Medan, Sumatera Utara, 20239<br>
                                    <i class="fas fa-phone"></i> +62 853 7373 0023<br>
                                    <i class="fas fa-phone"></i> +62 821 7601 8371</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">

                    <div class="copyright-text text-center">&copy; {{$yearCurrent}} SHUI-INTERIOR
                        All Rights Reserved.
                    </div>
                </div>
            </div>
        </footer>

    </div>

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
    <script src="https://cdn.tiny.cloud/1/8ll77vzod9z7cah153mxwug6wu868fhxsr291kw3tqtbu9om/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            branding: false,
            menubar: false,
            setup: function (editor) {
                editor.on('change', function (e) {
                    editor.save();
                });
            }
        });

    </script>
</body>

</html>
