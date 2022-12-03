<!doctype html>
@php
    $dir = (App::getLocale() == 'ar') ? 'rtl' : 'ltr';
@endphp
<html lang="{{App::getLocale()}}" dir="{{$dir}}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">

    @if(\Illuminate\Support\Facades\App::getLocale() == 'ar')
        <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/bootstrap/bootstrap-rtl.css')}}">
        <link rel="stylesheet" href="{{asset('admin/style-rtl.css')}}">
    @else
        <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/bootstrap/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('admin/style.css')}}">
    @endif
    <!-- inject:css-->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/fullcalendar@5.2.0.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/jquery-jvectormap-2.0.5.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/leaflet.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/MarkerCluster.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/MarkerCluster.Default.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/star-rating-svg.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/trumbowyg.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor_assets/css/wickedpicker.min.css')}}">
    <!-- endinject -->
    @livewireStyles

    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('alwaan/alwaan_logo.png')}}">
</head>

<body class="layout-light side-menu ">

<div class="mobile-author-actions"></div>

<x-nanbar></x-nanbar>

<main class="main-content">

    <x-sidebar></x-sidebar>
    <div class="contents expanded">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>

</main>

<div class="overlay-dark-sidebar"></div>
<div class="customizer-overlay"></div>

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDduF2tLXicDEPDMAtC6-NLOekX0A5vlnY"></script>
<!-- inject:js-->
<script src="{{ asset('admin/assets/vendor_assets/js/jquery/jquery-3.5.1.min.js') }}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/jquery/jquery-ui.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/bootstrap/popper.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/accordion.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/autoComplete.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/Chart.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/charts.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/daterangepicker.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/drawer.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/dynamicBadge.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/dynamicCheckbox.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/feather.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/fullcalendar@5.2.0.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/google-chart.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/jquery-jvectormap-2.0.5.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/jquery.filterizr.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/jquery.mCustomScrollbar.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/jquery.peity.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/jquery.star-rating-svg.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/leaflet.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/leaflet.markercluster.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/loader.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/message.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/moment.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/muuri.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/notification.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/popover.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/select2.full.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/slick.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/trumbowyg.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor_assets/js/wickedpicker.min.js')}}"></script>
<script src="{{asset('admin/assets/theme_assets/js/drag-drop.js')}}"></script>
<script src="{{asset('admin/assets/theme_assets/js/full-calendar.js')}}"></script>
<script src="{{asset('admin/assets/theme_assets/js/googlemap-init.js')}}"></script>
<script src="{{asset('admin/assets/theme_assets/js/icon-loader.js')}}"></script>
<script src="{{asset('admin/assets/theme_assets/js/jvectormap-init.js')}}"></script>
<script src="{{asset('admin/assets/theme_assets/js/leaflet-init.js')}}"></script>
<script src="{{asset('admin/assets/theme_assets/js/main.js')}}"></script>
@yield('script')
@livewireScripts
<script>
        window.addEventListener('closeEditMainServiceModal', event => {
          $('#editMainServiceModal').modal('hide');
        });
        window.addEventListener('closeAddMainServiceModal', event => {
          $('#addMainServiceModal').modal('hide');
        });
        window.addEventListener('showAddMainServiceModal', event => {
          $('#addMainServiceModal').modal('show');
        });
        window.addEventListener('showEditMainServiceModal', event => {
          $('#editMainServiceModal').modal('show');
        });

        window.addEventListener('closeAddProductModal', event => {
          $('#addProductModal').modal('hide');
        });
        window.addEventListener('closeEditProductModal', event => {
          $('#EditProductModal').modal('hide');
        });
</script>
</body>

</html>
