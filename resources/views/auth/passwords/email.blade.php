<!doctype html>
<html lang="{{\Illuminate\Support\Facades\App::getLocale()}}" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('lang.reset_password') }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

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

    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('alwaan/alwaan_logo.png')}}">
</head>

<main class="main-content">
    <div class="signUP-admin">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-5 p-0">
                    <div class="signUP-admin-left position-relative h-100vh">
                        <div class="signUP-overlay">
                            <img class="svg signupTop" src="{{asset('admin/img/svg/signupTop.svg')}}" alt="svg">
                            <img class="svg signupBottom" src="{{asset('admin/img/svg/signupBottom.svg')}}" alt="svg">
                        </div>
                        <div class="signUP-admin-left__content">
                            <div class="text-capitalize mb-md-30 mb-15 d-flex align-items-center justify-content-md-start justify-content-center">
                                <a class="p-10 bg-primary text-white radius-md mr-10 content-center" href="#">Alwaan</a>
                            </div>
                        </div>
                        <div class="signUP-admin-left__img">
                            <img class="img-fluid svg" src="{{asset('admin/img/svg/signupIllustration.svg')}}"
                                 alt="svg">
                        </div>
                    </div><!-- End: .signUP-admin-left -->
                </div><!-- End: .col -->
                <div class="col-xl-8 col-md-7 col-sm-8">
                    <div class="signUp-admin-right content-center h-100 pb-30">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-sm-10">
                                <div class="edit-profile mt-0">
                                    <div class="card border-0">
                                        <div class="card-header border-0 pt-0 pb-0">
                                            <div class="signUp-header-top mt-md-0 mt-30">
                                                <h6>{{__('lang.forgot_password')}}</h6>
                                                <p class="mt-md-45 mt-20">{{__('lang.email_address_instructions')}}</p>
                                            </div>
                                        </div>
                                        <div class="card-body pt-20 pb-0">
                                            @include('inc.messages')
                                            <div class="edit-profile__body">
                                                <form method="POST" action="{{ route('password.email') }}">
                                                    @csrf

                                                    <div class="form-group mb-20">
                                                        <label for="email">{{__('lang.email_Address')}}</label>
                                                        <input type="email" name="email" required class="form-control"
                                                               id="email"
                                                               placeholder="name@example.com">
                                                    </div>
                                                    <div class="d-flex mb-sm-35 mb-20">
                                                        <button type="submit"
                                                                class="btn btn-primary btn-default btn-squared text-capitalize lh-normal px-md-50 py-15 signIn-createBtn">
                                                            {{__('lang.send')}}
                                                        </button>
                                                    </div>
                                                </form>

                                                <p class="mb-0 fs-14 fw-500 text-gray text-capitalize">
                                                    <a href="{{url('login')}}" class="color-primary">
                                                        {{__('lang.login')}}
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- End: .card -->
                                </div><!-- End: .edit-profile -->
                            </div><!-- End: col -->
                        </div>
                    </div><!-- End: .signUp-admin-right -->
                </div><!-- End: .col -->
            </div>
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
</body>

</html>
