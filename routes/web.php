<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home2', function () {
    return view('welcome');
});
Route::redirect('/anasayfa', '/home')->name('anasayfa');

Route::get('/', function () {
    return view('home.index',['name'=>'Onur Boynueğri']);
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);;//parametre gönderim şekli
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');//parametre gönderim şekli


//Admin
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');
    #Category
    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

    #House
    Route::prefix('house')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\HouseController::class, 'index'])->name('admin_house');
        Route::get('/create', [\App\Http\Controllers\Admin\HouseController::class, 'create'])->name('admin_house_add');
        Route::post('store', [\App\Http\Controllers\Admin\HouseController::class, 'store'])->name('admin_house_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\HouseController::class, 'edit'])->name('admin_house_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\HouseController::class, 'update'])->name('admin_house_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\HouseController::class, 'destroy'])->name('admin_house_delete');
        Route::get('show', [\App\Http\Controllers\Admin\HouseController::class, 'show'])->name('admin_house_show');
    });

    #Setting
    Route::get('setting', [\App\Http\Controllers\Admin\settingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [\App\Http\Controllers\Admin\settingController::class, 'update'])->name('admin_setting_update');

});



Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/loginCheck', [HomeController::class, 'loginCheck'])->name('admin_loginCheck');
Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
