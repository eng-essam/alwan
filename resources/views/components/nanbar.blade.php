<header class="header-top">
    <nav class="navbar navbar-light">
        <div class="navbar-left">
            <a href="" class="sidebar-toggle">
                <img class="svg" src="{{asset('admin/img/svg/bars.svg')}}" alt="img"></a>
            <a style="height: 40px;" class="navbar-brand" href="#">

                <div style="display: flex;height: 40px;">
                    <img style="height: 40px" src="{{asset('alwaan/alwaan_logo.png')}}" class="rounded-circle svg dark">
                    <p style="font-weight: bold;margin: 0 5px 0 5px;font-size: 24px;">{{__('lang.alwan')}}</p>
                </div>
            </a>

        </div>
        <!-- ends: navbar-left -->

        <div class="navbar-right">
            <ul class="navbar-right__menu">

                @livewire('notification.notification')
                <!-- ends: .nav-notification -->
                <li class="nav-flag-select">
                    <div class="dropdown-custom">
                        @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                            <a style="padding: 2px" class="btn btn-primary"
                               href="{{url('lang/set/ar')}}">
                                <h1 style="color: white ;font-size: 15px">AR</h1>
                            </a>
                        @else
                            <a style="padding: 2px" class="btn btn-primary"
                               href="{{url('lang/set/en')}}">
                                <h1 style="color: white;font-size: 15px">EN</h1>
                            </a>
                        @endif
                    </div>
                </li>
                <!-- ends: .nav-flag-select -->
                <li class="nav-author">
                    <div class="dropdown-custom">
                        <a href="javascript:" class="nav-item-toggle">
                            <img style="width: 35px;height: 35px" src="{{asset('uploads/'. Auth::user()->img)}}" class="rounded-circle"></a>
                        <div class="dropdown-wrapper">
                            <div class="nav-author__info">
                                <div class="author-img">
                                    <img style="width: 35px;height: 35px"  src="{{asset('uploads/'. Auth::user()->img)}}" class="rounded-circle">

                                </div>
                                <div>
                                    <h6>{{Auth::user()->name}}</h6>
                                    <span>{{Auth::user()->role->name}}</span>
                                </div>
                            </div>
                            <div class="nav-author__options">
                                <ul>
                                    <li>
                                        <a href="{{url('admin/profile')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                            {{__('lang.profile')}}</a>
                                    </li>

                                </ul>
                                <form style="display: none" id="logout-form" action="{{ route('logout') }}"
                                      method="POST">
                                    @csrf
                                </form>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                   class="nav-author__signout">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-log-out">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg>
                                    Sign Out</a>
                            </div>
                        </div>
                        <!-- ends: .dropdown-wrapper -->
                    </div>
                </li>
                <!-- ends: .nav-author -->
            </ul>
            <!-- ends: .navbar-right__menu -->
            <div class="navbar-right__mobileAction d-md-none">
                <a href="#" class="btn-search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </a>
                <a href="#" class="btn-author-action">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-more-vertical">
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="12" cy="5" r="1"></circle>
                        <circle cx="12" cy="19" r="1"></circle>
                    </svg>
                </a>
            </div>
        </div>
        <!-- ends: .navbar-right -->
    </nav>
</header>