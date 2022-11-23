@extends('layouts.adminLayout')

@section('title')
    {{ __('lang.login') }}
@endsection


@section('main')
    <div class="signUP-admin">
        <div class="container-fluid">
            @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                <a style="float: right ;margin-top: 10px;width: 10px" class="btn btn-primary "
                   href="{{url('lang/set/ar')}}">
                    <h1 style="color: white ;font-size: 20px">AR</h1>
                </a>
            @else
                <a style="float: right ;margin-top: 10px;width: 10px" class="btn btn-primary "
                   href="{{url('lang/set/en')}}">
                    <h1 style="color: white;font-size: 20px">EN</h1>
                </a>
            @endif

            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-5 p-0">
                    <div class="signUP-admin-left position-relative h-100vh">
                        <div class="signUP-overlay">
                            <img class="svg signupTop" src="{{asset('admin/img/svg/signupTop.svg')}}" alt="svg">
                            <img class="svg signupBottom" src="{{asset('admin/img/svg/signupBottom.svg')}}" alt="svg">
                        </div>
                        <div class="signUP-admin-left__content">
                            <div class="text-capitalize mb-md-30 mb-15 d-flex align-items-center justify-content-md-start justify-content-center">
                                <a class=" bg-primary text-white radius-md mr-10 content-center" href="#">Alwaan</a>
                            </div>
                        </div>
                        <div class="signUP-admin-left__img">
                            <img class="img-fluid svg" src="{{asset('admin/img/svg/signupIllustration.svg')}}" alt="svg">
                        </div>
                    </div><!-- End: .signUP-admin-left -->
                </div><!-- End: .col -->
                <div class="col-xl-8 col-lg-7 col-md-7 col-sm-8">
                    <div class="signUp-admin-right signIn-admin-right  p-md-40 p-10">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-8 col-md-12">
                                <div class="edit-profile mt-md-25 mt-0">
                                    <div class="card border-0">

                                        <form action="{{'login'}}" method="post">
                                            @csrf
                                            <div class="card-body">
                                                <div class="edit-profile__body">
                                                    <div class="form-group mb-20">
                                                        <label for="username">{{__('lang.email_Address')}}</label>
                                                        <input id="email" type="email"
                                                               class="form-control @error('email') is-invalid @enderror"
                                                               name="email" value="{{ old('email') }}" required
                                                               autocomplete="email" autofocus>

                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                             <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mb-15">
                                                        <label for="password-field">{{__('lang.password')}}</label>
                                                        <div class="position-relative">
                                                            <input id="password" type="password"
                                                                   class="form-control @error('password') is-invalid @enderror"
                                                                   name="password" required
                                                                   autocomplete="current-password">

                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="signUp-condition signIn-condition">
                                                        <div class="checkbox-theme-default custom-checkbox ">
                                                            <input class="checkbox" type="checkbox" name="remember"
                                                                   id="remember" {{ old('remember') ? 'checked' : '' }} >
                                                            <label for="check-1">
                                                                <span
                                                                    class="checkbox-text">{{__('lang.Keep_me_logged_in')}}</span>
                                                            </label>
                                                        </div>
                                                        <a href="{{ route('password.request') }}">{{__('lang.forget_password')}}</a>
                                                    </div>
                                                    <div
                                                        class="button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                        <button
                                                            class="btn btn-primary btn-default btn-squared mr-15 text-capitalize lh-normal px-15 py-10 signIn-createBtn ">
                                                            {{__('lang.sign_in')}}
                                                        </button>
                                                    </div>

                                                </div>
                                            </div><!-- End: .card-body -->
                                        </form>
                                    </div><!-- End: .card -->
                                </div><!-- End: .edit-profile -->
                            </div><!-- End: .col-xl-5 -->
                        </div>
                    </div><!-- End: .signUp-admin-right  -->
                </div><!-- End: .col-xl-8  -->
            </div>
        </div>
    </div><!-- End: .signUP-admin  -->
@endsection
