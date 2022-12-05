@extends('layouts.adminLayout')

@section('title')
    {{__('lang.edit_product')}}
@endsection

@section('content')
    <div style="margin-top: 15px" class="row">
        <div class="col-lg-12">
            <div class="card card-default card-md mb-4">
                <div class="card-header">
                    <h6 style="font-size: 20px;font-weight: bold;">{{__('lang.edit_product')}}</h6>
                </div>
                <div class="card-body py-md-25">
                    @include('inc.messages')
                    <form method="post" action="{{url("admin/edit-sub/product/$product->id")}}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">

                                <div style="text-align: center" class="col-md-3 mb-25">
                                    <label style="font-weight: bold">{{__('lang.name_ar')}}</label>
                                    <input name="name_ar" value="{{$product->product_name('ar')}}"
                                           class="form-control form-control-lg"
                                           type="text">
                                    @error('name_ar')
                                    <small style="color: red">{{ $message }}.</small>
                                    @enderror
                                </div>

                                <div style="text-align: center" class="col-md-3 mb-25">
                                    <label style="font-weight: bold">{{__('lang.name_en')}}</label>
                                    <input name="name_en" value="{{$product->product_name('en')}}"
                                           class="form-control form-control-lg"
                                           type="text">
                                    @error('name_en')
                                    <small style="color: red">{{ $message }}.</small>
                                    @enderror
                                </div>

                                <div style="text-align: center" class="col-md-3 mb-25">
                                    <label style="font-weight: bold">{{__('lang.desc_ar')}}</label>
                                    <textarea name="desc_ar"
                                              class="form-control"
                                              id="exampleFormControlTextarea1"
                                              rows="5">{{$product->product_desc('ar')}}</textarea>
                                    @error('desc_ar')
                                    <small style="color: red">{{ $message }}.</small>
                                    @enderror
                                </div>

                                <div style="text-align: center" class="col-md-3 mb-25">
                                    <label style="font-weight: bold">{{__('lang.desc_en')}}</label>
                                    <textarea name="desc_en"
                                              class="form-control"
                                              id="exampleFormControlTextarea1"
                                              rows="5">{{$product->product_desc('en')}}</textarea>
                                    @error('desc_en')
                                    <small style="color: red">{{ $message }}.</small>
                                    @enderror
                                </div>

                                <div style="text-align: center" class="col-md-6 mb-25">
                                    <label style="font-weight: bold">{{__('lang.all_branch')}}</label>
                                    <select name="branch" class="form-control ml-sm-10 ml-0">
                                        <option style="font-size: 15px;text-align: center"
                                                value="{{$product->company_branch->id}}">{{$product->company_branch->company_name()}}</option>
                                        @foreach($allBranch as $branch)
                                            <option style="font-size: 15px;text-align: center"
                                                    value="{{$branch->id}}">{{$branch->company_name()}}</option>
                                        @endforeach
                                    </select>
                                    @error('branch')
                                    <small style="color: red">{{ $message }}.</small>
                                    @enderror
                                </div>

                                <div style="text-align: center" class="col-md-6 mb-25">
                                    <label style="font-weight: bold">{{__('lang.main_products')}}</label>
                                    <select name="mainProduct" class="form-control ml-sm-10 ml-0">
                                        <option style="font-size: 15px;text-align: center"
                                                value="{{$product->product_branch->id}}">{{$product->product_branch->product_branch_name()}}</option>
                                        @foreach($allMainProduct as $oneMainProduct)
                                            <option style="font-size: 15px;text-align: center"
                                                    value="{{$oneMainProduct->id}}">{{$oneMainProduct->product_branch_name()}}</option>
                                        @endforeach
                                    </select>

                                    @error('mainProduct')
                                    <small style="color: red">{{ $message }}.</small>
                                    @enderror
                                </div>

                                @livewire('products.edit-quantity-price-product',['productId'=>$product->id])

                                <div class="col-md-6 mb-25">
                                    <label style="font-weight: bold">{{__('lang.image')}}</label>
                                    <div class="atbd-upload__button">
                                        <a href="javascript:void(0)" class="btn btn-lg btn-outline-lighten btn-upload"
                                           onclick="$('#upload-3').click()">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24"
                                                 fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round"
                                                 stroke-linejoin="round" class="feather feather-upload">
                                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                <polyline points="17 8 12 3 7 8"></polyline>
                                                <line x1="12" y1="3" x2="12" y2="15"></line>
                                            </svg>
                                            Upload</a>
                                        <input style="display: none" type="file" name="image"
                                               class="upload-one"
                                               id="upload-3">
                                    </div>
                                    @error('image')
                                    <small style="color: red">{{ $message }}.</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="{{url('admin/all-sub/products')}}"
                               class="btn btn-danger btn-outlined btn-sm">{{__('lang.cancel')}}</a>
                            <button type="submit"
                                    class="btn btn-success btn-outlined btn-sm">{{__('lang.save')}}</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ends: .card -->
        </div>
    </div>

@endsection