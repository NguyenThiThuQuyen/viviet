<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MaterialController;
use App\Http\Controllers\Admin\TypeMaterialController;
use App\Http\Controllers\Admin\TypeofdishController;
use App\Http\Controllers\Admin\DishController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Guest\CartController;
use App\Http\Controllers\Guest\PaymentController;
use App\Http\Controllers\Guest\OrderController;
use App\Http\Controllers\Guest\User;

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
Route::get('/cart', [CartController::class, 'show'])->name('guest.cart.show');
Route::get('/add-to-cart', [CartController::class, 'add'])->name('guest.add-to-cart');
Route::get('/delete-from-cart', [CartController::class, 'delete'])->name('guest.delete-from-cart');
Route::get('/cart-increase', [CartController::class, 'increase'])->name('guest.cart.increase');
Route::get('/cart-decrease', [CartController::class, 'decrease'])->name('guest.cart.decrease');
Route::get('/payment', [PaymentController::class, 'show'])->name('guest.payment.show');
Route::post('/payment', [PaymentController::class, 'store'])->name('guest.payment.store');
Route::get('/orders/{order}', [OrderController::class, 'show'])->name('guest.orders.show');

//khachhang
Route::middleware(['auth'])->prefix('guest')->name('guest.')->group(function(){ 

        Route::get('/',[HomeController::class, 'index']);       
        // Route::get('/menu/{typeofdish}',[HomepageController::class, 'menu'])->name('menu.typeofdish');
});

//nhanvien
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function (){
        // Route::view('/','admin.dashboard.index');
        Route::get('/',[DashboardController::class, 'index']);

        //xác nhận đơn hàng
        Route::get('orders', [AdminOrderController::class, 'index'])->name('orders.index');
        Route::get('orders/{order}/confirm', [AdminOrderController::class, 'confirm'])->name('orders.confirm');

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
        //nha cung cap
        Route::resource('suppliers', SupplierController::class);
});
?>