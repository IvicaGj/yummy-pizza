@extends('layouts.app')

@section('navbar')
    @include('components.navbar')
@endsection

@section('header')
    @include('components.headers.menu_header')
@endsection

@section('content')
    @include('components.content.menu_content')
@endsection

@section('footer')
    @include('components.footer')
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.add-to-cart').click(function() {
                var id = $(this).attr('data-id');
                var size = $('#' + id + '-size').val();
                var qty = $('#' + id + '-quantity').val();
                var price = $('#' + size + '-price').text();
                console.log(price);

                $.ajax({
                    type: "POST",
                    url: $(this).attr('data-url'),
                    data: {
                        "id": id,
                        "qty": qty,
                        "size": size,
                        "price": price,
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#' + id + '-error').hide();
                            $('#' + id + '-check').show();
                            $('#' + id + '-check').popover({
                                content: response.message
                            });
                            $('#' + id + '-check').popover('show');
                            setTimeout(function() {
                                $('#' + id + '-check').popover('hide');
                                $('#' + id + '-check').hide();
                            }, 1500)
                        } else {
                            $('#' + id + '-check').hide();
                            $('#' + id + '-error').show();
                            $('#' + id + '-error').popover({
                                content: response.message
                            });
                            $('#' + id + '-error').popover('show');
                            setTimeout(function() {
                                $('#' + id + '-error').popover('hide');
                                $('#' + id + '-error').hide();
                            }, 1500)
                        }
                        
                    },
                    dataType: 'JSON'
                });
            });
        });
    </script>
@endsection