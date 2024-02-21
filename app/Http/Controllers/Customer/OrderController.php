<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class OrderController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function indexConfirmation()
    {
        return view('customer.order.confirmation');
    }
    public function indexCart()
    {
        return view('customer.order.cart');
    }
    public function indexCheckout()
    {
        return view('customer.order.checkout');
    }
}
