@extends('layouts.app')

@section('navbar')
    @include('components.navbar')
@endsection

@section('header')
    @include('components.cart_header')
@endsection

@section('content')
    @include('components.cart_content')
@endsection

@section('footer')
    @include('components.footer')
@endsection

