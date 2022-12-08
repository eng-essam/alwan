@extends('layouts.adminLayout')

@section('title')
    {{__('lang.discount_coupons')}}
@endsection

@section('content')
    @livewire('coupons.all-coupons')
@endsection
