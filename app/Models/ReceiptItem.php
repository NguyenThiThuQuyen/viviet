<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceiptItem extends Model
{
    use HasFactory;
    protected $fillable = ['receipt_id', 'importprice_id', 'unit_id', 'quatity'];

    public function receipt(){
        return $this->belongsTo(Receipt::class);
    }

    public function importprice(){
        return $this->belongsTo(ImportPrice::class);
    }

    public function unit(){
        return $this->belongsTo(Unit::class);
    }
}
