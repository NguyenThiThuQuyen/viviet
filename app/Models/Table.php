<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['number', 'seat'];

    public function orderitems(){
        return $this->hasMany(Orderitem::class);
    }
}