@extends('layouts.adminLayout')

@section('title')
    {{__('lang.profile')}}
@endsection

@section('content')
    @livewire('profile.profile')
@endsection
