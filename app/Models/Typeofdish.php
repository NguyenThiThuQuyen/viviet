<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typeofdish extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $fillable = ['name'];

    public function dishes()
    {
        return $this->hasMany(Dish::class, 'typeofdish_id');
    }
}
