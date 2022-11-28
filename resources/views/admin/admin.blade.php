@extends('layouts.adminLayout')

@section('title')
    {{__('lang.admins')}}
@endsection

@section('content')
    @livewire('admin.all-admins')
@endsection