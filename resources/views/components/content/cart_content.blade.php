<?php  $sum = 0 ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-2">
            @if (!empty($cart))
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Size</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cart as $c)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $c['name'] }}</td>
                                <td>{{ $c['size'] }}</td>
                                <td>{{ $c['quantity'] }}</td>
                                <td>${{ $c['totalPrice'] }}</td>
                            </tr>
                            <?php $sum += $c['totalPrice'] ?>
                        @endforeach
                    </tbody>
                </table>
                <div class="float-right">
                    <h4>Totals:</h4>
                    <span data-toggle="popover" data-placement="right">
                        <a href="" id="dollar-sum"><span>$ {{ $sum }}</span></a>
                    </span>
                    <a href="" id="euro-sum" style="display:none"><span>&#128; {{ $sum*0.85 }}</span></a>
                    <br/>
                </div>
            @else
                <div class="alert alert-danger" role="alert">
                    <p class="text-center">Your cart is empty!<br/>Please add some pizzas to it and come back</p>
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 offset-2">
            @if (!empty($cart))
                <div class="d-flex justify-content-center">
                    <a class="p-2" href="{{ url('/menu') }}"><button type="button" class="btn btn-light float-right">Continue Shopping</button></a>
                    <a class="p-2" href="{{ url('/checkout') }}"><button type="button" class="btn btn-info float-right">Checkout</button></a>
                </div>
            @else 
                <div class="d-flex justify-content-center">
                    <a href="{{ url('/menu') }}"><button type="button" class="btn btn-light float-center">Back to menu</button></a> 
                </div>
            @endif
        </div>
    </div>
</div>
<hr/>