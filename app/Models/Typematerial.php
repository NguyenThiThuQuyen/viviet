<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typematerial extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['name'];

    public function material()
    {
        return $this->hasMany(Material::class);
    }
}
