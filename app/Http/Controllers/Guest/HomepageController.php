<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
// use App\Http\Controllers\Guest\Typeofdish;
use App\Models\Typeofdish;
use App\Models\Dish;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        return view('guest.homepage.index');
    }

    public function menu(Typeofdish $type)
    {
        //lấy all loại
        $typeofdishes = Typeofdish::all();
        //lấy sản phẩm thêm vào
        $dishes = $type->dish;
        return view('guest.homepage.menu', compact('typeofdishes','dishes'));
    }
    
    public function booking()
    {
        return view('guest.homepage.booking');
    }
}
