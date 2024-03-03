@extends('admin.layouts.main')
@section('content')
    <form action="{{route('admin.order.edit')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Order</strong> {{ $order->code ?? ''}}
            </div>
            <div class="card-body card-block">
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Shipping Address</label></div>
                    <div class="col-12 col-md-9">
                        <input type="hidden" name="order_id" value="{{$order->id}}">
                        <input type="text" id="text-input" name="shipping_address"
                               value="{{$order->shipping_address ?? ''}}" placeholder="Name"
                               class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Shipping Name</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="shipping_name"
                               value="{{$order->shipping_name ?? ''}}" placeholder="Name"
                               class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Shipping Phone</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="shipping_phone"
                               value="{{$order->shipping_phone ?? ''}}" placeholder="Name"
                               class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Shipping Email</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="shipping_email"
                               value="{{$order->shipping_email ?? ''}}" placeholder="Name"
                               class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Sub Total</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="sub_total"
                               value="{{$order->sub_total ?? ''}}" placeholder="Name" disabled
                               class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Notes</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="notes"
                               value="{{$order->notes ?? ''}}" placeholder="Name"
                               class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Status</label></div>
                    <div class="col-12 col-md-9">
                        <select name="status" id="select" class="form-control">
                            <option value="{{$order->status ?? ''}}">{{$order->status ?? ''}}</option>
                                <option value="approved">approved</option>
                                <option value="delivery">delivery</option>
                                <option value="completed">completed</option>
                                <option value="canceled">canceled</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-body" style="text-align: right">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-primary">Exit</button>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Order Details</strong>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach($cartItems as $cartItem)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{$cartItem->product->name ?? ''}}</td>
                            <td>{{$cartItem->quantity ?? ''}}</td>
                            <td>{{$cartItem->product->price ?? ''}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </form>
@endsection()
