<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Kehadiran Mahasiswa UNSAP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="{{ asset('') }}/images/favicon.ico">

    <link href="{{ asset('') }}/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('') }}/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
    <script src="{{ asset('') }}/js/layout.js"></script>
    <link href="{{ asset('') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('') }}/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('') }}/css/custom.min.css" rel="stylesheet" type="text/css" />


</head>

<body>

    <div id="layout-wrapper">

        @include('dashboard.layouts.partials.header')

        @include('dashboard.layouts.partials.remove_notification')

        @include('dashboard.layouts.partials.app_menu')

        <div class="vertical-overlay"></div>

        <div class="main-content">
            @include('dashboard.layouts.partials.footer')
        </div>

    </div>

    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>

    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas"
            data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    @include('dashboard.layouts.partials.theme_settings')

    <script src="{{ asset('') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('') }}/libs/node-waves/waves.min.js"></script>
    <script src="{{ asset('') }}/libs/feather-icons/feather.min.js"></script>
    <script src="{{ asset('') }}/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="{{ asset('') }}/js/plugins.js"></script>

    <script src="{{ asset('') }}/libs/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('') }}/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="{{ asset('') }}/libs/jsvectormap/maps/world-merc.js"></script>
    <script src="{{ asset('') }}/libs/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('') }}/js/pages/dashboard-ecommerce.init.js"></script>
    <script src="{{ asset('') }}/js/app.js"></script>
</body>

</html>
