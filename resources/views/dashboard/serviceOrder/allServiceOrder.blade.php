@extends('layouts.adminLayout')

@section('title')
    {{__('lang.service_order')}}
@endsection

@section('content')
    @livewire('service-order.all-service-order')
@endsection
