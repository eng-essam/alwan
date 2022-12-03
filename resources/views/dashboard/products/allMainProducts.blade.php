@extends('layouts.adminLayout')

@section('title')
    {{__('lang.main_products')}}
@endsection

@section('content')
    @livewire('products.main-products')
@endsection
