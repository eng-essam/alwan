@extends('layouts.adminLayout')

@section('title')
    {{__('lang.home')}}
@endsection

@section('content')
    <div style="margin-top: 30px" class="col-lg-12 mb-25">
        <div class="social-overview-wrap">
            <div class="card border-0">
                <div class="card-body">
                    <div class="row row-cols-3 row-cols-md-6 g-4">
                        <div class="col">
                            <div class="card-body">
                                <ul class="social-overview">
                                    <li style="width: max-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="60" color="#0A53BE"
                                             fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                        </svg>
                                        <h3 style="margin: 5px 0 5px 0 ;font-size: 18px">{{$users}}</h3>
                                        <p style="font-size: 14px; color: #4a547a; margin-bottom: 0; font-weight: bold;">{{__('lang.users')}}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card-body">
                                <ul class="social-overview">
                                    <li style="width: max-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" color="#0A53BE"
                                             height="60" fill="currentColor" class="bi bi-person-fill-gear"
                                             viewBox="0 0 16 16">
                                            <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
                                        </svg>
                                        <h3 style="margin: 5px 0 5px 0;font-size: 18px">{{$admins}}</h3>
                                        <p style="font-size: 14px; color: #4a547a; margin-bottom: 0; font-weight: bold;">{{__('lang.admins')}}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card-body">
                                <ul class="social-overview">
                                    <li style="width: max-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" color="#0A53BE"
                                             height="60" fill="currentColor" class="bi bi-bag-check-fill"
                                             viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                                        </svg>
                                        <h3 style="margin: 5px 0 5px 0;font-size: 18px">{{$mainProducts}}</h3>
                                        <p style="font-size: 14px; color: #4a547a; margin-bottom: 0; font-weight: bold;">{{__('lang.main_products')}}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card-body">
                                <ul class="social-overview">
                                    <li style="width: max-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="60" color="#0A53BE"
                                             fill="currentColor" class="bi bi-ui-checks-grid" viewBox="0 0 16 16">
                                            <path d="M2 10h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1zm9-9h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-3zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-3zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-3zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.354.854a.5.5 0 1 0-.708-.708L3 3.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0l2-2z"/>
                                        </svg>
                                        <h3 style="margin: 5px 0 5px 0;font-size: 18px">{{$subProducts}}</h3>
                                        <p style="font-size: 14px; color: #4a547a; margin-bottom: 0; font-weight: bold;">{{__('lang.sub_products')}}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card-body">
                                <ul class="social-overview">
                                    <li style="width: max-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" color="#0A53BE"
                                             height="60" fill="currentColor" class="bi bi-box-seam-fill"
                                             viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461L10.404 2Z"/>
                                        </svg>
                                        <h3 style="margin: 5px 0 5px 0;font-size: 18px">{{$mainServices}}</h3>
                                        <p style="font-size: 14px; color: #4a547a; margin-bottom: 0; font-weight: bold;">{{__('lang.main_services')}}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card-body">
                                <ul class="social-overview">
                                    <li style="width: max-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="60" color="#0A53BE"
                                             fill="currentColor" class="bi bi-ui-checks-grid" viewBox="0 0 16 16">
                                            <path d="M2 10h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1zm9-9h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-3zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-3zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-3zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.354.854a.5.5 0 1 0-.708-.708L3 3.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0l2-2z"/>
                                        </svg>
                                        <h3 style="margin: 5px 0 5px 0;font-size: 18px">{{$subServices}}</h3>
                                        <p style="font-size: 14px; color: #4a547a; margin-bottom: 0; font-weight: bold;">{{__('lang.sub_services')}}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xxl-3 col-sm-6  col-ssm-12 mb-30">
            <div class="ap-po-details ap-po-details--2 p-25 radius-xl bg-white d-flex justify-content-between">
                <div>
                    <div class="overview-content">
                        <h1>{{$servicesPendingApproval}}</h1>
                        <p style="font-size: 20px">{{__('lang.services_pending_approval')}}</p>
                    </div>
                </div>
                <div class="ap-po-timeChart">
                    <div class="overview-single__chart d-md-flex align-items-end">
                        <div class="parentContainer">
                            <div>
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="90" color="#0A53BE"
                                     fill="currentColor" class="bi bi-hourglass-split" viewBox="0 0 16 16">
                                    <path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6  col-ssm-12 mb-30">
            <div class="ap-po-details ap-po-details--2 p-25 radius-xl bg-white d-flex justify-content-between">
                <div>
                    <div class="overview-content">
                        <h1>{{$servicesPendingCustomerPayment}}</h1>
                        <p style="font-size: 20px">{{__('lang.services_pending_customer_payment')}}</p>
                    </div>
                </div>
                <div class="ap-po-timeChart">
                    <div class="overview-single__chart d-md-flex align-items-end">
                        <div class="parentContainer">
                            <div>
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="90" color="#0A53BE"
                                     fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
                                    <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                    <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6  col-ssm-12 mb-30">
            <div class="ap-po-details ap-po-details--2 p-25 radius-xl bg-white d-flex justify-content-between">
                <div>
                    <div class="overview-content">
                        <h1>{{$ServicesSortingStage + $ProductsSortingStage}}</h1>
                        <p style="font-size: 20px">{{__('lang.Services_products_sorting_stage')}}</p>
                    </div>
                </div>
                <div class="ap-po-timeChart">
                    <div class="overview-single__chart d-md-flex align-items-end">
                        <div class="parentContainer">
                            <div>
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="90" color="#0A53BE"
                                     fill="currentColor" class="bi bi-filter-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                    <path d="M6 11.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6  col-ssm-12 mb-30">
            <div class="ap-po-details ap-po-details--2 p-25 radius-xl bg-white d-flex justify-content-between">
                <div>
                    <div class="overview-content">
                        <h1>{{$ServicesStoreingStage + $ProductsStoreingStage}}</h1>
                        <p style="font-size: 20px">{{__('lang.Services_products_storeing_stage')}}</p>
                    </div>
                </div>
                <div class="ap-po-timeChart">
                    <div class="overview-single__chart d-md-flex align-items-end">
                        <div class="parentContainer">
                            <div>
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="90" color="#0A53BE"
                                     fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                                    <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection