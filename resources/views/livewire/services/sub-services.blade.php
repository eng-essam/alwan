<div style="margin-top: 20px" class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div style="font-size: 20px;font-weight: bold;" class="card-header color-dark fw-500">
                    {{__('lang.sub_services')}}
                    <div>
                        <button style="font-size: 15px" data-toggle="modal" data-target="#addServiceModal"
                                wire:click.prevent="cacheClear" class="btn btn-primary btn-xs btn-rounded ml-1">
                            {{__('lang.add_sub_service')}}
                        </button>
                    </div>
                </div>

                <div style="width: 50%;margin: auto;margin-top: 15px" class="input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">{{__('lang.search')}}</span>
                    </div>
                    <input wire:model="search" type="text" class="form-control"
                           placeholder="{{__('lang.service_name')}}">
                </div>

                <div class="card-body p-0">
                    <div style="padding: 10px" class="table bg-white mb-30">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                <tr style="text-align: center" class="userDatatable-header">
                                    <th>
                                        <span style="font-weight: bold;font-size: 15px;"
                                              class="userDatatable-title">ID</span>
                                    </th>
                                    <th>
                                        <span style="font-weight: bold;font-size: 15px;"
                                              class="userDatatable-title">{{__('lang.image')}}</span>
                                    </th>
                                    <th>
                                        <span style="font-weight: bold;font-size: 15px;"
                                              class="userDatatable-title">{{__('lang.service_name')}}</span>
                                    </th>
                                    <th>
                                        <span style="font-weight: bold;font-size: 15px;"
                                              class="userDatatable-title">{{__('lang.main_service')}}</span>
                                    </th>
                                    <th style="width: 170px">
                                            <span style="font-weight: bold;font-size: 15px;"
                                                  class="userDatatable-title">
                                                <select wire:model="branchType" class="form-control ml-sm-10 ml-0">
                                                    <option style="font-size: 15px;text-align: center"
                                                            value="{{null}}">{{__('lang.all_branch')}}</option>
                                                    @foreach($allBranch as $branch)
                                                        <option style="font-size: 15px;text-align: center"
                                                                value="{{$branch->id}}">{{$branch->company_name()}}</option>
                                                    @endforeach
                                                </select>
                                            </span>
                                    </th>
                                    <th>
                                        <span style="font-weight: bold;font-size: 15px;"
                                              class="userDatatable-title">{{__('lang.is_active')}}</span>
                                    </th>
                                    <th>
                                        <span style="font-weight: bold;font-size: 15px;"
                                              class="userDatatable-title">{{__('lang.offer')}}</span>
                                    </th>
                                    <th>
                                        <span style="font-weight: bold;font-size: 15px;"
                                              class="userDatatable-title">{{__('lang.action')}}</span>
                                    </th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($services as $service)
                                    <tr style="text-align: center;">
                                        <td>
                                            <div style="font-size: 15px" class="userDatatable-content">
                                                {{$services->firstItem()+$loop->index}}
                                            </div>
                                        </td>
                                        <td>
                                            <div style="font-size: 15px" class="userDatatable-content">
                                                <img class="profile-user-img img-square wh-50"
                                                     src="{{asset("uploads/$service->main_img") }}"
                                                     alt="author">
                                            </div>
                                        </td>
                                        <td>
                                            <div style="font-size: 15px" class="userDatatable-content">
                                                {{$service->service_name()}}
                                            </div>
                                        </td>
                                        <td>
                                            <div style="font-size: 15px" class="userDatatable-content">
                                                {{$service->service_branch->service_branch_name()}}
                                            </div>
                                        </td>
                                        <td style="width: 170px">
                                            <div style="font-size: 15px" class="userDatatable-content">
                                                {{$service->company_branch->company_name()}}
                                            </div>
                                        </td>
                                        <td>
                                            <div style="font-size: 15px" class="userDatatable-content">
                                                @if($service->active == 0)
                                                    <span style="font-size: 15px;"
                                                          class="atbd-tag tag-danger tag-transparented">{{__('lang.no')}}</span>
                                                @elseif($service->active == 1)
                                                    <span style="font-size: 15px;"
                                                          class="atbd-tag tag-success tag-transparented">{{__('lang.yes')}}</span>
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            <div style="font-size: 15px" class="userDatatable-content">
                                                @if($service->is_offer == 0)
                                                    <span style="font-size: 15px;"
                                                          class="atbd-tag tag-danger tag-transparented">{{__('lang.no')}}</span>
                                                @elseif($service->is_offer == 1)
                                                    <span style="font-size: 15px;"
                                                          class="atbd-tag tag-success tag-transparented">{{__('lang.yes')}}</span>
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            <div style="width: max-content;margin: auto;" class=" d-flex">
                                                <button style="margin: 3px" data-toggle="modal" data-target="#editServiceModal"
                                                        wire:click="editService({{$service->id}})"
                                                        class="btn btn-primary btn-xs btn-rounded">
                                                    {{__('lang.edit')}}
                                                </button>
                                                <button style="margin: 3px"
                                                        wire:click="deleteService({{$service->id}})"
                                                        class="btn btn-danger btn-xs btn-rounded">
                                                    {{__('lang.delete')}}
                                                </button>

                                                @if($service->active == 0)
                                                    <button style="margin: 3px"
                                                            wire:click="activeService({{$service->id}})"
                                                            class="btn btn-info btn-xs btn-rounded">
                                                        {{__('lang.active')}}
                                                    </button>
                                                @elseif($service->active == 1)
                                                    <button style="margin: 3px"
                                                            wire:click="deactiveService({{$service->id}})"
                                                            class="btn btn-warning  btn-xs btn-rounded">
                                                        {{__('lang.deactive')}}
                                                    </button>
                                                @endif
                                                @if($service->is_offer == 0)
                                                    <button style="margin: 3px"
                                                            wire:click="addServiceOffer({{$service->id}})"
                                                            class="btn btn-secondary  btn-xs btn-rounded">
                                                        {{__('lang.add_to_offers')}}
                                                    </button>
                                                @elseif($service->is_offer == 1)
                                                    <button style="margin: 3px"
                                                            wire:click="removeServiceOffer({{$service->id}})"
                                                            class="btn btn-warning  btn-xs btn-rounded">
                                                        {{__('lang.remove_from_offers')}}
                                                    </button>
                                                @endif
                                                <button style="margin: 3px" data-toggle="modal"
                                                        data-target="#showServiceModal"
                                                        wire:click="showServiceModal({{$service->id}})"
                                                        class="btn btn-dark  btn-xs btn-rounded">
                                                    {{__('lang.information')}}
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div style="margin-top: 10px">
                            {{$services->render()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- start: info Service -->
    <div wire:ignore.self class="modal-info-delete modal fade show" id="showServiceModal" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">{{__('lang.add_sub_product')}}</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <form wire:submit.prevent="submitAddProduct">
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.name_ar')}}</label>
                                <input disabled value="{{$name_ar}}" class="form-control form-control-lg" type="text">

                            </div>

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.name_en')}}</label>
                                <input disabled value="{{$name_en}}" class="form-control form-control-lg" type="text">
                            </div>

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.desc1_ar')}}</label>
                                <textarea disabled class="form-control" id="exampleFormControlTextarea1"
                                          rows="5">{{$desc1_ar}}</textarea>
                            </div>

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.desc1_en')}}</label>
                                <textarea disabled class="form-control" id="exampleFormControlTextarea1"
                                          rows="5">{{$desc1_en}}</textarea>
                            </div>

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.desc2_ar')}}</label>
                                <textarea disabled class="form-control" id="exampleFormControlTextarea1"
                                          rows="5">{{$desc2_ar}}</textarea>
                            </div>

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.desc2_en')}}</label>
                                <textarea disabled class="form-control" id="exampleFormControlTextarea1"
                                          rows="5">{{$desc2_en}}</textarea>
                            </div>
                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.branch')}}</label>
                                <input disabled value="{{$companyBranch}}" class="form-control form-control-lg"
                                       type="text">

                            </div>

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.main_service')}}</label>
                                <input disabled value="{{$mainService}}" class="form-control form-control-lg"
                                       type="text">

                            </div>


                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.mainImage')}}</label>
                                <img class="profile-user-img img-square wh-150" src="{{asset("uploads/$mainImage")}}"
                                     alt="author">
                            </div>

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.subImage')}}</label>
                                <img class="profile-user-img img-square wh-150" src="{{asset("uploads/$subImage")}}"
                                     alt="author">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-outlined btn-sm"
                                data-dismiss="modal">{{__('lang.cancel')}}
                        </button>

                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- ends: info Service -->

    <!-- start: add Service -->
    <div wire:ignore.self class="modal-info-delete modal fade show" id="addServiceModal" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">{{__('lang.edit_sub_service')}}</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <form wire:submit.prevent="submitAddService">
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.name_ar')}}</label>
                                <input wire:model="name_ar" class="form-control form-control-lg" type="text">
                                @error('name_ar')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.name_en')}}</label>
                                <input wire:model="name_en" class="form-control form-control-lg" type="text">
                                @error('name_en')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.desc1_ar')}}</label>
                                <textarea wire:model="desc1_ar" class="form-control" id="exampleFormControlTextarea1"
                                          rows="5"></textarea>
                                @error('desc1_ar')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.desc1_en')}}</label>
                                <textarea wire:model="desc1_en" class="form-control" id="exampleFormControlTextarea1"
                                          rows="5"></textarea>
                                @error('desc1_en')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.desc2_ar')}}</label>
                                <textarea wire:model="desc2_ar" class="form-control" id="exampleFormControlTextarea1"
                                          rows="5"></textarea>
                                @error('desc2_ar')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.desc2_en')}}</label>
                                <textarea wire:model="desc2_en" class="form-control" id="exampleFormControlTextarea1"
                                          rows="5"></textarea>
                                @error('desc2_en')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.all_branch')}}</label>
                                <select wire:model="companyBranch" class="form-control ml-sm-10 ml-0">
                                    @foreach($allBranch as $branch)
                                        <option style="font-size: 15px;text-align: center"
                                                value="{{$branch->id}}">{{$branch->company_name()}}</option>
                                    @endforeach
                                </select>
                                @error('companyBranch')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.main_services')}}</label>
                                <select wire:model="mainService" class="form-control ml-sm-10 ml-0">
                                    @foreach($allMainService as $oneMainService)
                                        <option style="font-size: 15px;text-align: center"
                                                value="{{$oneMainService->id}}">{{$oneMainService->service_branch_name()}}</option>
                                    @endforeach
                                </select>
                                @error('mainService')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.mainImage')}}</label>
                                <input type="file" wire:model="mainImage" class="form-control form-control-lg">
                                @error('mainImage')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.subImage')}}</label>
                                <input type="file" wire:model="subImage" class="form-control form-control-lg">
                                @error('subImage')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-outlined btn-sm"
                                data-dismiss="modal">{{__('lang.cancel')}}
                        </button>
                        <button type="submit" class="btn btn-success btn-outlined btn-sm">{{__('lang.save')}}</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- ends: add Service -->

    <!-- start: edit Service -->
    <div wire:ignore.self class="modal-info-delete modal fade show" id="editServiceModal" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">{{__('lang.edit_sub_service')}}</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <form wire:submit.prevent="submitEditService">
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.name_ar')}}</label>
                                <input wire:model="name_ar" value="{{$name_ar}}" class="form-control form-control-lg"
                                       type="text">
                                @error('name_ar')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.name_en')}}</label>
                                <input wire:model="name_en" value="{{$name_en}}" class="form-control form-control-lg"
                                       type="text">
                                @error('name_en')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.desc1_ar')}}</label>
                                <textarea wire:model="desc1_ar" class="form-control" id="exampleFormControlTextarea1"
                                          rows="5">{{$desc1_ar}}</textarea>
                                @error('desc1_ar')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.desc1_en')}}</label>
                                <textarea wire:model="desc1_en" class="form-control" id="exampleFormControlTextarea1"
                                          rows="5">{{$desc1_en}}</textarea>
                                @error('desc1_en')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.desc2_ar')}}</label>
                                <textarea wire:model="desc2_ar" class="form-control" id="exampleFormControlTextarea1"
                                          rows="5">{{$desc2_ar}}</textarea>
                                @error('desc2_ar')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.desc2_en')}}</label>
                                <textarea wire:model="desc2_en" class="form-control" id="exampleFormControlTextarea1"
                                          rows="5">{{$desc2_en}}</textarea>
                                @error('desc2_en')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.all_branch')}}</label>
                                <select wire:model="companyBranch" class="form-control ml-sm-10 ml-0">
                                    @foreach($allBranch as $branch)
                                        <option style="font-size: 15px;text-align: center"
                                                value="{{$branch->id}}" {{($branch->id == $companyBranch) ? 'selected' : ''}}>
                                            {{$branch->company_name()}}</option>
                                    @endforeach
                                </select>
                                @error('companyBranch')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.main_services')}}</label>
                                <select wire:model="mainService" class="form-control ml-sm-10 ml-0">
                                    @foreach($allMainService as $oneMainService)
                                        <option style="font-size: 15px;text-align: center"
                                                value="{{$oneMainService->id}}" {{($oneMainService->id == $mainService) ? 'selected' : ''}}>
                                            {{$oneMainService->service_branch_name()}}
                                        </option>
                                    @endforeach
                                </select>
                                @error('mainService')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.mainImage')}}</label>
                                <input type="file" wire:model="mainImage" class="form-control form-control-lg">
                                @error('mainImage')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label style="font-weight: bold">{{__('lang.subImage')}}</label>
                                <input type="file" wire:model="subImage" class="form-control form-control-lg">
                                @error('subImage')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-outlined btn-sm"
                                data-dismiss="modal">{{__('lang.cancel')}}
                        </button>
                        <button type="submit" class="btn btn-success btn-outlined btn-sm">{{__('lang.save')}}</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- ends: edit Service -->

</div>



