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

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.add-to-cart').click(function() {
                var id = $(this).attr('data-id');
                $.ajax({
                    type: "POST",
                    url: $(this).attr('data-url'),
                    data: {
                        "id": id,
                        "qty": $('#' + id + '-quantity').val(),
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function() {
                        $('#' + id + '-check').show();
                    },
                    dataType: 'JSON'
                });
            });
        });
    </script>
@endsection