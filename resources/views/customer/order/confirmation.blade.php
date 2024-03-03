@extends('customer.layouts.main')
@section('content')
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Confirmation</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Confirmation</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <!--================Order Details Area =================-->
    <section class="order_details section_gap">
        <div class="container">
            @switch($order->status)
                @case('approved')
                    <h3 class="title_confirmation">Thank you. Your order has been approved.</h3>
                    @break

                @case('delivery')
                    <h3 class="title_confirmation">Good news! Your order is being delivery.</h3>
                    @break

                @case('completed')
                    <h3 class="title_confirmation">Good news! Your order has been completed.</h3>
                    @break

                @case('canceled')
                    <h3 class="title_confirmation">Your order has been canceled.</h3>
                    @break

                @default
                    <h3 class="title_confirmation">We are currently updating your order status.</h3>
            @endswitch
            <div class="row order_d_inner">
                <div class="col-lg-6">
                    <div class="details_item">
                        <h4>Order Info</h4>
                        <ul class="list">
                            <li><a href="#"><span>Order number</span> : {{$order->code ?? ''}}</a></li>
                            <li><a href="#"><span>Date</span> : {{$order->created_at ?? ''}}</a></li>
                            <li><a href="#"><span>Total</span> : {{$order->sub_total ?? ''}} </a></li>
                            <li><a href="#"><span>Phone</span> : {{$order->shipping_phone ?? ''}} </a></li>
                            <li><a href="#"><span>Email</span> : {{$order->shipping_email ?? ''}}</a></li>
                            <li><a href="#"><span>Name</span> : {{$order->shipping_name ?? ''}}</a></li>
                            <li><a href="#"><span>Address</span> : {{$order->shipping_address ?? ''}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="order_details_table">
                <h2>Order Details</h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cartItems as $cartItem)
                            <tr>
                                <td>
                                    <p>{{$cartItem->product->name ?? ''}}</p>
                                </td>
                                <td>
                                    <h5>{{$cartItem->quantity}}</h5>
                                </td>
                                <td>
                                    <p>${{$cartItem->product->price ?? ''}}</p>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td>
                                <h4>Subtotal</h4>
                            </td>
                            <td>
                                <h5></h5>
                            </td>
                            <td>
                                <p>${{$order->sub_total ?? ''}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Shipping</h4>
                            </td>
                            <td>
                                <h5></h5>
                            </td>
                            <td>
                                <p>Free Ship</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Total</h4>
                            </td>
                            <td>
                                <h5></h5>
                            </td>
                            <td>
                                <p>${{$order->sub_total ?? ''}}</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Order Details Area =================-->
@endsection()

