@extends('layouts.adminLayout')

@section('title')
    {{__('lang.edit_admin_information')}}
@endsection

@section('content')
    <div style="margin-top: 15px" class="row">
        <div class="col-lg-12">
            <div class="card card-default card-md mb-4">
                <div class="card-header">
                    <h6 style="font-size: 20px;font-weight: bold;">{{__('lang.edit_admin_information')}}</h6>
                </div>
                <div class="card-body py-md-25">
                    <form method="post" action="{{url("admin/edit-admin/$admin->id")}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label style="font-weight: bold" for="a4"
                                           class="il-gray fs-14 fw-500 align-center">{{__('lang.name')}}</label>
                                    <input value="{{$admin->name}}" type="text" name="name"
                                           class="form-control ih-medium ip-light radius-xs b-light px-15" id="a4">
                                    @error('name')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label style="font-weight: bold" for="a4"
                                           class="il-gray fs-14 fw-500 align-center">{{__('lang.email_Address')}}</label>
                                    <input value="{{$admin->email}}" type="text" name="email"
                                           class="form-control ih-medium ip-light radius-xs b-light px-15" id="a4">
                                    @error('email')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label style="font-weight: bold" for="a4"
                                           class="il-gray fs-14 fw-500 align-center">{{__('lang.phone')}}</label>
                                    <div style="direction: ltr" class="input-group-prepend">
                                        <span style="width: 50px;padding: 5px;" class="input-group-text"
                                              id="inputGroup-sizing-default">+966</span>
                                        <input value="{{$admin->phone}}" type="number" name="phone"
                                               class="form-control ih-medium ip-light radius-xs b-light px-15" id="a4">
                                    </div>
                                    @error('phone')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label style="font-weight: bold" for="a4"
                                           class="il-gray fs-14 fw-500 align-center">{{__('lang.all_branch')}}</label>
                                    <select style="height: 48px" name="branch"
                                            class="form-control ml-sm-10 ml-0">
                                        <option style="font-weight: bold;font-size: 17px;"
                                                value="{{$admin->company_branch_id}}">{{$admin->company->company_name()}}</option>
                                        @foreach($allBranch as $branch)
                                            <option style="font-weight: bold;font-size: 17px;"
                                                    value="{{$branch->id}}">{{$branch->company_name()}}</option>
                                        @endforeach
                                    </select>
                                    @error('branch')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label style="font-weight: bold" for="a4"
                                           class="il-gray fs-14 fw-500 align-center">{{__('lang.image')}}</label>
                                    <input value="{{old('image')}}" type="file" name="image"
                                           class="form-control ih-medium ip-light radius-xs b-light px-15" id="a4">
                                    @error('image')
                                    <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label style="font-weight: bold" for="a4"
                                           class="il-gray fs-14 fw-500 align-center">{{__('lang.permissions')}}</label>
                                    @php
                                        $adminPermissionId=[];
                                        foreach ($admin->permissions()->get() as $permission) {
                                            $adminPermissionId[] = $permission->id;
                                        }
                                    @endphp
                                    @foreach($permissions as $permission)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="permissions[]"
                                                   value="{{$permission->id}}"
                                                   {{in_array($permission->id,$adminPermissionId) ? 'checked' : ''}}  id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{$permission->desc()}}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <button style="margin: auto" type="submit"
                                class="btn btn-primary btn-default btn-squared ">{{__('lang.save')}}</button>
                    </form>
                </div>
            </div>
            <!-- ends: .card -->
        </div>
    </div>
@endsection