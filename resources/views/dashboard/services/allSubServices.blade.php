@extends('layouts.adminLayout')

@section('title')
    {{__('lang.sub_services')}}
@endsection

@section('content')
    @livewire('services.sub-services')
@endsection