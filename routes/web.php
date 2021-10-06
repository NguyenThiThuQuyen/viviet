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


require __DIR__.'/auth.php';


/*
- nhân sự
        + vtlv
        + 
- khách hàng
        + thông tin
        + khtt
- kho hàng
        + nguyên liệu
        + loại nguyên liệu
        + nhập/xuất hàng
        + hàng tồn kho
        + nhà cung cấp
- thực đơn
        + món ăn
        + loại món ăn
        + khuyến mãi
        + 
- đặt bàn
        + phiếu đạt
        + bàn
        + khu vực
        + ghép bàn
- thanh toán

*/

Route::get('/guest',[HomepageController::class, 'index']);

Route::get('/index',[HomepageController::class, 'index']);


//khachhang
Route::prefix('guest')->name('guest.')->group(function (){
        Route::view('/','guest.homepage.index');

        Route::get('/menu',[HomepageController::class, 'menu']);
        // Route::get('/booking',[HomepageController::class, 'booking']);
        // Route::resource('menu', HomepageController::class);


});


// nhanvien
// Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function (){
//     Route::get('/', [DashboardController::class, 'index']);

Route::prefix('admin')->name('admin.')->group(function (){
        Route::view('/','admin.dashboard.index');

        // Route::resource('dishes', DishController::class);
//danh sách thêm sửa xóa

        //nguyen lieu
        Route::resource('typematerials', TypeMaterialController::class);
        Route::resource('materials', MaterialController::class);

        //mon an
        Route::resource('typeofdishes', TypeofdishController::class);
        Route::resource('dishes', DishController::class);

});


?>