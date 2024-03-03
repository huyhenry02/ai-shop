<?php

namespace App\Http\Controllers\Customer;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class CartController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function indexCart(): View|Factory|Application
    {

        $user = auth()->user();
        $cartItems = Cart::where('user_id', $user->id)->get();
        return view('customer.order.cart', ['cartItems' => $cartItems]);
    }
    public function addToCart($product_id, $quantity): RedirectResponse
    {
        try {
            Cart::create([
                'product_id' =>$product_id,
                'user_id' => auth()->id(),
                'quantity' => $quantity
            ]);
            return redirect()->back()->with('success', 'Product was added to cart');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Product was not added to cart');
        }
    }
    public function removeFromCart($id): RedirectResponse
    {
        Cart::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Product was removed from cart');
    }

}
