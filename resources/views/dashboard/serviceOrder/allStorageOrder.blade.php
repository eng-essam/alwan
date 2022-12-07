@extends('layouts.adminLayout')

@section('title')
    {{__('lang.storage_services')}}
@endsection

@section('content')
    @livewire('service-order.all-storage-order')
@endsection
