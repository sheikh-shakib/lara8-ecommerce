<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartComponent extends Component
{
    public function increaseQty($rowId)
    {
        $product=Cart::get($rowId);
        $qty=$product->qty + 1;
        Cart::update($rowId,$qty);
        
    }
    public function decreaseQty($rowId)
    {
        $product=Cart::get($rowId);
        $qty=$product->qty - 1;
        Cart::update($rowId,$qty);        
    }
    public function destroy($rowId)
    {
       Cart::remove($rowId);
       session()->flash('success_msg','Cart has been deleted');
    }
    public function destroyAll()
    {
       Cart::destroy();
       session()->flash('success_msg','Cart has been cleared');
    }
    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.web');
    }
}
