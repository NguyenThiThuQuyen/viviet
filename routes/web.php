<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', [HomeController::class, 'index']);

// login
Route::get('/login', [HomeController::class, 'loginForm']);
Route::post('/login', [HomeController::class, 'login']);


// register
Route::get('/register', [HomeController::class, 'registerForm']);
Route::post('/register', [HomeController::class, 'register']);


//homepage
Route::get('/homepage', [HomeController::class, 'homepageForm']);
Route::post('/homepage', [HomeController::class, 'homepage']);


//menu
Route::get('/menu', [HomeController::class, 'menuForm']);
Route::post('/menu', [HomeController::class, 'menu']);


//list_emp
Route::get('/list_emp', [HomeController::class, 'list_empForm']);
Route::post('/list_emp', [HomeController::class, 'list_emp']);

//addusers
Route::get('/addusers', [HomeController::class, 'addusersForm']);
Route::post('/addusers', [HomeController::class, 'addusers']);


Route::get('/admin/emp', function(){
    return view('admin.emp.list');
});

Route::get('/admin/emp/create', function(){
    return view('admin.emp.create');
});

Route::get('/admin/emp/edit', function(){
    return view('admin.emp.edit');
});

Route::get('/admin/emp/addusers', function(){
    return view('admin.emp.addusers');
});

Route::get('/admin/emp/list_emp', function(){
    return view('admin.emp.list_emp');
});