<div class="container">
    <div class="row">
        @foreach ($products as $p)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ $p->image }}" alt="">
                    <div class="card-body">
                        <div class="d-flex flex-column bd-hightlight">
                            <div class="p-2 bd-hightlight">
                                <h4 class="card-title">{{ $p->name }}</h4>
                                <div class="d-flex flex-row bd-hightlight">
                                    <span class="p-2">Small: 
                                        <span class="badge badge-dark">$<span id="S-price">{{ number_format($p->price*0.8, 0, '.', ',') }}</span></span>
                                    </span>
                                    <span class="p-2">Med: 
                                        <span class="badge badge-dark">$<span id="M-price">{{ $p->price }}</span></span>
                                    </span>
                                    <span class="p-2">Large: 
                                        <span class="badge badge-dark">$<span id="L-price">{{ number_format($p->price*1.2, 0, '.', ',') }}</span></span>
                                    </span>
                                </div>
                            </div>
                            <div class="p-2 bd-hightlight" style="min-height: 200px">
                                <h6>Ingredients:</h6>
                                <p class="mb-5 card-text">{{ $p->description }}</p>
                            </div>
                            <div class="p-2 bd-hightlight">
                                <div class="input-group input-group-sm">
                                    <select class="col-lg-4 form-control custom-select" id="{{ $p->id }}-size">
                                        <option value="S">Small</option>
                                        <option value="M" selected>Medium</option>
                                        <option value="L">Large</option>
                                    </select>
                                    <input class="col-lg-2 form-control" type="number" name="quantity" id="{{$p->id}}-quantity" min="0" max="10" value="1">
                                </div>
                            </div>
                            <div class="mt-auto p-2 bd-hightlight">
                                <button type="button" class="btn btn-dark add-to-cart" data-id="{{ $p->id }}" data-url="{{ url('/add') }}">Add To Cart</button>
                                <span style="display:none" id="{{ $p->id }}-check" data-toggle="popover" data-placement="right">
                                    <i class="fas fa-check" style="color:green;"></i>
                                </span>
                                <span style="display:none" id="{{ $p->id }}-error" data-toggle="popover" data-placement="right">
                                    <i class="fas fa-times" style="color:red;"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <br/>
    </div>
    <div class="row">
        <div class="col-lg-1 offset-5">
            {{ $products->links() }}
        </div>
    </div>
</div>
<hr/>