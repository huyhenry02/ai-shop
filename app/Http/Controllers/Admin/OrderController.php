<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class OrderController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function indexConfirmation()
    {
        return view('admin.order.confirmation');
    }
    public function indexCart()
    {
        return view('admin.order.cart');
    }
    public function indexCheckout()
    {
        return view('admin.order.checkout');
    }
}
