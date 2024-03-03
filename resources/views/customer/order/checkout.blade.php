@extends('customer.layouts.main')
@section('content')
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Checkout</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product.html">Checkout</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            <div class="returning_customer">
            </div>
            <div class="cupon_area">
            </div>
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Billing Details</h3>
                        <form class="row contact_form" action="{{route('customer.order.update')}}" method="post" novalidate="novalidate">
                            @csrf
                            <input type="hidden" name="sub_total" value="{{$subtotal}}">
                            <input type="hidden" name="order_id" value="{{$orderId}}">
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" name="shipping_name" placeholder="Name">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" name="shipping_phone" placeholder="Phone number">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" name="shipping_email" placeholder="Email Address">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="" name="shipping_address" placeholder="Shipping Address">
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea class="form-control" name="notes" id="message" rows="1" placeholder="Order Notes"></textarea>
                            </div>
                            <div class="col-md-12 form-group d-flex">
                                <button type="submit" value="submit" class="primary-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            <ul class="list">
                                <li><a href="#">Product <span>Total</span></a></li>
                               @foreach($cartItems as $cartItem)
                                    <li><a href="#">{{$cartItem->product->name ?? ''}}  <span class="last">${{$cartItem->product->price ?? ''}}</span></a></li>
                               @endforeach
                            </ul>
                            <ul class="list list_2">
                                <li><a href="#">Subtotal <span>${{$subtotal}}</span></a></li>
                                <li><a href="#">Shipping <span>Freeship</span></a></li>
                                <li><a href="#">Total <span>${{$subtotal}}</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->
@endsection()

