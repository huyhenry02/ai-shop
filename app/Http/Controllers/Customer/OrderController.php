<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
class OrderController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function indexConfirmation(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('customer.order.confirmation');
    }
    public function indexCart(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('customer.order.cart');
    }
    public function indexCheckout(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('customer.order.checkout');
    }
}
