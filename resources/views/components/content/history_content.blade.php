<div class="container">
    <div class="row">
        <div class="col-lg-12">
            @if (!empty($history))
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Items</th>
                            <th scope="col">Billing Address</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Ordered At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($history as $k => $h)
                            <tr>
                                <th scope="row">{{ $history->firstItem() + $k }}</th>
                                <td>
                                    <ul style="list-style-type: circle">
                                    @foreach ($h->products as $p)
                                        <li>
                                            {{ $p->pivot->quantity }} x <span class="font-weight-bold">{{ $p->pivot->size }}</span> {{ $p->name }}   
                                        </li>  
                                    @endforeach
                                    </ul>
                                </td>
                                <td>{{ $h->address }}, {{ $h->zip_code }} {{ $h->city }}</td>
                                <td>{{ $h->phone_number }}</td>
                                <td>${{ $h->billing_total }}</td>
                                <td>{{ \Carbon\Carbon::parse($h->created_at)->format('j F, Y H:m') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-lg-1 offset-10">
            {{ $history->links() }}
        </div>
    </div>
</div>
<hr/>