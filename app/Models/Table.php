<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'area_id'];

    public function area(){
        return $this->belongsTo(Area::class);
    }

    public function tableprices(){
        return $this->hasMany(Tableprice::class);
    }
}
