@extends('layouts.app')

@section('navbar')
    @include('components.navbar')
@endsection

@section('header')
    @include('components.headers.header_2')
@endsection

@section('content')
    @include('components.content.cart_content')
@endsection

@section('footer')
    @include('components.footer')
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dollar-sum').tooltip({
                title: 'Click me for currency exchange!',
                placement: 'left'
            });

            $('#dollar-sum').click(function(e) {
                e.preventDefault();
                $(this).hide();
                $('#euro-sum').show();
            });

            $('#euro-sum').click(function(e) {
                e.preventDefault();
                $(this).hide();
                $('#dollar-sum').show();
            });
        });
    </script>
@endsection