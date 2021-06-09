<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../images/favicon.ico">

     <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css') }}">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-extend.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/master_style.css') }}">

    <!-- Unique_Admin skins -->
    <link rel="stylesheet" href="{{ asset('css/skins/_all-skins.css') }}">

    <!-- Styles -->
    @yield('styles')

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>


</head>

<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <div class="wrapper">

            @include('admin.components.header')

            @include('admin.components.aside')



            <!-- =============================================== -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    @yield('content-header')
                </section>

                <!-- Main content -->
                <section class="content">

                  @yield('content')

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->


            <footer class="main-footer">
                <div class="pull-right d-none d-sm-inline-block">
                    <ul
                        class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="https://www.multipurposethemes.com/product/crypto-bitcoin-ui-kit-responsive-bootstrap-4-admin-templates/">Purchase
                                Now</a>
                        </li>
                    </ul>
                </div>
                &copy; 2018 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
            </footer>

        </div>
        <!-- ./wrapper -->


        <!-- jQuery 3 -->
        <script src="{{ asset('assets/vendor_components/jquery/dist/jquery.min.js') }}"></script>

        <!-- popper -->
        <script src="{{ asset('assets/vendor_components/popper/dist/popper.min.js') }}"></script>

        <!-- Bootstrap 4.0-->
        <script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

        <!-- SlimScroll -->
        <script src="{{ asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>

        <!-- FastClick -->
        <script src="{{ asset('assets/vendor_components/fastclick/lib/fastclick.js') }}"></script>

        <!-- Unique_Admin App -->
        <script src="{{ asset('js/template.js') }}"></script>

        @yield('scripts')


</body>

</html>
