<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typeofdish extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $fillable = ['name'];

    public function dish()
    {
        return $this->hasMany(Dish::class);
    }
}
