<aside class="sidebar mCustomScrollbar _mCS_1 mCS-autoHide collapsed" style="overflow: scroll;">
    <div id="mCSB_1" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" style="max-height: none;"
         tabindex="0">
        @php
            $dir = (App::getLocale() == 'ar') ? 'rtl' : 'ltr';
        @endphp
        <div id="mCSB_1_container" class="mCSB_container" style="position: relative; left: 0px; top: 0px;"
             dir="{{$dir}}">
            <div dir="{{$dir}}" class="sidebar__menu-group">
                <ul class="sidebar_nav">
                    <li class="menu-title">
                        <span>Main menu</span>
                    </li>
                    <li style="margin-bottom: 3px">
                        <a href="{{url('admin/home')}}" class="active">
                            <i style="margin: 0 5px 0 5px" class="fas fa-home fa-lg"></i>
                            <span style="font-size: 18px;font-weight: bold;padding-top: 5px"
                                  class="menu-text">{{__('lang.home')}}</span>
                        </a>
                    </li>
                    <li style="margin-bottom: 3px">
                        <a href="{{url('admin/all-users')}}">
                            <i style="margin: 0 5px 0 5px" class="fas fa-users fa-lg"></i>
                            <span style="font-size: 18px;font-weight: bold;padding-top: 5px"
                                  class="menu-text">{{__('lang.users')}}</span>
                        </a>
                    </li>
                    @if(Auth::user()->role->id == 1)
                        <li style="margin-bottom: 3px">
                            <a href="{{url('admin/all-admins')}}">
                                <i style="margin: 0 5px 0 5px" class="fas fa-user-shield fa-lg"></i>
                                <span style="font-size: 18px;font-weight: bold;padding-top: 5px"
                                      class="menu-text">{{__('lang.admins')}}</span>
                            </a>
                        </li>
                        <li style="margin-bottom: 3px">
                            <a href="{{url('admin/all-main/subServices')}}">
                                <i style="margin: 0 5px 0 5px" class="fas fa-business-time fa-lg"></i>
                                <span style="font-size: 18px;font-weight: bold;padding-top: 5px"
                                      class="menu-text">{{__('lang.main_services')}}</span>
                            </a>
                        </li>
                        <li style="margin-bottom: 3px">
                            <a href="{{url('admin/all-main/subProducts')}}">
                                <i style="margin: 0 5px 0 5px" class="fas fa-business-time fa-lg"></i>
                                <span style="font-size: 18px;font-weight: bold;padding-top: 5px"
                                      class="menu-text">{{__('lang.main_products')}}</span>
                            </a>
                        </li>
                    @endif


                    {{--                    <li class="has-child open">--}}
                    {{--                        <a href="#">--}}
                    {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"--}}
                    {{--                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"--}}
                    {{--                                 stroke-linejoin="round" class="feather feather-home nav-icon">--}}
                    {{--                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>--}}
                    {{--                                <polyline points="9 22 9 12 15 12 15 22"></polyline>--}}
                    {{--                            </svg>--}}
                    {{--                            <span style="font-size: 18px;font-weight: bold;" class="menu-text">Dashboard</span>--}}
                    {{--                            <span class="toggle-icon"></span>--}}
                    {{--                        </a>--}}
                    {{--                        <ul style="">--}}
                    {{--                            <li>--}}
                    {{--                                <a class="active" href="index.html">Social Media</a>--}}
                    {{--                            </li>--}}
                    {{--                            <li>--}}
                    {{--                                <a class="" href="business.html">FineTech /--}}
                    {{--                                    Business</a>--}}
                    {{--                            </li>--}}
                    {{--                            <li>--}}
                    {{--                                <a class="" href="performance.html">Site--}}
                    {{--                                    Performance</a>--}}
                    {{--                            </li>--}}
                    {{--                            <li>--}}
                    {{--                                <a class="" href="ecommerce.html">Ecommerce</a>--}}
                    {{--                            </li>--}}
                    {{--                            <li>--}}
                    {{--                                <a class="" href="crm.html">--}}
                    {{--                                    CRM</a>--}}
                    {{--                            </li>--}}
                    {{--                            <li>--}}
                    {{--                                <a class="" href="sales.html">--}}
                    {{--                                    Sales Performance</a>--}}
                    {{--                            </li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                </ul>
            </div>
        </div>
    </div>
    <div id="mCSB_1_scrollbar_vertical"
         class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical"
         style="display: block;">
        <div class="mCSB_draggerContainer">
            <div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
                 style="position: absolute; min-height: 50px; display: block; height: 15px; max-height: 142px; top: 0px;">
                <div class="mCSB_dragger_bar" style="line-height: 50px;"></div>
                <div class="mCSB_draggerRail"></div>
            </div>
        </div>
    </div>
</aside>
