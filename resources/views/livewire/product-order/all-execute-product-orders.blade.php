<div>
    <div>
        <div style="margin-top: 20px" class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div style="font-size: 20px;font-weight: bold;" class="card-header color-dark fw-500">
                            {{__('lang.execute_products')}}
                        </div>

                        <div style="width: 50%;margin: auto;margin-top: 15px" class="input-group ">
                            <div class="input-group-prepend">
                                <span class="input-group-text"
                                      id="inputGroup-sizing-default">{{__('lang.search')}}</span>
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
                                                      class="userDatatable-title">{{__('lang.product_name')}}</span>
                                            </th>

                                            <th>
                                                <span style="font-weight: bold;font-size: 15px;"
                                                      class="userDatatable-title">{{__('lang.product_desc')}}</span>
                                            </th>

                                            <th>
                                                <span style="font-weight: bold;font-size: 15px;"
                                                      class="userDatatable-title">{{__('lang.order_status')}}</span>
                                            </th>

                                            <th>
                                                <span style="font-weight: bold;font-size: 15px;"
                                                      class="userDatatable-title">{{__('lang.user_file')}}</span>
                                            </th>

                                            <th>
                                                <span style="font-weight: bold;font-size: 15px;"
                                                      class="userDatatable-title">{{__('lang.admin_file_sorting')}}</span>
                                            </th>

                                            <th>
                                                <span style="font-weight: bold;font-size: 15px;"
                                                      class="userDatatable-title">{{__('lang.action')}}</span>
                                            </th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($allProductOrders as $order)
                                            <tr style="text-align: center;">
                                                <td>
                                                    <div style="font-size: 15px" class="userDatatable-content">
                                                        {{$allProductOrders->firstItem()+$loop->index}}
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
                                                        {{$order->product->product_name()}}
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
                                                        <a href=""
                                                           wire:click.prevent="downloadUserFile({{$order->id}})">
                                                            <i style="color: #4347D9"
                                                               class="fas fa-file-download fa-2x"></i>
                                                            <p>
                                                                <span class="atbd-tag tag-success tag-transparented">{{__('lang.download')}}</span>
                                                            </p>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div style="font-size: 15px" class="userDatatable-content">
                                                        <a href=""
                                                           wire:click.prevent="downloadAdminFile({{$order->id}})">
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
                                                                wire:click.prevent="sendStore({{$order->id}})"
                                                                data-toggle="modal"
                                                                data-target="#sendStoreModal"
                                                                class="btn btn-success  btn-xs btn-rounded">
                                                            {{__('lang.send_store')}}
                                                        </button>

                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div style="margin-top: 10px">
                                    {{$allProductOrders->render()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ends: . send Store Modal -->
    <div wire:ignore.self class="modal-info-delete modal fade show" id="sendStoreModal" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-sm modal-info" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-info-body d-flex">
                        <div class="modal-info-icon warning">
                            <span data-feather="info"></span>
                        </div>
                        <div class="modal-info-text">
                            <p>{{__('lang.send_store_desc')}}</p>
                            <p>{{__('lang.execution_files_desc')}}</p>
                        </div>
                    </div>
                </div>
                <form wire:submit.prevent="submitSendStoreModal">
                    <div class="modal-body">
                        <div class="atbd-tag-wrap">
                            <div class="atbd-upload">
                                <div class="atbd-upload__button">
                                    <a href="javascript:void(0)" class="btn btn-lg btn-outline-lighten btn-upload"
                                       onclick="$('#upload-1').click()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-upload">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="17 8 12 3 7 8"></polyline>
                                            <line x1="12" y1="3" x2="12" y2="15"></line>
                                        </svg>
                                        Click to Upload</a>
                                    <input type="file" wire:model="admin_file" class="upload-one" id="upload-1">
                                    @error('admin_file')
                                    <small style="color: red">{{ $message }}.</small>
                                    @enderror
                                </div>
                                <div class="atbd-upload__file">
                                    <ul>
                                    </ul>
                                </div>
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
    <!-- ends: .send Store Modal-->

</div>
