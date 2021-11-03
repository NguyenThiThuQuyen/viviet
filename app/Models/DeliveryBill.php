<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryBill extends Model
{
    use HasFactory;
    protected $fillable = ['staff_id', 'created_at', 'updated_at'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function deliveryitems(){
        return $this->hasMany(DeliveryItem::class);
    }


    public function staff(){
        return $this->belongsTo(User::class, 'staff_id');
    }
}
