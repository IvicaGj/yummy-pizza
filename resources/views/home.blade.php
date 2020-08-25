@extends('layouts.app')

@section('navbar')
    @include('components.navbar')
@endsection

@section('header')
    @include('components.headers.header')
@endsection

@section('content')
    @include('components.content.home_content')
@endsection

@section('footer')
    @include('components.footer')
@endsection

@section('scripts')
    @if (session('message'))
    <script type="text/javascript">
        $(document).ready(function() {
            $('#messageModal').modal('show');
        });
    </script>
    @endif
@endsection