<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'typematerial_id'];

    public function typematerial()
    {
        return $this->belongsTo(Typematerial::class, 'typematerial_id');
    }

    public function receiptItems()
    {
        return $this->hasMany(ReceiptItem::class);
    }

    use HasFactory;
}

