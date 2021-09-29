<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name','image','description' ,'typeofdish_id'];

    public function typeofdish()
    {
        return $this->belongsTo(Typeofdish::class, 'typeofdish_id');
    }
}
