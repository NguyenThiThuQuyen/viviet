<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderitem extends Model
{
    use HasFactory;
    protected $fillable = ['dishprice_id', 'table_id', 'order_id', 'quatity'];

    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function dishprice(){
        return $this->belongsTo( Dishprice::class);
    }

    public function table(){
        return $this->belongsTo(Table::class);
    }
}
