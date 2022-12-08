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
                        <span>{{__('lang.main_menu')}}</span>
                    </li>
                    <li style="margin-bottom: 3px">
                        <a href="{{url('admin/home')}}" class="active">
                            <svg style="margin: 5px 5px 0 5px" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646
                                6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                            </svg>
                            <span style="font-size: 16px;font-weight: bold"
                                  class="menu-text">{{__('lang.home')}}</span>
                        </a>
                    </li>
                    <li class="menu-title">
                        <span>{{__('lang.users')}}</span>
                    </li>
                    <li style="margin-bottom: 3px">
                        <a href="{{url('admin/all-users')}}">
                            <svg style="margin: 5px 5px 0 5px" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784
                                 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1
                                  1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                            </svg>
                            <span style="font-size: 16px;font-weight: bold;padding-top: 5px"
                                  class="menu-text">{{__('lang.users')}}</span>
                        </a>
                    </li>
                    @if(Auth::user()->role->id == 1)
                        <li class="menu-title">
                            <span>{{__('lang.admins')}}</span>
                        </li>
                        <li style="margin-bottom: 3px">
                            <a href="{{url('admin/all-admins')}}">
                                <svg style="margin: 5px 5px 0 5px" xmlns="http://www.w3.org/2000/svg" width="20"
                                     height="20" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                                    <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
                                </svg>
                                <span style="font-size: 16px;font-weight: bold;padding-top: 5px"
                                      class="menu-text">{{__('lang.admins')}}</span>
                            </a>
                        </li>

                        <li class="menu-title">
                            <span>{{__('lang.company_branches')}}</span>
                        </li>
                        <li style="margin-bottom: 3px">
                            <a href="{{url('admin/all/company-branches')}}">
                                <svg style="margin: 5px 5px 0 5px" xmlns="http://www.w3.org/2000/svg" width="20"
                                     height="20" fill="currentColor" class="bi bi-building-fill" viewBox="0 0 16 16">
                                    <path d="M3 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h3v-3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V16h3a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H3Zm1 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Z"/>
                                </svg>
                                <span style="font-size: 16px;font-weight: bold;padding-top: 5px"
                                      class="menu-text">{{__('lang.company_branches')}}</span>
                            </a>
                        </li>

                        <li class="menu-title">
                            <span>{{__('lang.main_services_main_products')}}</span>
                        </li>
                        <li style="margin-bottom: 3px">
                            <a href="{{url('admin/all-main/services')}}">
                                <svg style="margin: 5px 5px 0 5px" xmlns="http://www.w3.org/2000/svg" width="20"
                                     height="20" fill="currentColor" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                          d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461L10.404 2Z"/>
                                </svg>
                                <span style="font-size: 16px;font-weight: bold;padding-top: 5px"
                                      class="menu-text">{{__('lang.main_services')}}</span>
                            </a>
                        </li>
                        <li style="margin-bottom: 3px">
                            <a href="{{url('admin/all-main/products')}}">
                                <svg style="margin: 5px 5px 0 5px" xmlns="http://www.w3.org/2000/svg" width="20"
                                     height="20" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                          d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                                </svg>
                                <span style="font-size: 16px;font-weight: bold;padding-top: 5px"
                                      class="menu-text">{{__('lang.main_products')}}</span>
                            </a>
                        </li>

                        <li class="menu-title">
                            <span>{{__('lang.discount_coupons')}}</span>
                        </li>
                        <li style="margin-bottom: 3px">
                            <a href="{{url('admin/all/coupons')}}">
                                <svg style="margin: 5px 5px 0 5px" xmlns="http://www.w3.org/2000/svg" width="20"
                                     height="20" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
                                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                    <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                                <span style="font-size: 16px;font-weight: bold;padding-top: 5px"
                                      class="menu-text">{{__('lang.coupons')}}</span>
                            </a>
                        </li>
                    @endif
                    <li class="menu-title">
                        <span>{{__('lang.sub_services_sub_products')}}</span>
                    </li>
                    <li style="margin-bottom: 3px">
                        <a href="{{url('admin/all-sub/services')}}">
                            <svg style="margin: 5px 5px 0 5px" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 fill="currentColor" class="bi bi-ui-checks-grid" viewBox="0 0 16 16">
                                <path d="M2 10h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1zm9-9h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-3zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-3zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-3zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.354.854a.5.5 0 1 0-.708-.708L3 3.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0l2-2z"/>
                            </svg>
                            <span style="font-size: 16px;font-weight: bold;padding-top: 5px"
                                  class="menu-text">{{__('lang.sub_services')}}</span>
                        </a>
                    </li>
                    <li style="margin-bottom: 3px">
                        <a href="{{url('admin/all-sub/products')}}">
                            <svg style="margin: 5px 5px 0 5px" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 fill="currentColor" class="bi bi-ui-checks-grid" viewBox="0 0 16 16">
                                <path d="M2 10h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1zm9-9h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-3zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-3zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-3zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.354.854a.5.5 0 1 0-.708-.708L3 3.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0l2-2z"/>
                            </svg>
                            <span style="font-size: 16px;font-weight: bold;padding-top: 5px"
                                  class="menu-text">{{__('lang.sub_products')}}</span>
                        </a>
                    </li>
                    <li class="menu-title">
                        <span>{{__('lang.Stages_service_implementation')}}</span>
                    </li>

                    <li class="has-child">
                        <a href="#" class="">
                            <svg style="margin: 5px 5px 0 5px" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                            <span style="font-size: 16px;font-weight: bold;padding-top: 5px"
                                  class="menu-text">{{__('lang.Stages_service_implementation')}}</span>
                            <span class="toggle-icon"></span>
                        </a>
                        <ul style="display: none;padding: 0px 36px 12px 36px">
                            @if(Auth::user()->permissions()->find(1))
                                <li>
                                    <a style="padding: 3px 20px" href="{{url('admin/all-service-orders')}}">
                                <span style="font-size: 16px;font-weight: bold;padding-top: 5px"
                                      class="menu-text">{{__('lang.service_order')}}</span>
                                    </a>
                                </li>
                            @endif
                            @if(Auth::user()->permissions()->find(2))
                                <li>
                                    <a style="padding: 3px 20px" href="{{url('admin/all-approval-services')}}">
                                <span style="font-size: 16px;font-weight: bold;padding-top: 5px"
                                      class="menu-text">{{__('lang.approved_services')}}</span>
                                    </a>
                                </li>
                            @endif
                            @if(Auth::user()->permissions()->find(3))
                                <li>
                                    <a style="padding: 3px 20px" href="{{url('admin/all-sorting-service-orders')}}">
                                <span style="font-size: 16px;font-weight: bold;padding-top: 5px"
                                      class="menu-text">{{__('lang.sorting_order')}}</span>
                                    </a>
                                </li>
                            @endif
                            @if(Auth::user()->permissions()->find(4))
                                <li>
                                    <a style="padding: 3px 20px" href="{{url('admin/all-execute-service-orders')}}">
                                <span style="font-size: 16px;font-weight: bold;padding-top: 5px"
                                      class="menu-text">{{__('lang.execute_services')}}</span>
                                    </a>
                                </li>
                            @endif
                            @if(Auth::user()->permissions()->find(5))
                                <li>
                                    <a style="padding: 3px 20px" href="{{url('admin/all-storage-service-orders')}}">
                                <span style="font-size: 16px;font-weight: bold;padding-top: 5px"
                                      class="menu-text">{{__('lang.storage_services')}}</span>
                                    </a>
                                </li>
                            @endif
                            @if(Auth::user()->permissions()->find(6))
                                <li>
                                    <a style="padding: 3px 20px" href="{{url('admin/all-delivered-service-orders')}}">
                                <span style="font-size: 16px;font-weight: bold;padding-top: 5px"
                                      class="menu-text">{{__('lang.services_delivered')}}</span>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </li>


                    <li class="menu-title">
                        <span>{{__('lang.Stages_product_implementation')}}</span>
                    </li>

                    <li class="has-child">
                        <a href="#" class="">
                            <svg style="margin: 5px 5px 0 5px" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                            <span style="font-size: 16px;font-weight: bold;padding-top: 5px"
                                  class="menu-text">{{__('lang.Stages_product_implementation')}}</span>
                            <span class="toggle-icon"></span>
                        </a>
                        <ul style="display: none;padding: 0px 36px 12px 36px">
                            @if(Auth::user()->permissions()->find(3))
                                <li>
                                    <a style="padding: 3px 20px" href="{{url('admin/all-sorting-product-orders')}}">
                                <span style="font-size: 16px;font-weight: bold;padding-top: 5px"
                                      class="menu-text">{{__('lang.sorting_order')}}</span>
                                    </a>
                                </li>
                            @endif
                            @if(Auth::user()->permissions()->find(4))
                                <li>
                                    <a style="padding: 3px 20px" href="{{url('admin/all-execute-product-orders')}}">
                                <span style="font-size: 16px;font-weight: bold;padding-top: 5px"
                                      class="menu-text">{{__('lang.execute_products')}}</span>
                                    </a>
                                </li>
                            @endif
                            @if(Auth::user()->permissions()->find(5))
                                <li>
                                    <a style="padding: 3px 20px" href="{{url('admin/all-storage-product-orders')}}">
                                <span style="font-size: 16px;font-weight: bold;padding-top: 5px"
                                      class="menu-text">{{__('lang.storage_products')}}</span>
                                    </a>
                                </li>
                            @endif
                            @if(Auth::user()->permissions()->find(6))
                                <li>
                                    <a style="padding: 3px 20px" href="{{url('admin/all-delivered-product-orders')}}">
                                <span style="font-size: 16px;font-weight: bold;padding-top: 5px"
                                      class="menu-text">{{__('lang.products_delivered')}}</span>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </li>


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
