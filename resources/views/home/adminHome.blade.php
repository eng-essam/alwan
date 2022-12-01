@extends('layouts.adminLayout')

@section('title')
    {{__('lang.home')}}
@endsection

@section('content')
    <div class="row row-cols-3 row-cols-md-6 g-4">
        <div class="col">
            <div class="card-body">
                <ul class="social-overview">
                    <li style="width: max-content">
                        <i style="color: #0a53be " class="fas fa-users fa-3x"></i>
                        <h3 style="margin: 5px 0 5px 0 ;font-size: 18px">5,461</h3>
                        <p style="font-size: 14px; color: #4a547a; margin-bottom: 0; font-weight: bold;">{{__('lang.users')}}</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col">
            <div class="card-body">
                <ul class="social-overview">
                    <li style="width: max-content">
                        <i style="color: #0a53be" class="fas fa-user-shield fa-3x"></i>
                        <h3 style="margin: 5px 0 5px 0;font-size: 18px">5,461</h3>
                        <p style="font-size: 14px; color: #4a547a; margin-bottom: 0; font-weight: bold;">{{__('lang.admins')}}</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col">
            <div class="card-body">
                <ul class="social-overview">
                    <li style="width: max-content">
                        <i style="color: #0a53be" class="fas fa-business-time fa-3x"></i>
                        <h3 style="margin: 5px 0 5px 0;font-size: 18px">5,461</h3>
                        <p style="font-size: 14px; color: #4a547a; margin-bottom: 0; font-weight: bold;">{{__('lang.main_products')}}</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col">
            <div class="card-body">
                <ul class="social-overview">
                    <li style="width: max-content">
                        <i style="color: #0a53be" class="fas fa-shopping-bag fa-3x"></i>
                        <h3 style="margin: 5px 0 5px 0;font-size: 18px">5,461</h3>
                        <p style="font-size: 14px; color: #4a547a; margin-bottom: 0; font-weight: bold;">{{__('lang.sub_products')}}</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col">
            <div class="card-body">
                <ul class="social-overview">
                    <li style="width: max-content">
                        <i style="color: #0a53be" class="fas fa-business-time fa-3x"></i>
                        <h3 style="margin: 5px 0 5px 0;font-size: 18px">5,461</h3>
                        <p style="font-size: 14px; color: #4a547a; margin-bottom: 0; font-weight: bold;">{{__('lang.main_services')}}</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col">
            <div class="card-body">
                <ul class="social-overview">
                    <li style="width: max-content">
                        <i style="color: #0a53be" class="fas fa-shopping-bag fa-3x"></i>
                        <h3 style="margin: 5px 0 5px 0;font-size: 18px">5,461</h3>
                        <p style="font-size: 14px; color: #4a547a; margin-bottom: 0; font-weight: bold;">{{__('lang.sub_services')}}</p>
                    </li>
                </ul>
            </div>
        </div>

    </div>

@endsection