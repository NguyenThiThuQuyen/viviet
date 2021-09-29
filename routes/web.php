<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\HomepageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MaterialController;
use App\Http\Controllers\Admin\TypeMaterialController;
use App\Http\Controllers\Admin\TypeofdishController;
use App\Http\Controllers\Admin\DishController;



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

Route::get('/guest.homepage.menu', function () {
    return view('guest.homepage.menu');
})->middleware(['auth'])->name('guest.homepage.menu');

require __DIR__.'/auth.php';





//khachhang
Route::get('/',[HomepageController::class, 'index']);
Route::get('/homepage/menu',[HomepageController::class, 'menu']);


// nhanvien
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function (){
    Route::get('/', [DashboardController::class, 'index']);


//danh sách thêm sửa xóa

        //nguyen lieu
        Route::resource('typematerials', TypeMaterialController::class);
        Route::resource('materials', MaterialController::class);

        //mon an
        Route::resource('typeofdishes', TypeofdishController::class);
        Route::resource('dishes', DishController::class);

});

?>