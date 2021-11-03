<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;


class OrderController extends Controller
{
    public function show(Order $order){
        return view('guest.orders.show', compact('order'));
    }
}
