<?php

namespace App\Http\Controllers;
use App\Models\Typeofdish;
use App\Models\Dish;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        $typeofdishes = Typeofdish::all();
        return view('index', compact('typeofdishes'));
    }

    public function menu(Typeofdish $typeofdish)
    {
        $typeofdishes = Typeofdish::all();
        $dishes = $typeofdish->dishes;        
        return view('menu', compact('typeofdishes','dishes'));
    }


    public function menu_typeall(Typeofdish $type)
    {
        $typeofdishes = Typeofdish::all();
        $dishes = Dish::all();      
        return view('menu', compact('typeofdishes','dishes'));
    }

    public function timkiem(Request $request){
        $dishes = Dish::where('name','like','%'.$request->tukhoa.'%')->get();
        return view('search', compact('dishes'));
    }


    public function booking()
    {
        return view('booking');
    }

    public function dangxuat(){
        Auth::logout();
        return redirect('/');
    }

    public function redirect(Request $request)
    {
        return redirect("/dashboard");
    }
}

 ?>


