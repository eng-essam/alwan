@extends('layouts.adminLayout')

@section('title')
    {{__('lang.approved_services')}}
@endsection

@section('content')
    @livewire('service-order.all-approval-services')
@endsection
