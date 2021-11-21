<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Material extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = false;
    protected $fillable = ['name', 'typematerial_id'];
    protected $primary ='id';
    protected $table ='materials';

    public function typematerial()
    {
        return $this->belongsTo(Typematerial::class, 'typematerial_id');
    }

    public function importprices()
    {
        return $this->hasMany(ImportPrice::class);
    }


    public function currentprice()
    {
        return $this->hasOne(ImportPrice::class)->latestOfMany();
    }
    
}

