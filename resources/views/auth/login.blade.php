@extends('layouts.app')

@section('navbar')
    @include('components.navbar')
@endsection

@section('header')
    @include('components.login_header')
@endsection

@section('content')
    @include('components.login_form')
@endsection

@section('footer')
    @include('components.footer')
@endsection