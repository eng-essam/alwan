@extends('layouts.adminLayout')

@section('title')
    {{__('lang.execute_products')}}
@endsection

@section('content')
    @livewire('product-order.all-execute-product-orders')
@endsection
