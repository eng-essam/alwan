<div>
    <div style="margin-top: 20px" class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div style="font-size: 20px;font-weight: bold;" class="card-header color-dark fw-500">
                        {{__('lang.service_order')}}
                    </div>

                    <div style="width: 50%;margin: auto;margin-top: 15px" class="input-group ">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">{{__('lang.search')}}</span>
                        </div>
                        <input wire:model="searchOrder" type="text" class="form-control"
                               placeholder="{{__('lang.order_id')}}">
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
                                              class="userDatatable-title">{{__('lang.order_id')}}</span>
                                        </th>

                                        <th>
                                        <span style="font-weight: bold;font-size: 15px;"
                                              class="userDatatable-title">{{__('lang.user_name')}}</span>
                                        </th>

                                        <th>
                                        <span style="font-weight: bold;font-size: 15px;"
                                              class="userDatatable-title">{{__('lang.service_name')}}</span>
                                        </th>

                                        <th>
                                        <span style="font-weight: bold;font-size: 15px;"
                                              class="userDatatable-title">{{__('lang.service_desc')}}</span>
                                        </th>

                                        <th>
                                        <span style="font-weight: bold;font-size: 15px;"
                                              class="userDatatable-title">{{__('lang.order_status')}}</span>
                                        </th>

                                        <th>
                                        <span
                                                style="font-weight: bold;font-size: 15px;"
                                                class="userDatatable-title">{{__('lang.user_file')}}</span>
                                        </th>

                                        <th>
                                        <span style="font-weight: bold;font-size: 15px;"
                                              class="userDatatable-title">{{__('lang.action')}}</span>
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allServiceOrders as $order)
                                        <tr style="text-align: center;">
                                            <td>
                                                <div style="font-size: 15px" class="userDatatable-content">
                                                    {{$allServiceOrders->firstItem()+$loop->index}}
                                                </div>
                                            </td>
                                            <td>
                                                <div style="font-size: 15px" class="userDatatable-content">
                                                    {{$order->order_id}}
                                                </div>
                                            </td>
                                            <td>
                                                <div style="font-size: 15px" class="userDatatable-content">
                                                    {{$order->user->name}}
                                                </div>
                                            </td>
                                            <td>
                                                <div style="font-size: 15px" class="userDatatable-content">
                                                    {{$order->service->service_name()}}
                                                </div>
                                            </td>
                                            <td>
                                                <div style="font-size: 15px" class="userDatatable-content">
                                                    {{$order->details}}
                                                </div>
                                            </td>
                                            <td>
                                                <div style="font-size: 15px" class="userDatatable-content">
                                                    <span style="font-size: 15px;"
                                                          class="atbd-tag tag-success tag-transparented">{{$order->status->status()}}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div style="font-size: 15px" class="userDatatable-content">
                                                    <a href="" wire:click.prevent="downloadFile({{$order->id}})">
                                                        <i style="color: #4347D9"
                                                           class="fas fa-file-download fa-2x"></i>
                                                        <p>
                                                            <span class="atbd-tag tag-success tag-transparented">{{__('lang.download')}}</span>
                                                        </p>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div style="width: max-content;margin: auto;" class=" d-flex">
                                                    <button style="margin: 3px"
                                                            wire:click.prevent="acceptOrder({{$order->id}})"
                                                            data-toggle="modal" data-target="#acceptOrderModal"
                                                            class="btn btn-success  btn-xs btn-rounded">
                                                        {{__('lang.accept')}}
                                                    </button>
                                                    <button style="margin: 3px"
                                                            wire:click="refusalOrder({{$order->id}})"
                                                            data-toggle="modal" data-target="#refusalOrderModal"
                                                            class="btn btn-secondary btn-xs btn-rounded">
                                                        {{__('lang.refusal')}}
                                                    </button>
                                                    <button style="margin: 3px"
                                                            wire:click="deleteOrder({{$order->id}})"
                                                            data-toggle="modal" data-target="#deleteOrderModal"
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
                                {{$allServiceOrders->render()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ends: .accept Order Modal -->
    <div wire:ignore.self class="modal-info-delete modal fade show" id="acceptOrderModal" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-sm modal-info" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">{{__('lang.accept_order')}}</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <form wire:submit.prevent="submitAcceptOrder">
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-12 mb-25">
                                <label>{{__('lang.price')}}</label>
                                <input wire:model="price" class="form-control form-control-lg" type="number"
                                       step="0.01">
                                @error('price')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" wire:click="cacheClear" class="btn btn-danger btn-outlined btn-sm"
                                data-dismiss="modal">{{__('lang.cancel')}}
                        </button>
                        <button type="submit" class="btn btn-success btn-outlined btn-sm">{{__('lang.save')}}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ends: .accept Order Modal-->

    <!-- ends: .refusal Order Modal -->
    <div wire:ignore.self class="modal-info-delete modal fade show" id="refusalOrderModal" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-sm modal-info" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">{{__('lang.refusal_order')}}</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <form wire:submit.prevent="submitRefusalOrder">
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-12 mb-25">
                                <label>{{__('lang.reason_refuse')}}(ar)</label>
                                <textarea wire:model="status_message_ar" class="form-control form-control-lg"
                                          rows="4"></textarea>
                                @error('status_message_ar')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-25">
                                <label>{{__('lang.reason_refuse')}}(en)</label>
                                <textarea wire:model="status_message_en" class="form-control form-control-lg"
                                          rows="4"></textarea>
                                @error('status_message_en')
                                <small style="color: red">{{ $message }}.</small>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" wire:click="cacheClear" class="btn btn-danger btn-outlined btn-sm"
                                data-dismiss="modal">{{__('lang.cancel')}}
                        </button>
                        <button type="submit" class="btn btn-success btn-outlined btn-sm">{{__('lang.save')}}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ends: .refusal Order Modal-->

    <!-- ends: .delete Order Modal -->
    <div wire:ignore.self class="modal-info-delete modal fade show" id="deleteOrderModal" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-sm modal-info" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-info-body d-flex">
                        <div class="modal-info-icon warning">
                            <span data-feather="info"></span>
                        </div>
                        <div class="modal-info-text">
                            <h6>{{__('lang.sure_delete_request')}}</h6>
                            <p>{{__('lang.sure_delete_request_desc')}}</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click="cacheClear" class="btn btn-danger btn-outlined btn-sm"
                            data-dismiss="modal">{{__('lang.no')}}</button>
                    <button type="button" wire:click="submitDeleteOrderModal"
                            class="btn btn-success btn-outlined btn-sm"
                            data-dismiss="modal">{{__('lang.yes')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- ends: .delete Order Modal-->
</div>
