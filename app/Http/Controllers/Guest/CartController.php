<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Dish;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
Use Alert;

class CartController extends Controller
{
    

    public function show(){
        return view('guest.cart.show');
    }

    public function add(Request $request){

        // Cart::destroy();
        $dish = Dish::findOrFail($request->dish_id);
        Cart::add($dish->id, $dish, 1, $dish->currentprice->price);
        // return Cart::content();
        return view('guest.cart.show');
    }

    public function delete(Request $request){
        Cart::remove($request->row_id);     
        return redirect()->route('guest.cart.show');      
    }

    public function increase(Request $request){
        $current_qty = Cart::get($request->row_id)->qty;
        Cart::update($request->row_id, $current_qty+1);     
        return redirect()->route('guest.cart.show');      
    }

    public function decrease(Request $request){
        $current_qty = Cart::get($request->row_id)->qty;
        Cart::update($request->row_id, $current_qty-1);     
        return redirect()->route('guest.cart.show');      
    }
    

}
