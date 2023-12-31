<div class="modal fade bd-example-modal-lg" id="modal-{{ $order->id }}" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Details of Order<span class="member"></span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-4">
                           {{ $order->name }}
                        </div>

                        <div class="col-md-8">
                            <div>
                                <label for="name"> Products</label>
                                @foreach ($order->order_products as $products)
                                    <input type="text" class="form-control text-primary" readonly
                                        value="{{ $products['product_name'] }}, Qty: {{ $products['quantity']}} , Price: {{$products['price']}}">
                                @endforeach

                            </div>
                            <div>
                                <label for="name"> Payment </label>
                                <input type="text" class="form-control" readonly value="{{ $order->order_details['payment'] }}">

                            </div>
                             <div>
                                <label for="name"> Remark </label>
                                <input type="text" class="form-control" readonly value="{{ $order->remark }}">

                            </div>
                            <div>
                                <label for="name"> Customer </label>
                                <input type="text" class="form-control" readonly value="{{ $order->user->name ?? '' }}">

                            </div>
                            <div>
                                <label for="name"> Customer Contact</label>
                                <input type="text" class="form-control" readonly
                                    value="{{ $order->user->contact_no ?? 'Not Available' }}">

                            </div>
                            <div>
                                <label for="name"> Customer Email</label>
                                <input type="text" class="form-control" readonly
                                    value="{{ $order->user->email ?? 'Not Available' }}">

                            </div>
                            <div>
                                <label for="name"> Address</label>
                                <input type="text" class="form-control" readonly
                                    value="{{ $order->user->address ?? 'Not Available' }}">

                            </div>
                            <div>
                                <label for="name"> Total Items </label>
                                <input type="text" class="form-control" readonly
                                    value=" {{ $order->total_quantity }}">

                            </div>
                            <div>
                                <label for="name"> Total </label>
                                <input type="text" class="form-control" readonly
                                    value="Rs.  {{ $order->total_amount }}">

                            </div>

                        </div>
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
