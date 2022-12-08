<div style="margin-top: 20px" class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div style="font-size: 20px;font-weight: bold;" class="card-header color-dark fw-500">
                    {{__('lang.discount_coupons')}}
                    <div>
                        <button style="font-size: 15px" data-toggle="modal" data-target="#addCouponModal"
                                wire:click.prevent="cacheClear" class="btn btn-primary btn-xs btn-rounded ml-1">
                            {{__('lang.add_coupons')}}
                        </button>
                    </div>
                </div>

                <div style="width: 50%;margin: auto;margin-top: 15px" class="input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">{{__('lang.search')}}</span>
                    </div>
                    <input wire:model="searchCoupon" type="text" class="form-control"
                           placeholder="{{__('lang.coupon')}}">
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
                                              class="userDatatable-title">{{__('lang.coupon')}}</span>
                                    </th>

                                    <th>
                                        <span style="font-weight: bold;font-size: 15px;"
                                              class="userDatatable-title">{{__('lang.discount_percentage')}}</span>
                                    </th>

                                    <th>
                                        <span style="font-weight: bold;font-size: 15px;"
                                              class="userDatatable-title">{{__('lang.action')}}</span>
                                    </th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($allCoupons as $coupon)
                                    <tr style="text-align: center;">
                                        <td>
                                            <div style="font-size: 15px" class="userDatatable-content">
                                                {{$allCoupons->firstItem()+$loop->index}}
                                            </div>
                                        </td>

                                        <td>
                                            <div style="font-size: 15px" class="userDatatable-content">
                                                {{$coupon->cobon}}
                                            </div>
                                        </td>
                                        <td>
                                            <div style="font-size: 15px" class="userDatatable-content">
                                                {{$coupon->percentage}} %
                                            </div>
                                        </td>

                                        <td>
                                            <div style="width: max-content;margin: auto;" class=" d-flex">
                                                <button style="margin: 3px"
                                                        wire:click.prevent="editeCoupon({{$coupon->id}})"
                                                        data-toggle="modal" data-target="#editCouponModal"
                                                        class="btn btn-success  btn-xs btn-rounded">
                                                    {{__('lang.edit')}}
                                                </button>
                                                <button style="margin: 3px"
                                                        wire:click="deleteCoupon({{$coupon->id}})"
                                                        data-toggle="modal" data-target="#deleteCouponModal"
                                                        class="btn btn-danger btn-xs btn-rounded">
                                                    {{__('lang.delete')}}
                                                </button>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div style="margin-top: 10px">
                            {{$allCoupons->render()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- start: add_ Company -->
    <div wire:ignore.self class="modal-info-delete modal fade show" id="addCouponModal" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">{{__('lang.add_coupons')}}</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <form wire:submit.prevent="submitAddCoupon">
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-6 mb-25">
                                <label>{{__('lang.coupon')}}</label>
                                <input wire:model="coupon" class="form-control form-control-lg" type="text">
                                @error('coupon')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label>{{__('lang.discount_percentage')}}</label>
                                <input wire:model="discount_percentage" class="form-control form-control-lg"
                                       type="number">
                                @error('discount_percentage')
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
    <!-- ends: .add_main_service -->

    <!-- start: edit Company -->
    <div wire:ignore.self class="modal-info-delete modal fade show" id="editCouponModal" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">{{__('lang.edit_branche')}}</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <form wire:submit.prevent="submitEditCoupon">
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-6 mb-25">
                                <label>{{__('lang.coupon')}}</label>
                                <input wire:model="coupon" value="{{$coupon}}" class="form-control form-control-lg"
                                       type="text">
                                @error('coupon')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-25">
                                <label>{{__('lang.name_en')}}</label>
                                <input wire:model="discount_percentage" value="{{$discount_percentage}}"
                                       class="form-control form-control-lg"
                                       type="number">
                                @error('discount_percentage')
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
    <!-- ends: edit Company -->

    <!-- ends: .delete_main_service -->
    <div wire:ignore.self class="modal-info-delete modal fade show" id="deleteCouponModal" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-sm modal-info" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-info-body d-flex">
                        <div class="modal-info-icon warning">
                            <span data-feather="info"></span>
                        </div>
                        <div class="modal-info-text">
                            <h6>{{__('lang.sure_delete_coupon')}}</h6>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-outlined btn-sm"
                            data-dismiss="modal">{{__('lang.no')}}</button>
                    <button type="button" wire:click="submitDeleteCoupon"
                            class="btn btn-success btn-outlined btn-sm"
                            data-dismiss="modal">{{__('lang.yes')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- ends: .delete_main_service-->
</div>


