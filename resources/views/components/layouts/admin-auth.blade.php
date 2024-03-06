<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>{{$title ?? 'Page title'}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Volt Premium Bootstrap Dashboard - Sign in page">
    <meta name="author" content="Themesberg">
    <meta name="description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
    <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://demo.themesberg.com/volt-pro">
    <meta property="og:title" content="Volt Premium Bootstrap Dashboard - Sign in page">
    <meta property="og:description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
    <meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://demo.themesberg.com/volt-pro">
    <meta property="twitter:title" content="Volt Premium Bootstrap Dashboard - Sign in page">
    <meta property="twitter:description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
    <meta property="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('img/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('img/safari-pinned-tab.svg')}}" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Sweet Alert -->
    <link type="text/css" href="{{asset('admin/vendor/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="{{asset('admin/vendor/notyf/notyf.min.css')}}" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="{{asset('admin/css/volt.css')}}" rel="stylesheet">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
    @livewireStyles
    @livewireScripts
</head>

<body>

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->


    <main>

        <!-- Section -->
        <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
            <div class="container">
                <p class="text-center">
                    <a href="{{url('')}}" class="d-flex align-items-center justify-content-center">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                        </svg>
                        Go Home
                    </a>
                </p>
                {{$slot}}
            </div>
        </section>
    </main>

    <!-- Core -->
    <script src="{{asset('admin/vendor/@popperjs/core/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Vendor JS -->
    <script src="{{asset('admin/vendor/onscreen/dist/on-screen.umd.min.js')}}"></script>

    <!-- Slider -->
    <script src="{{asset('admin/vendor/nouislider/dist/nouislider.min.js')}}"></script>

    <!-- Smooth scroll -->
    <script src="{{asset('admin/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>

    <!-- Charts -->
    <script src="{{asset('admin/vendor/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{asset('admin/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>

    <!-- Datepicker -->
    <script src="{{asset('admin/vendor/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>

    <!-- Sweet Alerts 2 -->
    <script src="{{asset('admin/vendor/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>

    <!-- Moment JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

    <!-- Vanilla JS Datepicker -->
    <script src="{{asset('admin/vendor/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>

    <!-- Notyf -->
    <script src="{{asset('admin/vendor/notyf/notyf.min.js')}}"></script>

    <!-- Simplebar -->
    <script src="{{asset('admin/vendor/simplebar/dist/simplebar.min.js')}}"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js')}}"></script>

    <!-- Volt JS -->
    <script src="{{asset('admin/assets/js/volt.js')}}"></script>


</body>

</html>