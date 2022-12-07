@extends('layouts.adminLayout')

@section('title')
    {{__('lang.services_delivered')}}
@endsection

@section('content')
    @livewire('service-order.all-delivered-order')
@endsection
