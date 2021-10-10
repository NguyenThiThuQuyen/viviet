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

    public function menuBestseller(){
        return view('guest.homepage.menuBestseller');
    }

    public function menuMonmoi(){
        return view('guest.homepage.menuMonmoi');
    }

    public function menuMonchinh(){
        return view('guest.homepage.menuMonchinh');
    }

    public function menuKhaivi(){
        return view('guest.homepage.menuKhaivi');
    }

    public function menuTrangmieng(){
        return view('guest.homepage.menuTrangmeng');
    }

    public function menuDouong(){
        return view('guest.homepage.menuDouong');
    }

    public function menuRuou(){
        return view('guest.homepage.menuRuou');
    }
    
    public function booking()
    {
        return view('guest.homepage.booking');
    }
}
