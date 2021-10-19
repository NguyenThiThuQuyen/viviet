<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Typeofdish;
use App\Models\Dish;
class HomepageController extends Controller
{
    public function index()
    {
        return view('guest.homepage.index');
    }

    public function menu(Typeofdish $typeofdish)
    {
        //lấy all loại
        $typeofdishes = Typeofdish::all();
        // $dishes = Dish::all();

        //lấy sản phẩm thêm vào
        $dishes = $typeofdish->dishes;        

        return view('guest.homepage.menu', compact('typeofdishes','dishes'));
    }

    
    public function booking()
    {
        return view('guest.homepage.booking');
    }
}
