@extends('customer.layouts.main')
@section('content')
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Cart Page</h1>
                    <nav class="d-flex align-items-center">
                        <a href="{{route('customer.index')}}">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="#">Cart</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    @if($cartItems->Count() > 0)
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($cartItems as $cartItem)
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex" style="width: 100px; height: 100px">
                                            <img src="{{$cartItem->product->image ?? ''}}" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p>{{$cartItem->product->name ?? ''}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>${{$cartItem->product->price ?? ''}}</h5>
                                </td>
                                <td>
                                    <div class="product_count">
                                        <input type="text" name="quantity" id="sst" maxlength="12" value="{{$cartItem->quantity}}"
                                               title="Quantity:"
                                               class="input-text qty quantity-input ">
                                        <button
                                            onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                            class="increase items-count" type="button"><i
                                                class="lnr lnr-chevron-up"></i></button>
                                        <button
                                            onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                            class="reduced items-count" type="button"><i
                                                class="lnr lnr-chevron-down"></i></button>
                                    </div>
                                </td>
                                <td>
                                    <h5 id="display-total">${{$cartItem->product->price * $cartItem->quantity}}</h5>
                                </td>
                            </tr>
                        @endforeach

                        <tr class="bottom_button">
                            <td>
                                <a class="gray_btn" href="#">Update Cart</a>
                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="cupon_text d-flex align-items-center">
                                    <input type="text" placeholder="Coupon Code">
                                    <a class="primary-btn" href="#">Apply</a>
                                    <a class="gray_btn" href="#">Close Coupon</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <h5>Subtotal</h5>
                            </td>
                            <td>
                                <h5>${{$cartItem->product->price * $cartItem->quantity}}</h5>
                            </td>
                        </tr>
                        <tr class="out_button_area">
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <form action="{{ route('customer.order.create') }}" method="POST">
                                    @csrf
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <button type="submit" class="primary-btn">Proceed to checkout</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    @else
                        <tr>
                            <td>
                                <h5>No items in cart</h5>
                            </td>
                        </tr>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection()

