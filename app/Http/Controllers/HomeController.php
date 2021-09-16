<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index(){
    //     return "<h1>Homepage</h1>";
    // }


//login
    public function loginForm(){
        return view("login");

    }

    public function login(Request $request){
        $validatedData = $request->validate([
        'username' => 'required|min:3',
        'password' => 'required|min:8|max:25'
        ],[
            'username.required'=>'Phải nhập username!',
            'password.required'=>'Phải nhập password!',
            'password.min'=>'Password phải ít nhất 8 ký tự!',
            'password.max'=>'Password tối đa 25 ký tự!'
      ]);
    }

//register
    public function registerForm(){
        return view("register");
    }


    public function register(Request $request){
        $validatedData = $request->validate([
            
                'username' => 'required|min:3',
                'sdt' => 'regex:/^0[0-9]{9}$/',
                'password' => 'required|min:8|max:25',
                'date' => 'regex:/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$'
        
                ],[
                    'sdt.regex'=>'Nhập số điện thoại không đúng định dạng!',
                    'username.min'=>'User Name phải ít nhất 3 ký tự!',
                    'password.min'=>'Password phải ít nhất 8 ký tự!',
                    'password.max'=>'Password tối đa 25 ký tự!',
                    'date.regex' => "Ngày sinh phải nhỏ hơn ngày hiện tại!"
            ]);
    }



//homepage
    public function homepageForm(){
        return view("homepage");
    }

//menu
public function menuForm(){
    return view("menu");
}

//list_emp
public function list_empForm(){
    return view("list_emp");
}

//addusers
public function addusersForm(){
    return view("addusers");
}

}
