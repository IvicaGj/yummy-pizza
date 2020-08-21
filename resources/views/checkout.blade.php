@extends('layouts.app')

@section('navbar')
    @include('components.navbar')
@endsection

@section('header')
    @include('components.checkout_header')
@endsection

@section('content')
    @include('components.checkout_content')
@endsection

@section('footer')
    @include('components.footer')
@endsection