<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'staff_id', 'created_at', 'updated_at'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function orderitems(){
        return $this->hasMany(Orderitem::class);
    }

    public function customer(){
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function staff(){
        return $this->belongsTo(User::class, 'staff_id');
    }

    //cú pháp tên hàm get<ten_thuoc_tinh>Attribute
    public function getSubTotalAttribute(){
        $subtotal = 0;
        //$this là bản thân đơn hàng sẽ ktra các orderitems và cộng lại
        foreach($this->orderitems as $item){
            $subtotal += ($item->dishprice->price * $item->quatity);
        }
        return $subtotal;
    }
}
