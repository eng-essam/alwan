<div style="margin-top: 20px" class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div style="font-size: 19px;font-weight: bold;" class="card-header color-dark fw-500">
                    {{__('lang.users')}}
                </div>

                <div style="width: 50%;margin: auto;margin-top: 15px" class="input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">{{__('lang.search')}}</span>
                    </div>
                    <input wire:model="userName" type="text" class="form-control"
                           placeholder="{{__('lang.user_name')}}">
                </div>

                <div class="card-body p-0">
                    <div class="table4  p-25 bg-white mb-30">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                <tr style="text-align: center" class="userDatatable-header">
                                    <th>
                                            <span style="font-weight: bold;font-size: 17px;"
                                                  class="userDatatable-title">ID</span>
                                    </th>
                                    <th>
                                            <span style="font-weight: bold;font-size: 17px;"
                                                  class="userDatatable-title">{{__('lang.image')}}</span>
                                    </th>
                                    <th>
                                            <span style="font-weight: bold;font-size: 17px;"
                                                  class="userDatatable-title">{{__('lang.name')}}</span>
                                    </th>
                                    <th>
                                            <span style="font-weight: bold;font-size: 17px;"
                                                  class="userDatatable-title">{{__('lang.email_Address')}}</span>
                                    </th>
                                    <th>
                                            <span style="font-weight: bold;font-size: 17px;"
                                                  class="userDatatable-title">{{__('lang.phone')}}</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr style="text-align: center;">
                                        <td>
                                            <div style="font-size: 15px" class="userDatatable-content">
                                                {{$users->firstItem()+$loop->index}}
                                            </div>
                                        </td>
                                        <td>
                                            <img class="profile-image rounded-circle  wh-50"
                                                 src="{{asset("uploads/$user->img") }}">
                                        </td>
                                        <td>
                                            <div style="font-size: 15px" class="userDatatable-content">
                                                {{$user->name}}
                                            </div>
                                        </td>
                                        <td>
                                            <div style="font-size: 15px" class="userDatatable-content">
                                                {{$user->email}}
                                            </div>
                                        </td>
                                        <td>
                                            <div style="font-size: 15px;direction: ltr" class="userDatatable-content">
                                                {{$user->fullPhone}}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div style="margin-top: 10px">
                            {{$users->render()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
