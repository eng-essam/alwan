<div style="margin: 0 7px 0 7px">
    <li class="nav-notification">
        <div class="dropdown-custom">
            <a style="display: flex" href="javascript:">
                @if($notifications->count() != 0)
                    <span style="height: 15px;width: 15px;font-weight: bold;font-size: 12px;"
                          class="badge-circle badge-warning ml-1">{{$notifications->count()}}
                </span>
                @endif
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" class="feather feather-bell">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                </svg>
            </a>
            <div class="dropdown-wrapper">
                <h2 class="dropdown-wrapper__title">{{__('lang.notifications')}}
                    <span
                            class="badge-circle badge-warning ml-1">{{$notifications->count()}}
                    </span>
                </h2>
                <ul>
                    @foreach($notifications as $notification)
                        <li wire:click="readNotification({{$notification->id}})"
                            class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                            <div class="nav-notification__type nav-notification__type--primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                     stroke-linecap="round" stroke-linejoin="round"
                                     class="feather feather-inbox">
                                    <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                    <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                                </svg>
                            </div>
                            <a href="{{url("$notification->url")}}"
                               class="nav-notification__details">
                                <p>

                                    <span>{{$notification->desc()}}</span>
                                </p>
                                <p>
                                    <span style="color: #5a5a5a"
                                          class="time-posted">{{\Carbon\Carbon::parse($notification->created_at)->diffForHumans()}}</span>
                                </p>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <a href="" wire:click="readAllNotification()" class="dropdown-wrapper__more">{{__('lang.read_all')}}</a>
            </div>
        </div>
    </li>
</div>
