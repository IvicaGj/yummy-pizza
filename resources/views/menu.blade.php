@extends('layouts.app')

@section('navbar')
    @include('components.navbar')
@endsection

@section('header')
    @include('components.menu_header')
@endsection

@section('content')
    @include('components.menu_content')
@endsection

@section('footer')
    @include('components.footer')
@endsection