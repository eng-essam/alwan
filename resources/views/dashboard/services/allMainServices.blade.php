@extends('layouts.adminLayout')

@section('title')
    {{__('lang.main_services')}}
@endsection

@section('content')
    @livewire('services.main-services')
@endsection
