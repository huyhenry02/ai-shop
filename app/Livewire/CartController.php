<?php

namespace App\Livewire;

use App\Models\Cart;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;

class CartController extends Component
{
    public function increaseQuantity($id): RedirectResponse
    {
        $cart = Cart::find($id);
        $cart->quantity = $cart->quantity + 1;
        $cart->save();
        return redirect()->back()->with('success', 'Quantity was increased');
    }
    public function decreaseQuantity($id): RedirectResponse
    {
        $cart = Cart::find($id);
        $cart->quantity = $cart->quantity - 1;
        $cart->save();
        return redirect()->back()->with('success', 'Quantity was decreased');
    }
    public function render()
    {
        return view('livewire.cart-controller');
    }
}
