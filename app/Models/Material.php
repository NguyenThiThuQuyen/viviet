<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name', 'typematerial_id'];

    public function typematerial()
    {
        return $this->belongsTo(Typematerial::class, 'typematerial_id');
    }

    public function importprices()
    {
        return $this->hasMany(ImportPrice::class, 'importprice_id');
    }
    
}

