<div>
    <div class="row" data-select2-id="15">
        <div class="col-lg-12">
            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">{{__('lang.profile')}}</h4>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-5">
            <!-- Profile Acoount -->
            <div class="card mb-25">
                <div class="card-body text-center p-0">
                    <div class="account-profile border-bottom pt-25 px-25 pb-0 flex-column d-flex align-items-center ">
                        <div class="ap-img mb-20 pro_img_wrapper">
                            <label for="file-upload">
                                <!-- Profile picture image-->
                                <img class="ap-img__main rounded-circle wh-120"
                                     src="{{asset("uploads/" . $auth->img)}}" alt="profile">
                                <span wire:click="cacheClear" data-toggle="modal" data-target="#editImg" class="cross"
                                      id="remove_pro_pic">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                         class="feather feather-camera">
                                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                                        <circle cx="12" cy="13" r="4"></circle>
                                    </svg>
                                </span>
                            </label>
                        </div>
                        <div class="ap-nameAddress pb-3">
                            <h5 class="ap-nameAddress__title">{{$auth->name}}</h5>
                            <p class="ap-nameAddress__subTitle fs-14 m-0">{{$auth->role->name}}</p>
                        </div>
                    </div>
                    <div class="ps-tab p-20 pb-25">
                        <div class="nav flex-column text-left" id="v-pills-tab" role="tablist"
                             aria-orientation="vertical">

                            <a wire:click="cacheClear" data-toggle="modal" data-target="#editPassword" class="nav-link"
                               id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                               role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-key">
                                    <path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path>
                                </svg>
                                {{__('lang.change_password')}}
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Profile Acoount End -->
        </div>
        <div class="col-xl-9 col-lg-8 col-sm-7" data-select2-id="14">
            <div class="mb-50">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade  show active" id="v-pills-home" role="tabpanel"
                         aria-labelledby="v-pills-home-tab">
                        <!-- Edit Profile -->
                        <div class="edit-profile mt-25">
                            <div class="card">
                                <div class="card-header px-sm-25 px-3">
                                    <div class="edit-profile__title">
                                        <h6>Edit Profile</h6>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-6 col-lg-8 col-sm-10" data-select2-id="13">
                                            <div class="edit-profile__body mx-lg-20" data-select2-id="12">
                                                <form data-select2-id="11">
                                                    <div class="form-group mb-20">
                                                        <label for="names">{{__('lang.name')}}</label>
                                                        <div style="display: flex">
                                                            <input type="text" value="{{$auth->name}}" disabled
                                                                   class="form-control" id="names">
                                                            <a href="" wire:click="setName" data-toggle="modal"
                                                               data-target="#editName"
                                                               style="background-color: #F4F5F7;width: 50px;border: 1px #E3E6EF solid;border-radius:5px ;">
                                                                <svg style="margin: 10px;color: #4347D9"
                                                                     xmlns="http://www.w3.org/2000/svg" width="25"
                                                                     height="25" fill="currentColor"
                                                                     class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                                    <path fill-rule="evenodd"
                                                                          d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-20">
                                                        <label for="names">{{__('lang.email_Address')}}</label>
                                                        <div style="display: flex">
                                                            <input type="text" value="{{$auth->email}}" disabled
                                                                   class="form-control" id="names">
                                                            <a href="" wire:click="setEmail" data-toggle="modal"
                                                               data-target="#editEmail"
                                                               style="background-color: #F4F5F7;width: 50px;border: 1px #E3E6EF solid;border-radius:5px ;">
                                                                <svg style="margin: 10px;color: #4347D9"
                                                                     xmlns="http://www.w3.org/2000/svg" width="25"
                                                                     height="25" fill="currentColor"
                                                                     class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                                    <path fill-rule="evenodd"
                                                                          d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-20">
                                                        <label for="names">{{__('lang.phone')}}</label>
                                                        <div style="display: flex">
                                                            <input type="text" value="{{$auth->phone}}" disabled
                                                                   class="form-control" id="names">
                                                            <a href="" wire:click="setPhone" data-toggle="modal"
                                                               data-target="#editPhone" wire:click=""
                                                               style="background-color: #F4F5F7;width: 50px;border: 1px #E3E6EF solid;border-radius:5px ;">
                                                                <svg style="margin: 10px;color: #4347D9"
                                                                     xmlns="http://www.w3.org/2000/svg" width="25"
                                                                     height="25" fill="currentColor"
                                                                     class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                                    <path fill-rule="evenodd"
                                                                          d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Edit Profile End -->
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- start: Edit name -->
    <div wire:ignore.self class="modal-info-delete modal fade show" id="editName" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">{{__('lang.change_name')}}</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <form wire:submit.prevent="submitEditName">
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-6 mb-25">
                                <label>{{__('lang.name')}}</label>
                                <input wire:model="name" value="{{$name}}" class="form-control form-control-lg"
                                       type="text">
                                @error('name')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-outlined btn-sm"
                                data-dismiss="modal">{{__('lang.cancel')}}
                        </button>
                        <button type="submit" class="btn btn-success btn-outlined btn-sm">{{__('lang.save')}}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ends: Edit name -->

    <!-- start: edit Email -->
    <div wire:ignore.self class="modal-info-delete modal fade show" id="editEmail" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">{{__('lang.change_email')}}</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <form wire:submit.prevent="submitEditEmail">
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-6 mb-25">
                                <label>{{__('lang.email_Address')}}</label>
                                <input wire:model="email" value="{{$email}}" class="form-control form-control-lg"
                                       type="text">
                                @error('email')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-outlined btn-sm"
                                data-dismiss="modal">{{__('lang.cancel')}}
                        </button>
                        <button type="submit" class="btn btn-success btn-outlined btn-sm">{{__('lang.save')}}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ends: edit Email -->

    <!-- start: editPhone -->
    <div wire:ignore.self class="modal-info-delete modal fade show" id="editPhone" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">{{__('lang.change_phone')}}</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <form wire:submit.prevent="submitEditPhone">
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-6 mb-25">
                                <label>{{__('lang.phone')}}</label>
                                <div style="direction: rtl" class="input-group ">
                                    <input wire:model="phone" value="{{$phone}}" type="text" class="form-control">
                                    <div style="direction: ltr;" class="input-group-prepend">
                                    <span style="font-size: 15px;font-weight: bold;" class="input-group-text"
                                          id="inputGroup-sizing-default">+966</span>
                                    </div>
                                </div>
                                @error('phone')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-outlined btn-sm"
                                data-dismiss="modal">{{__('lang.cancel')}}
                        </button>
                        <button type="submit" class="btn btn-success btn-outlined btn-sm">{{__('lang.save')}}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ends: edit Phone -->

    <!-- start: edit Img -->
    <div wire:ignore.self class="modal-info-delete modal fade show" id="editImg" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">{{__('lang.change_image')}}</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <form wire:submit.prevent="submitEditImage">
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-6 mb-25">
                                <label>{{__('lang.change_image')}}</label>
                                <div class="atbd-tag-wrap">
                                    <div class="atbd-upload">
                                        <div class="atbd-upload__button">
                                            <a href="javascript:void(0)"
                                               class="btn btn-lg btn-outline-lighten btn-upload"
                                               onclick="$('#upload-1').click()">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-upload">
                                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                    <polyline points="17 8 12 3 7 8"></polyline>
                                                    <line x1="12" y1="3" x2="12" y2="15"></line>
                                                </svg>
                                                Click to Upload</a>
                                            <input type="file" wire:model="image" class="upload-one" id="upload-1">
                                        </div>
                                        <div class="atbd-upload__file">
                                            <ul>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @error('image')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-outlined btn-sm"
                                data-dismiss="modal">{{__('lang.cancel')}}
                        </button>
                        <button type="submit" class="btn btn-success btn-outlined btn-sm">{{__('lang.save')}}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ends: edit Img -->

    <!-- start: Edit name -->
    <div wire:ignore.self class="modal-info-delete modal fade show" id="editPassword" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">{{__('lang.change_password')}}</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <form wire:submit.prevent="submitEditPassword">
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-12 mb-25">
                                <label>{{__('lang.old_password')}}</label>
                                <input wire:model="password" class="form-control form-control-lg"
                                       type="password">
                                @error('password')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-25">
                                <label>{{__('lang.new_password')}}</label>
                                <input wire:model="newPassword" class="form-control form-control-lg"
                                       type="password">
                                @error('newPassword')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-25">
                                <label>{{__('lang.password_confirmation')}}</label>
                                <input wire:model="passwordConfirmation" class="form-control form-control-lg"
                                       type="password">
                                @error('passwordConfirmation')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-outlined btn-sm"
                                data-dismiss="modal">{{__('lang.cancel')}}
                        </button>
                        <button type="submit" class="btn btn-success btn-outlined btn-sm">{{__('lang.save')}}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ends: Edit name -->
</div>
