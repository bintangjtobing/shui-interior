<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Administrator Shui Interior</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="{!!asset('authen/css/bootstrap.min.css')!!}">

    <link rel="stylesheet" type="text/css"
        href="{!!asset('authen/fonts/font-awesome-4.7.0/css/font-awesome.min.css')!!}">

    <link rel="stylesheet" type="text/css" href="{!!asset('authen/css/animate.css')!!}">

    <link rel="stylesheet" type="text/css" href="{!!asset('authen/css/hamburgers.min.css')!!}">

    <link rel="stylesheet" type="text/css" href="{!!asset('authen/css/select2.min.css')!!}">

    <link rel="stylesheet" type="text/css" href="{!!asset('authen/css/util.css')!!}">
    <link rel="stylesheet" type="text/css" href="{!!asset('authen/css/main.css')!!}">

</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            @if(session('sukses'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Berhasil! {{session('sukses')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @if(session('gagal'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Auth failed! {{session('gagal')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{!!asset('authen/img/img-01.webp')!!}" alt="IMG">
                </div>

                <form action="/proses-login" method="POST">
                    @csrf
                    <span class="login100-form-title">
                        Member Login
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </form>
                <div class="text-center p-t-12">
                    <span class="txt1">
                        Forgot your password?
                    </span>
                    <a class="txt2" href="#">
                        Username / Email
                    </a>
                </div>
                <div class="text-center p-t-12">
                    <a class="txt2" href="#" data-toggle="modal" data-target="#daftarakun">
                        Create your Account
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
                {{-- MODAL DAFTAR AKUN --}}
                <div class="modal fade" id="daftarakun" tabindex="-1" role="dialog" aria-labelledby="daftarakun"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Registrasi akun</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <form action="/registrasiproses" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="">Nama lengkap</label>
                                            <input type="text" name="name" class="form-control" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Email</label>
                                            <input type="email" name="email" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="">Username</label>
                                            <input type="text" name="username" id="" class="form-control" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Password</label>
                                            <input type="password" name="password" id="" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{!!asset('authen/js/jquery-3.2.1.min.js')!!}" type="376cdb2c293fa6df4a98e4ac-text/javascript">
    </script>

    <script src="{!!asset('authen/js/popper.js')!!}" type="376cdb2c293fa6df4a98e4ac-text/javascript">
    </script>
    <script src="{!!asset('authen/js/bootstrap.min.js')!!}" type="376cdb2c293fa6df4a98e4ac-text/javascript">
    </script>

    <script src="{!!asset('authen/js/select2.min.js')!!}" type="376cdb2c293fa6df4a98e4ac-text/javascript">
    </script>

    <script src="{!!asset('authen/js/tilt.jquery.min.js')!!}" type="376cdb2c293fa6df4a98e4ac-text/javascript">
    </script>
    <script type="376cdb2c293fa6df4a98e4ac-text/javascript">
        $('.js-tilt').tilt({
            scale: 1.1
        })

    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
        type="376cdb2c293fa6df4a98e4ac-text/javascript"></script>
    <script type="376cdb2c293fa6df4a98e4ac-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');

    </script>

    <script src="{!!asset('authen/js/main.js')!!}" type="376cdb2c293fa6df4a98e4ac-text/javascript"></script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="376cdb2c293fa6df4a98e4ac-|49" defer=""></script>
</body>

</html>
