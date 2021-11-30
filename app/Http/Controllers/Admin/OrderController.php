<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Orderitem;
use Auth;


class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }

    public function show(Order $order){
        return view('admin.orders.show', compact('order'));
    }
    // public function show($id)
    // {
    //     $cours = Course::findOrFailnd($id);
    //     $lessons = course::findOrFail($id)->lesson;
    //     return view('pages.lessons', compact('lessons', 'cours'));
    
    // }

    public function confirm(Order $order){
        $order->update([
            'staff_id' => Auth::id()
        ]);
        return redirect()->route('admin.orders.index');
    }
}
