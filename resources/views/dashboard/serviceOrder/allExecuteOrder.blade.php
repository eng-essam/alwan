@extends('layouts.adminLayout')

@section('title')
    {{__('lang.execute_services')}}
@endsection

@section('content')
    @livewire('service-order.all-execute-order')
@endsection
