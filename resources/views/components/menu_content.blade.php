<div class="container">
    <div class="row">
        @foreach ($products as $p)
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ $p->image }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{ $p->name }}</h4>
                        <p class="font-weight-bold">Ingredients:</p>
                        <p class="card-text">{{ $p->description }}</p>
                        <p><span class="font-weight-bold">Price:</span> ${{ $p->price }}</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-dark float-right" type="button" data-id="{{ $p->id }}">Add To Cart</button>
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

