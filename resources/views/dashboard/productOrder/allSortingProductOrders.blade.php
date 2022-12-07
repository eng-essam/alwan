@extends('layouts.adminLayout')

@section('title')
    {{__('lang.sorting_order')}}
@endsection

@section('content')
    @livewire('product-order.all-sorting-product-orders')
@endsection
