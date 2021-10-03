<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tableprice extends Model
{
    use HasFactory;

    protected $fillable = ['table_id','price', 'apply'];

    protected $casts = [
        'apply' => 'datetime',
    ];

    public function orderitem(){
        return $this->belongsTo(Orderitem::class);
    }

    public function dishprice(){
        return $this->belongsTo(Dishprice::class);
    }
}
