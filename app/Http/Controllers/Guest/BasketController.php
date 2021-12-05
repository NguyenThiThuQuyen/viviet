<?php

namespace App\Http\Controllers\Guest;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Dish;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
Use Alert;

class BasketController extends Controller
{
    public function show(){
        return ('guest.cart.show');
    }

    public function add(Request $request){

        // Cart::destroy();
        $dish = Dish::findOrFail($request->dish_id);
        Cart::add($dish->id, $dish, 1, $dish->currentprice->price);
        // return Cart::content();
        return redirect()->route('guest.cart.show');
    }
}
