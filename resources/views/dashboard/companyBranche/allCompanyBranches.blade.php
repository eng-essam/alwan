@extends('layouts.adminLayout')

@section('title')
    {{__('lang.company_branches')}}
@endsection

@section('content')
    @livewire('company-branche.company-branches')
@endsection
