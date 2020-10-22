<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('welcome');
})->name('dashboard');

Route::get('admin', 'App\Http\Controllers\admin\ProductController@getlist');
Route::get('admin/search', [
    'as' => 'admin/search',
    'uses' => 'App\Http\Controllers\admin\ProductController@getSearch'
]);

//cart
Route::group(['prefix' => 'gio-hang'], function () {
    Route::get('them/{id?}', 'App\Http\Controllers\admin\cartcontroller@AddProduct');
    Route::get('gio-hang', 'App\Http\Controllers\admin\cartcontroller@ListCart');
    Route::get('xoa/{rowId?}', 'App\Http\Controllers\admin\cartcontroller@deletecart');
    Route::post('cap-nhap-soluong', 'App\Http\Controllers\admin\cartcontroller@updatequantity');
    Route::get('thanh-toan', 'App\Http\Controllers\admin\cartcontroller@checkout');
    Route::post('thanh-toan', 'App\Http\Controllers\admin\cartcontroller@Postcheckout');
    Route::post('thanhcong', 'App\Http\Controllers\admin\cartcontroller@Postcheckout');


});



Route::get('/',[
    'as'=>'trang-chu',
    'uses'=>'App\Http\Controllers\PageController@getIndex'
]);
Route::get('type/{type?}',[
'as'=>'type',
'uses'=>'App\Http\Controllers\PageController@getTypeproduct'
]);
Route::get('product',[
    'as'=>'product',
    'uses'=>'App\Http\Controllers\PageController@getProduct'
]);
Route::get('details/{product_id}',[
    'as'=>'details',
    'uses'=>'App\Http\Controllers\PageController@GetProductdetails'
]);

Route::get('search',[
    'as'=>'search',
    'uses'=>'App\Http\Controllers\PageController@getSearch'
]);



// admin
Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'product'], function () {
        Route::get('list', 'App\Http\Controllers\admin\ProductController@getList');
        Route::get('add', 'App\Http\Controllers\admin\ProductController@getAdd');
        Route::post('add2', 'App\Http\Controllers\admin\ProductController@insert');
        Route::get('edit/{id}', 'App\Http\Controllers\admin\ProductController@getEdit')->name('getEdit-product');
        Route::post('edit/{id}', 'App\Http\Controllers\admin\ProductController@postEdit')->name('postEdit-product');
        Route::get('delete/{id}', 'App\Http\Controllers\admin\ProductController@getDelete')->name('delete');
    });
    Route::group(['prefix' => 'type_product'], function () {
        Route::get('list', 'App\Http\Controllers\admin\Type_ProductController@getList');
        Route::get('add', 'App\Http\Controllers\admin\Type_ProductController@getAdd');
        Route::post('add2', 'App\Http\Controllers\admin\Type_ProductController@insert');
        Route::get('edit/{id_type}', 'App\Http\Controllers\admin\Type_ProductController@getEdit')->name('getEdit-type_product');
        Route::post('edit/{id_type}', 'App\Http\Controllers\admin\Type_ProductController@postEdit')->name('postEdit-type_product');
        Route::get('delete2/{id_type}', 'App\Http\Controllers\admin\Type_ProductController@delete2')->name('delete2');
    });
    Route::group(['prefix' => 'user'], function () {
        Route::get('list', 'App\Http\Controllers\admin\AdminController@getuserList');
        Route::get('add', 'App\Http\Controllers\admin\AdminController@getuserAdd');
        Route::get('edit', 'App\Http\Controllers\admin\AdminController@getuserEdit');
    });
    Route::group(['prefix' => 'orders'], function () {
        route::get('order', 'App\Http\Controllers\admin\ordercontroller@getorder');
        Route::get('xoa/{order_id?}', 'App\Http\Controllers\admin\ordercontroller@deleteorder');
        route::get('chitiet/{order_id?}', 'App\Http\Controllers\admin\ordercontroller@orderitems');
        Route::post('xac-nhan-tinh-trang', 'App\Http\Controllers\admin\cartcontroller@xacnhantinhtrang');
        Route::get('tinh-trang/cho-xu-ly', 'App\Http\Controllers\admin\ordercontroller@choxuly'); // 1
        Route::get('tinh-trang/dang-giao-hang', 'App\Http\Controllers\admin\ordercontroller@danggiaohang'); // 2
        Route::get('tinh-trang/da-giao', 'App\Http\Controllers\admin\ordercontroller@dagiao'); //3
        Route::get('tinh-trang/da-huy', 'App\Http\Controllers\admin\ordercontroller@dahuy'); //4
        Route::get('don-hang-cua-toi', 'App\Http\Controllers\admin\ordercontroller@donhangcuatoi');

    });
});