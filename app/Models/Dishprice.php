<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Dishprice extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['dish_id','price', 'apply'];

    protected $casts = [
        'apply' => 'datetime',
    ];

    public function dish(){
        return $this->belongsTo(Dish::class);
    }

    public function orderitems(){
        return $this->hasMany(Orderitem::class);
    }

}
