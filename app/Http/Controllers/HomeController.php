<?php

namespace App\Http\Controllers;
use App\Models\Typeofdish;
use App\Models\Dish;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $typeofdishes = Typeofdish::all();
        // return view('index');
        return view('index', compact('typeofdishes'));

    }

    public function menu(Typeofdish $typeofdish)
    {
        //lấy all loại
        // dd($typeofdish);
        $typeofdishes = Typeofdish::all();
        // $dishes = Dish::all();
        //lấy sản phẩm thêm vào
        $dishes = $typeofdish->dishes;        

        return view('menu', compact('typeofdishes','dishes'));
    }

    public function menu_typeall(Typeofdish $type)
    {

        $typeofdishes = Typeofdish::all();
        $dishes = Dish::all();      

        return view('menu', compact('typeofdishes','dishes'));
    }
    
    public function booking()
    {
        return view('booking');
    }
}

 ?>


