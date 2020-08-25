@extends('layouts.app')

@section('navbar')
    @include('components.navbar')
@endsection

@section('header')
    @include('components.headers.header_2')
@endsection

@section('content')
    @include('components.content.about_content')
@endsection

@section('footer')
    @include('components.footer')
@endsection