<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;
    protected $fillable = ['supplier_id', 'staff_id', 'created_at', 'updated_at'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function supplier(){
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }

    public function receiptitems(){
        return $this->hasMany(ReceiptItem::class);
    }

    public function staff(){
        return $this->belongsTo(User::class, 'staff_id');
    }
}
