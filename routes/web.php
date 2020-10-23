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
Route::group(['prefix' => 'cart'], function () {
    Route::get('add/{id?}', 'App\Http\Controllers\admin\cartcontroller@AddProduct');
    Route::get('list-cart', 'App\Http\Controllers\admin\cartcontroller@ListCart');
    Route::get('delete/{rowId?}', 'App\Http\Controllers\admin\cartcontroller@deletecart');
    Route::post('update-quantity', 'App\Http\Controllers\admin\cartcontroller@updatequantity');
    Route::get('checkout', 'App\Http\Controllers\admin\cartcontroller@checkout');
    Route::post('checkout', 'App\Http\Controllers\admin\cartcontroller@Postcheckout');
    Route::post('success', 'App\Http\Controllers\admin\cartcontroller@Postcheckout');


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
        Route::get('delete/{order_id?}', 'App\Http\Controllers\admin\ordercontroller@deleteorder');
        route::get('detail/{order_id?}', 'App\Http\Controllers\admin\ordercontroller@orderitems');
        Route::post('confirm-status', 'App\Http\Controllers\admin\cartcontroller@confirmstatus');
        Route::get('my-order', 'App\Http\Controllers\admin\ordercontroller@myorder');

    });
});
