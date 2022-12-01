@extends('layouts.adminLayout')

@section('title')
    {{__('lang.users')}}
@endsection

@section('content')
    @livewire('user.all-users')
@endsection