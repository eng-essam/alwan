<div style="margin-top: 20px" class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div style="font-size: 19px;font-weight: bold;" class="card-header color-dark fw-500">
                    {{__('lang.admins')}}
                </div>

                <div style="width: 50%;margin: auto;margin-top: 15px" class="input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">{{__('lang.search')}}</span>
                    </div>
                    <input wire:model="adminName" type="text" class="form-control"
                           placeholder="{{__('lang.admin_name')}}">
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
                                    <th>
                                            <span style="font-weight: bold;font-size: 17px;"
                                                  class="userDatatable-title">{{__('lang.company_branch')}}</span>
                                    </th>
                                    <th>
                                            <span style="font-weight: bold;font-size: 17px;"
                                                  class="userDatatable-title">{{__('lang.action')}}</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($admins as $admin)
                                    <tr style="text-align: center;">
                                        <td>
                                            <div style="font-size: 15px" class="userDatatable-content">
                                                {{$admins->firstItem()+$loop->index}}
                                            </div>
                                        </td>
                                        <td>
                                            <img class="profile-image rounded-circle  wh-50"
                                                 src="{{asset("uploads/$admin->img") }}">
                                        </td>
                                        <td>
                                            <div style="font-size: 15px" class="userDatatable-content">
                                                {{$admin->name}}
                                            </div>
                                        </td>
                                        <td>
                                            <div style="font-size: 15px" class="userDatatable-content">
                                                {{$admin->email}}
                                            </div>
                                        </td>
                                        <td>
                                            <div style="font-size: 15px;direction: ltr" class="userDatatable-content">
                                                {{$admin->fullPhone}}
                                            </div>
                                        </td>
                                        <td>
                                            <div style="font-size: 15px;direction: ltr" class="userDatatable-content">
                                                {{$admin->company->company_name()}}
                                            </div>
                                        </td>
                                        <td>
                                            <div style="font-size: 15px;direction: ltr" class="userDatatable-content">
                                                <button wire:click="deleteAdmin({{$admin->id}})"
                                                        class="btn btn-danger btn-xs btn-rounded float-left ml-1">
                                                    {{__('lang.delete')}}
                                                </button>
                                                <button class="btn btn-success btn-xs btn-rounded float-left ml-1">
                                                    {{__('lang.edit')}}
                                                </button>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div style="margin-top: 10px">
                            {{$admins->render()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
