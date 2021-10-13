<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MaterialController;
use App\Http\Controllers\Admin\TypeMaterialController;
use App\Http\Controllers\Admin\TypeofdishController;
use App\Http\Controllers\Admin\DishController;
use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Guest\CartController;



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

Route::get('/', function () {
        return view('/');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/guest.homepage.index', function () {
    return view('guest.homepage.index');
})->middleware(['auth'])->name('guest.homepage.index');


require __DIR__.'/auth.php';

Route::get('/',[HomeController::class, 'index']);
Route::get('/menu/{typeofdish}',[HomeController::class, 'menu'])->name('guest.menu.typeofdish');
Route::get('/menu',[HomeController::class, 'menu_typeall']);
Route::get('/booking',[HomeController::class, 'booking']);
Route::get('/card',[CartController::class, 'add'])->name('guest.cart.show');
Route::get('/add-to-card',[CartController::class, 'add'])->name('guest.add-to-cart');



//khachhang
Route::middleware(['auth'])->prefix('guest')->name('guest.')->group(function(){ 

        Route::get('/',[HomeController::class, 'index']);       
        // Route::get('/menu/{typeofdish}',[HomepageController::class, 'menu'])->name('menu.typeofdish');
});


// nhanvien
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function (){
        // Route::view('/','admin.dashboard.index');
        Route::get('/',[DashboardController::class, 'index']);


//danh sách thêm sửa xóa

        //nguyen lieu
        Route::resource('typematerials', TypeMaterialController::class);
        Route::resource('materials', MaterialController::class);

        //mon an
        Route::resource('typeofdishes', TypeofdishController::class);
        Route::resource('dishes', DishController::class);




        //khu vuc
        Route::resource('areas', AreaController::class);

        //ban
        Route::resource('tables', TableController::class);



});


?>