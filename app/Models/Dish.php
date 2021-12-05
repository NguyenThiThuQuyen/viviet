<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dish extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = false;

    protected $fillable = ['name','image','description' ,'typeofdish_id'];
    protected $primary ='id';
    protected $table ='dishes';

    public function typeofdish()
    {
        return $this->belongsTo(Typeofdish::class, 'typeofdish_id');
    }

    public function dishprices()
    {
        return $this->hasMany(Dishprice::class);
    }

    //khi gọi đến giá thì sẽ lấy ra giá cuối cùng
    public function currentprice()
    {
        return $this->hasOne(Dishprice::class)->latestOfMany();
    }


    
}

