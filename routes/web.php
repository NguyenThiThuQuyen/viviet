<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Guest\HomepageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MaterialController;
use App\Http\Controllers\Admin\TypeMaterialController;
use App\Http\Controllers\Admin\TypeofdishController;
use App\Http\Controllers\Admin\DishController;
use App\Http\Controllers\Admin\AreaController;


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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/guest.homepage.index', function () {
//     return view('guest.homepage.index');
// })->middleware(['auth'])->name('guest.homepage.index');


require __DIR__.'/auth.php';



Route::get('/',[HomeController::class, 'index']);
Route::get('/menu/{typeofdish}',[HomeController::class, 'menu'])->name('guest.menu.typeofdish');
Route::get('/menu',[HomeController::class, 'menu']);
Route::get('/booking',[HomeController::class, 'booking']);

// Route::get('menuMonchinh',[HomeController::class, 'menuMonchinh']);
// Route::get('menuKhaivi',[HomeController::class, 'menuKhaivi']);
// Route::get('/menu/menuMonchinh',[HomepageController::class, 'menuMonchinh']);





//khachhang
Route::prefix('guest')->name('guest.')->group(function (){
        Route::view('/','guest.homepage.index');

        


        // Route::get('/menu/menuMonchinh',[HomepageController::class, 'menuMonchinh']);
        // Route::get('/menu/menuKhaivi',[HomepageController::class, 'menuKhaivi']);
        // Route::get('/menu',[HomepageController::class, 'menu']);
        // Route::get('/menu/{typeofdish}',[HomepageController::class, 'menu'])->name('menu.typeofdish');








});


// nhanvien
// Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function (){
//     Route::get('/', [DashboardController::class, 'index']);

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function (){
        Route::view('/','admin.dashboard.index');

        // Route::resource('dishes', DishController::class);
//danh sách thêm sửa xóa

        //nguyen lieu
        Route::resource('typematerials', TypeMaterialController::class);
        Route::resource('materials', MaterialController::class);

        //mon an
        Route::resource('typeofdishes', TypeofdishController::class);
        Route::resource('dishes', DishController::class);


        Route::resource('areas', AreaController::class);


});


?>