<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        return view('guest.homepage.index');
    }

    public function menu()
    {
        return view('guest.homepage.menu');
    }

    public function booking()
    {
        return view('guest.homepage.booking');
    }
}
