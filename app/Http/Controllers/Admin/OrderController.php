<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Auth;


class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }

    public function confirm(Order $order){
        $order->update([
            'staff_id' => Auth::id()
        ]);
        return redirect()->route('admin.orders.index');
    }
}
