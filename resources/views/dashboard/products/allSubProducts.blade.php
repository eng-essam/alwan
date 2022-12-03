@extends('layouts.adminLayout')

@section('title')
    {{__('lang.sub_products')}}
@endsection

@section('content')
    @livewire('products.sub-products')
@endsection