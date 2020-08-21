<?php  $sum = 0 ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-6 offset-2">
            @if (!empty($cart))
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cart as $c)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $c['name'] }}</td>
                                <td>{{ $c['quantity'] }}</td>
                                <td>${{ $c['totalPrice'] }}</td>
                            </tr>
                            <?php $sum += $c['totalPrice'] ?>
                        @endforeach
                    </tbody>
                </table>
                <div class="float-right">
                    <h4>Totals:</h4>
                    <p>$ {{ $sum }}</p>
                </div>
            @else
                <p class="text-center">Oh noes! It seems that your cart is empty!</p>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 offset-4">
            <a href="{{ url('/menu') }}"><button type="button" class="btn btn-light">Continue Shopping</button></a>
            <a @if (!empty($cart)) "" @else style="display: none" @endif href="{{ url('/checkout') }}"><button type="button" class="btn btn-info">Checkout</button></a>
        </div>
    </div>
</div>