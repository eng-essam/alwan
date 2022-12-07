@extends('layouts.adminLayout')

@section('title')
    {{__('lang.storage_products')}}
@endsection

@section('content')
    @livewire('product-order.all-storage-product-orders')
@endsection
