<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceiptItem extends Model
{
    use HasFactory;
    protected $fillable = ['receipt_id', 'material_id', 'unit_id', 'price', 'quatity'];

    public function receipt(){
        return $this->belongsTo(Receipt::class);
    }

    public function unit(){
        return $this->belongsTo(Unit::class);
    }

    public function material(){
        return $this->belongsTo(Material::class);
    }
}
