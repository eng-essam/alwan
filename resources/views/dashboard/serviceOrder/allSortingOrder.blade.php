@extends('layouts.adminLayout')

@section('title')
    {{__('lang.sorting_order')}}
@endsection

@section('content')
    @livewire('service-order.all-sorting-order')
@endsection

