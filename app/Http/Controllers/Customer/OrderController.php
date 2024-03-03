<?php

namespace App\Http\Controllers\Customer;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class OrderController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function indexConfirmation(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $userId = Auth::id();
        $order = Order::find($userId);
        $orderId = $order->id;
        $cartItems = Cart::where('order_id', $orderId)->get();
        return view('customer.order.confirmation', ['cartItems' => $cartItems, 'order' => $order, 'orderId' => $orderId]);
    }
    public function indexCheckout($orderId): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $cartItems = Cart::where('order_id', $orderId)->get();
        $subtotal = 0;

        foreach ($cartItems as $cartItem) {
            $subtotal += $cartItem->product->price * $cartItem->quantity;
        }
        return view('customer.order.checkout', ['cartItems' => $cartItems,'subtotal' => $subtotal,'orderId' => $orderId]);
    }

    public function createOrder(Request $request): RedirectResponse
    {
        $order = new Order;
        $order->user_id = Auth::id();
        $order->save();
        $order->code = 'K' . $order->id;
        $cartItems = Cart::where('user_id', Auth::id())->get();
        foreach ($cartItems as $cartItem) {
            $cartItem->order_id = $order->id;
            $cartItem->save();
        }
        return redirect()->route('customer.order.checkout', ['order_id' => $order->id]);
    }
    public function updateOrder(Request $request): RedirectResponse
    {
        $orderId = $request->order_id;
        $order = Order::find($orderId);
        $order->fill($request->all());
        $order->status = 'approved';
        $order->save();
        return redirect()->route('customer.order.confirmation');
    }
}
