<?php

namespace App\Http\Controllers\Guest;
// namespace App\Models;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Order;


class PaymentController extends Controller
{
    public function show(){
        return view('guest.payment.show');
    }

    public function store(Request $request){
      $user = User::firstOrCreate(
        ['email' => $request->email],
        [
            'name' => $request->name,
            'password' => ''
        ]
      );
    // return $user;


      //khi email đã tồn tại rồi nhưng có một tên khác cập nhật lại tên
                //   $user->update([
                //     'name' => $request->name,
                //   ]);

        
        //xử lý đơn hàng
        // đầu tiên là tạo đơn hàng (order)
    $order = DB::transaction(function() use ($user){
        $order = Order::create([
            'staff_id' => null,
            'customer_id' => $user->id,
        ]);

         //với mỗi món hàng trong giỏ hàng thì tạo order items
         foreach(Cart::content() as $cart_item){
             $order->orderitems()->create([
                 'dishprice_id' => $cart_item->name->currentprice->id,
                 'table_id' => null,
                 'quatity' => $cart_item->qty
                ]);
                Cart::remove($cart_item->rowId);
            }
            return $order;
    });
        return redirect()->route('guest.orders.show', $order);
    }
}
