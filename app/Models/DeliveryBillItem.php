<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryBillItem extends Model
{
    use HasFactory;
    protected $fillable = ['deliveryitem_id', 'unit_id', 'quatity'];

    public function deliveryitem(){
        return $this->belongsTo(DeliveryItem::class, 'deliveryitem_id');
    }

    public function unit(){
        return $this->belongsTo(Unit::class);
    }

}
