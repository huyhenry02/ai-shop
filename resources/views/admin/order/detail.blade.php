@extends('admin.layouts.main')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Order</strong> {{ $order->code ?? ''}}
            </div>
            <div class="card-body card-block">
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Shipping Address</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">{{ $order->shipping_address ?? ''}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Shipping Name</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">{{ $order->shipping_name ?? ''}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Shipping Phone</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">{{ $order->shipping_phone ?? ''}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Shipping Email</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">{{ $order->shipping_email ?? ''}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Sub Total</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">{{ $order->sub_total ?? ''}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Sub Total</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">{{ $order->status ?? ''}}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Notes</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">{{ $order->notes ?? ''}}</p>
                    </div>
                </div>
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
@endsection()
