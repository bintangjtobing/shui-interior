<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Shui Interior | @yield('title')</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{!!asset('dashboard_admin/plugins/fontawesome-free/css/all.min.css')!!}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="{!!asset('dashboard_admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')!!}">
    <link rel="icon" type="image/png" href="{!!asset('storage/img/icon.png')!!}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{!!asset('dashboard_admin/dist/css/adminlte.min.css')!!}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{!!asset('dashboard_admin/dist/css/customstyle.css')!!}">
    <link rel="stylesheet" href="{!!asset('dashboard_admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css')!!}">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Homepage</a>
                </li>
                {{-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="/help-support" class="nav-link">Having a trouble?</a>
                </li> --}}
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                {{-- <li class="nav-item">
                    <a href="/logout" class="nav-link">
                        <i class="fas fa-power-off"></i> Logout
                    </a>
                </li> --}}
                <li class="nav-item dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link">
                        <img src="{!!asset('dashboard_admin/dist/img/user2-160x160.jpg')!!}"
                            class="img-circle elevation-2 gambardrop" alt="User Image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-user mr-2"></i> Pengaturan profil
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="/logout" class="dropdown-item">
                            <i class="fas fa-power-off mr-2"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="https://sarjanamalam.com" class="brand-link">
                <img src="{!!url('https://res.cloudinary.com/shui-interior-com/image/upload/v1582527247/img/logo_yqzjsi.jpg')!!}"
                    alt="Sarjanamalam logo" class="brand-image img-circle elevation-3">
                <span class="brand-text font-weight-bold">Sarjanamalam.</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{!!asset('dashboard_admin/dist/img/user2-160x160.jpg')!!}"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{Auth()->user()->name}}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link @yield('aktifdash')">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/user-config" class="nav-link @yield('aktifuser')">
                                <i class="nav-icon fas fa-users-cog"></i>
                                <p>
                                    User System Management
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">SYSTEM</li>
                        <li class="nav-item">
                            <a href="/utility-item" class="nav-link @yield('aktifutility')">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Utility Item
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/messages" class="nav-link @yield('aktifmessages')">
                                <i class="nav-icon fas fa-inbox"></i>
                                <p>
                                    Messages
                                    <span class="badge badge-info right">0</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">@yield('title')</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">@yield('title')</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                @yield('content')
                <!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <?php $YearNow = date('Y') ?>
            <strong>Copyright &copy; {{$YearNow}} <a href="https://infinitysolutions.co.id">Shui Interior</a>.</strong>
            All rights reserved by Bintang Tobing
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0 Released version
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{!!asset('dashboard_admin/plugins/jquery/jquery.min.js')!!}"></script>
    <!-- PAGE SCRIPTS -->
    <script src="{!!asset('dashboard_admin/dist/js/pages/dashboard2.js')!!}"></script>
    <!-- Bootstrap -->
    <script src="{!!asset('dashboard_admin/plugins/bootstrap/js/bootstrap.bundle.min.js')!!}"></script>
    <!-- overlayScrollbars -->
    <script src="{!!asset('dashboard_admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')!!}"></script>
    <!-- AdminLTE App -->
    <!-- DataTables -->
    <script src="{!!asset('dashboard_admin/plugins/datatables/jquery.dataTables.js')!!}"></script>
    <script src="{!!asset('dashboard_admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')!!}"></script>
    <script src="{!!asset('dashboard_admin/dist/js/adminlte.js')!!}"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="{!!asset('dashboard_admin/dist/js/demo.js')!!}"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{!!asset('dashboard_admin/plugins/jquery-mousewheel/jquery.mousewheel.js')!!}"></script>
    <script src="{!!asset('dashboard_admin/plugins/raphael/raphael.min.js')!!}"></script>
    <script src="{!!asset('dashboard_admin/plugins/jquery-mapael/jquery.mapael.min.js')!!}"></script>
    <script src="{!!asset('dashboard_admin/plugins/jquery-mapael/maps/usa_states.min.js')!!}"></script>
    <!-- ChartJS -->
    <script src="{!!asset('dashboard_admin/plugins/chart.js/Chart.min.js')!!}"></script>


    <script>
        $(document).ready(function () {
            $('#tableJs').DataTable({
                "paging": true,
                "scrollY": "200px",
                "scrollCollapse": true,
                "lengthChange": true,
                "searching": false,
                "ordering": true,
                "info": true,
            });
            $('#tableItem').DataTable({
                "paging": true,
                "scrollY": "300px",
                "scrollCollapse": true,
                "lengthChange": true,
                "searching": false,
                "ordering": true,
                "info": true,
            });
        });

    </script>
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
