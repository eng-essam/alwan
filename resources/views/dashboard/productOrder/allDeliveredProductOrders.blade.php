@extends('layouts.adminLayout')

@section('title')
    {{__('lang.products_delivered')}}
@endsection

@section('content')
    @livewire('product-order.all-delivered-product-orders')
@endsection
