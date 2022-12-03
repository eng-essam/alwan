<div style="margin-top: 20px" class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div style="font-size: 20px;font-weight: bold;" class="card-header color-dark fw-500">
                    {{__('lang.sub_products')}}
                    <div>
                        <button style="font-size: 15px" data-toggle="modal" data-target="#addMainProductModal"
                                wire:click.prevent="cacheClear" class="btn btn-primary btn-xs btn-rounded ml-1">
                            {{__('lang.add_sub_product')}}
                        </button>
                    </div>
                </div>

                <div style="width: 50%;margin: auto;margin-top: 15px" class="input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">{{__('lang.search')}}</span>
                    </div>
                    <input wire:model="search" type="text" class="form-control"
                           placeholder="{{__('lang.product_name')}}">
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
                                              class="userDatatable-title">{{__('lang.product_name')}}</span>
                                    </th>
                                    <th>
                                        <span style="font-weight: bold;font-size: 15px;"
                                              class="userDatatable-title">{{__('lang.product_desc')}}</span>
                                    </th>
                                    <th>
                                        <span style="font-weight: bold;font-size: 15px;"
                                              class="userDatatable-title">{{__('lang.product_price')}}</span>
                                    </th>
                                    <th>
                                        <span style="font-weight: bold;font-size: 15px;"
                                              class="userDatatable-title">{{__('lang.main_product')}}</span>
                                    </th>
                                    <th>
                                        <span style="font-weight: bold;font-size: 15px;"
                                              class="userDatatable-title">{{__('lang.branch')}}</span>
                                    </th>
                                    <th>
                                        <span style="font-weight: bold;font-size: 15px;"
                                              class="userDatatable-title">{{__('lang.is_active')}}</span>
                                    </th>
                                    <th>
                                        <span style="font-weight: bold;font-size: 15px;"
                                              class="userDatatable-title">{{__('lang.action')}}</span>
                                    </th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr style="text-align: center;">
                                        <td>
                                            <div style="font-size: 15px" class="userDatatable-content">
                                                {{$products->firstItem()+$loop->index}}
                                            </div>
                                        </td>
                                        <td>
                                            <div style="font-size: 15px" class="userDatatable-content">
                                                <img class="profile-user-img img-square wh-80"
                                                     src="{{asset("uploads/$product->product_img") }}"
                                                     alt="author">
                                            </div>
                                        </td>
                                        <td>
                                            <div style="font-size: 15px" class="userDatatable-content">
                                                {{$product->product_name()}}
                                            </div>
                                        </td>
                                        <td>
                                            <div style="font-size: 15px" class="userDatatable-content">
                                                {{$product->product_desc()}}
                                            </div>
                                        </td>


                                        <td>
                                            <div style="font-size: 15px" class="userDatatable-content">

                                            </div>
                                        </td>
                                        <td>
                                            <div style="font-size: 15px" class="userDatatable-content">
                                                {{$product->product_branch->product_branch_name()}}
                                            </div>
                                        </td>
                                        <td>
                                            <div style="font-size: 15px" class="userDatatable-content">
                                                {{$product->company_branch->company_name()}}
                                            </div>
                                        </td>
                                        <td>
                                            <div style="font-size: 15px" class="userDatatable-content">
                                                @if($product->active == 0)
                                                    <span style="font-size: 15px;"
                                                          class="atbd-tag tag-danger tag-transparented">{{__('lang.no')}}</span>
                                                @elseif($product->active == 1)
                                                    <span style="font-size: 15px;"
                                                          class="atbd-tag tag-success tag-transparented">{{__('lang.yes')}}</span>
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            <div style="width: max-content;margin: auto;" class=" d-flex">
                                                <button style="margin: 3px"
                                                        wire:click.prevent="editeProduct({{$product->id}})"
                                                        data-toggle="modal" data-target="#editProductModal"
                                                        class="btn btn-success  btn-xs btn-rounded">
                                                    {{__('lang.edit')}}
                                                </button>
                                                <button style="margin: 3px"
                                                        wire:click="deleteProduct({{$product->id}})"
                                                        data-toggle="modal" data-target="#deleteProduct"
                                                        class="btn btn-danger btn-xs btn-rounded">
                                                    {{__('lang.delete')}}
                                                </button>
                                                @if($product->active == 0)
                                                    <button style="margin: 3px"
                                                            wire:click="activeProduct({{$product->id}})"
                                                            class="btn btn-info btn-xs btn-rounded">
                                                        {{__('lang.active')}}
                                                    </button>
                                                @elseif($product->active == 1)
                                                    <button style="margin: 3px"
                                                            wire:click="deactiveProduct({{$product->id}})"
                                                            class="btn btn-info btn-xs btn-rounded">
                                                        {{__('lang.deactive')}}
                                                    </button>
                                                @endif

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div style="margin-top: 10px">
                            {{$products->render()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- start: add_main_Product -->
    <div wire:ignore.self class="modal-info-delete modal fade show" id="addProductModal" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">{{__('lang.add_main_product')}}</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <form wire:submit.prevent="submitAddMainProduct">
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-6 mb-25">
                                <label>{{__('lang.name_ar')}}</label>
                                <input wire:model="name_ar" class="form-control form-control-lg" type="text">
                                @error('name_ar')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label>{{__('lang.name_en')}}</label>
                                <input wire:model="name_en" class="form-control form-control-lg" type="text">
                                @error('name_en')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label>{{__('lang.desc_ar')}}</label>
                                <textarea wire:model="desc_ar" class="form-control" id="exampleFormControlTextarea1"
                                          rows="5"></textarea>
                                @error('desc_ar')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label>{{__('lang.desc_en')}}</label>
                                <textarea wire:model="desc_en" class="form-control" id="exampleFormControlTextarea1"
                                          rows="5"></textarea>
                                @error('desc_en')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label>{{__('lang.image')}}</label>
                                <div class="atbd-upload__button">
                                    <a href="javascript:void(0)" class="btn btn-lg btn-outline-lighten btn-upload"
                                       onclick="$('#upload-3').click()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round" class="feather feather-upload">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="17 8 12 3 7 8"></polyline>
                                            <line x1="12" y1="3" x2="12" y2="15"></line>
                                        </svg>
                                        Upload</a>
                                    <input style="display: none" type="file" wire:model="productImage"
                                           class="upload-one"
                                           id="upload-3">
                                </div>
                                @error('productImage')
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
    <!-- ends: .modal-Basic -->

    <!-- start: edit_Product -->
    <div wire:ignore.self class="modal-info-delete modal fade show" id="editProductModal" tabindex="-1"
         role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">{{__('lang.edit_product')}}</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <form wire:submit.prevent="submitEditeMainProduct">
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-6 mb-25">
                                <label>{{__('lang.name_ar')}}</label>
                                <input wire:model="name_ar" class="form-control form-control-lg" type="text">
                                @error('name_ar')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label>{{__('lang.name_en')}}</label>
                                <input wire:model="name_en" class="form-control form-control-lg" type="text">
                                @error('name_en')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label>{{__('lang.desc_ar')}}</label>
                                <textarea wire:model="desc_ar" class="form-control" id="exampleFormControlTextarea1"
                                          rows="5"></textarea>
                                @error('desc_ar')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label>{{__('lang.desc_en')}}</label>
                                <textarea wire:model="desc_en" class="form-control" id="exampleFormControlTextarea1"
                                          rows="5"></textarea>
                                @error('desc_en')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label>{{__('lang.image')}}</label>
                                <div class="atbd-upload__button">
                                    <a href="javascript:void(0)" class="btn btn-lg btn-outline-lighten btn-upload"
                                       onclick="$('#upload-3').click()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round" class="feather feather-upload">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="17 8 12 3 7 8"></polyline>
                                            <line x1="12" y1="3" x2="12" y2="15"></line>
                                        </svg>
                                        Upload</a>
                                    <input style="display: none" type="file" wire:model="productImage"
                                           class="upload-one"
                                           id="upload-3">
                                </div> @error('productImage')
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
    <!-- ends: .modal-Basic -->

    <!-- ends: .delete_Product -->
    <div wire:ignore.self class="modal-info-delete modal fade show" id="deleteProduct" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-sm modal-info" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-info-body d-flex">
                        <div class="modal-info-icon warning">
                            <span data-feather="info"></span>
                        </div>
                        <div class="modal-info-text">
                            <h6>{{__('lang.sure_delete_main_product')}}</h6>
                            <p>{{__('lang.desc_sure_delete_main_product')}}</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-outlined btn-sm"
                            data-dismiss="modal">{{__('lang.no')}}</button>
                    <button type="button" wire:click="submitDeleteMainProduct"
                            class="btn btn-success btn-outlined btn-sm"
                            data-dismiss="modal">{{__('lang.yes')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- ends: .modal-info-Delete -->
</div>


