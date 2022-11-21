@extends('layouts.adminLayout')

@section('title')
    {{ __('Reset_password') }}
@endsection

@section('main')
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
                                <a class="wh-36 bg-primary text-white radius-md mr-10 content-center" href="#">a</a>
                                <span class="text-dark">admin</span>
                            </div>
                            <h1>Bootstrap 4 React Web Application</h1>
                        </div>
                        <div class="signUP-admin-left__img">
                            <img class="img-fluid svg" src="{{asset('admin/img/svg/signupIllustration.svg')}}" alt="svg">
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
                                                <h6>Forgot Password?</h6>
                                                <p class="mt-md-45 mt-20">Enter the email address you used when you
                                                    joined and we’ll send you instructions to reset your password.</p>
                                            </div>
                                        </div>
                                        <div class="card-body pt-20 pb-0">
                                            @include('inc.messages')
                                            <div class="edit-profile__body">
                                                <form method="POST" action="{{ route('password.email') }}">
                                                    @csrf
                                                    <div class="form-group mb-20">
                                                        <label for="email">Email Adress</label>
                                                        <input type="email"  name="email" required  class="form-control" id="email"
                                                               placeholder="name@example.com">
                                                    </div>
                                                    <div class="d-flex mb-sm-35 mb-20">
                                                        <button  type="submit" class="btn btn-primary btn-default btn-squared text-capitalize lh-normal px-md-50 py-15 signIn-createBtn">
                                                            Send Reset Instructions
                                                        </button>
                                                    </div>
                                                </form>

                                                <p class="mb-0 fs-14 fw-500 text-gray text-capitalize">
                                                    return to
                                                    <a href="{{url('login')}}" class="color-primary">
                                                        Sign in
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
@endsection
