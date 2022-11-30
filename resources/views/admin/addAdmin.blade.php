@extends('layouts.adminLayout')

@section('title')
    {{__('lang.addAdmin')}}
@endsection

@section('content')
    <div style="margin-top: 15px" class="row">
        <div class="col-lg-12">
            <div class="card card-default card-md mb-4">
                <div class="card-header">
                    <h6 style="font-size: 20px;font-weight: bold;">{{__('lang.addAdmin')}}</h6>
                </div>
                <div class="card-body py-md-25">
                    <form method="post" action="{{url('admin/add-admin')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label style="font-weight: bold" for="a4"
                                           class="il-gray fs-14 fw-500 align-center">{{__('lang.name')}}</label>
                                    <input value="{{old('name')}}" type="text" name="name"
                                           class="form-control ih-medium ip-light radius-xs b-light px-15" id="a4">
                                    @error('name')
                                    <small style="color: red">{{ $message }}.</small>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label style="font-weight: bold" for="a4"
                                           class="il-gray fs-14 fw-500 align-center">{{__('lang.email_Address')}}</label>
                                    <input value="{{old('email')}}" type="text" name="email"
                                           class="form-control ih-medium ip-light radius-xs b-light px-15" id="a4">
                                    @error('email')
                                    <small style="color: red">{{ $message }}.</small>
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
                                        <input value="{{old('phone')}}" type="number" name="phone"
                                               class="form-control ih-medium ip-light radius-xs b-light px-15" id="a4">
                                    </div>
                                    @error('phone')
                                    <small style="color: red">{{ $message }}.</small>
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
                                    <small style="color: red">{{ $message }}.</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label style="font-weight: bold" for="a4"
                                           class="il-gray fs-14 fw-500 align-center">{{__('lang.password')}}</label>
                                    <input type="password" name="password"
                                           class="form-control ih-medium ip-light radius-xs b-light px-15" id="a4">
                                    @error('password')
                                    <small style="color: red">{{ $message }}.</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label style="font-weight: bold" for="a4"
                                           class="il-gray fs-14 fw-500 align-center">{{__('lang.password_confirmation')}}</label>
                                    <input type="password" name="password_confirmation"
                                           class="form-control ih-medium ip-light radius-xs b-light px-15" id="a4">
                                    @error('password_confirmation')
                                    <small style="color: red">{{ $message }}.</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label style="font-weight: bold" for="a4"
                                           class="il-gray fs-14 fw-500 align-center">{{__('lang.all_branch')}}</label>
                                    <select style="height: 48px" name="branch"
                                            class="form-control ml-sm-10 ml-0">
                                        <option style="font-weight: bold;font-size: 17px;"
                                                value="{{null}}">{{__('lang.select_branch')}}</option>
                                        @foreach($allBranch as $branch)
                                            <option style="font-weight: bold;font-size: 17px;"
                                                    value="{{$branch->id}}">{{$branch->company_name()}}</option>
                                        @endforeach
                                    </select>
                                    @error('branch')
                                    <small style="color: red">{{ $message }}.</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="font-weight: bold" for="a4"
                                           class="il-gray fs-14 fw-500 align-center">{{__('lang.permissions')}}</label>
                                    @foreach($permissions as $permission)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="permissions[]"
                                                   value="{{$permission->id}}" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{$permission->desc()}}
                                            </label>
                                        </div>
                                    @endforeach
                                    @error('permissions')
                                    <small style="color: red">{{ $message }}.</small>
                                    @enderror
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