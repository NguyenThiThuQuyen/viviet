<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderitem extends Model
{
    use HasFactory;
    protected $fillable = ['dishprice_id', 'tableprice_id', 'order_id', 'quatity_dish', 'quatity_table'];

    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function dishprice(){
        return $this->belongsTo( Dishprice::class);
    }

    public function tableprice(){
        return $this->belongsTo( Tableprice::class);
    }
}
