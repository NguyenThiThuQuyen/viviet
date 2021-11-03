<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ImportPrice extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['material_id','price', 'apply'];

    protected $casts = [
        'apply' => 'datetime',
    ];

    public function material(){
        return $this->belongsTo(Material::class);
    }

    public function receiptitems(){
        return $this->hasMany(ReceiptItem::class);
    }
}
