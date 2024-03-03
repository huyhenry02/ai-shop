<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
class OrderController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function indexOrder(): View|Factory|Application
    {
        $orders = Order::all();
        return view('admin.order.list', ['orders' => $orders]);
    }
    public function indexDetail($orderId): View|Factory|Application
    {
        $order = Order::find($orderId);
        $cartItems = Cart::where('order_id', $orderId)->get();
        return view('admin.order.detail', ['order' => $order, 'cartItems' => $cartItems]);
    }
    public function indexEdit($orderId): View|Factory|Application
    {
        $order = Order::find($orderId);
        $cartItems = Cart::where('order_id', $orderId)->get();
        return view('admin.order.edit', ['order' => $order, 'cartItems' => $cartItems]);
    }
    public function updateOrder(Request $request): RedirectResponse
    {
        $orderId = $request->order_id;
        $order = Order::find($orderId);
        $order->fill($request->all());
        $order->save();
        $cartItems = Cart::where('order_id', $orderId)->get();
        return redirect()->route('admin.order.detail', ['order_id' => $order->id, 'cartItems' => $cartItems]);
    }

}
