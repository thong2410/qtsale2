<?php

use App\Http\Controllers\admin\ordercontroller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('admin', 'admin\ProductController@getlist');
Route::get('admin/search', [
    'as' => 'admin/search',
    'uses' => 'admin\ProductController@getSearch'
]);
// login
Route::get('cart', 'LoginController@GetCart');
Route::get('checkout', 'LoginController@GetCheckout');
Route::get('sigupn', 'LoginController@GetSigup');
Route::get('loginn', 'LoginController@GetLogin');


//cart
Route::group(['prefix' => 'cart'], function () {
    Route::get('add/{id?}', 'admin\cartcontroller@AddProduct');
    Route::get('list-cart', 'admin\cartcontroller@ListCart');
    Route::get('delete/{rowId?}', 'admin\cartcontroller@deletecart');
    Route::post('update-quantity', 'admin\cartcontroller@updatequantity');
    Route::get('checkout', 'admin\cartcontroller@checkout');
    Route::post('checkout', 'admin\cartcontroller@Postcheckout');
    Route::post('success', 'admin\cartcontroller@Postcheckout');


});



Route::get('/',[
    'as'=>'trang-chu',
    'uses'=>'PageController@getIndex'
]);
Route::get('type/{type?}',[
'as'=>'type',
'uses'=>'PageController@getTypeproduct'
]);
Route::get('product',[
    'as'=>'product',
    'uses'=>'PageController@getProduct'
]);
Route::get('details/{product_id}',[
    'as'=>'details',
    'uses'=>'PageController@GetProductdetails'
]);

Route::get('search',[
    'as'=>'search',
    'uses'=>'PageController@getSearch'
]);



// admin
Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'product'], function () {
        Route::get('list', 'admin\ProductController@getList');
        Route::get('add', 'admin\ProductController@getAdd');
        Route::post('add2', 'admin\ProductController@insert');
        Route::get('edit/{id}', 'admin\ProductController@getEdit')->name('getEdit-product');
        Route::post('edit/{id}', 'admin\ProductController@postEdit')->name('postEdit-product');
        Route::get('delete/{id}', 'admin\ProductController@getDelete')->name('delete');
    });
    Route::group(['prefix' => 'type_product'], function () {
        Route::get('list', 'admin\Type_ProductController@getList');
        Route::get('add', 'admin\Type_ProductController@getAdd');
        Route::post('add2', 'admin\Type_ProductController@insert');
        Route::get('edit/{id_type}', 'admin\Type_ProductController@getEdit')->name('getEdit-type_product');
        Route::post('edit/{id_type}', 'admin\Type_ProductController@postEdit')->name('postEdit-type_product');
        Route::get('delete2/{id_type}', 'admin\Type_ProductController@delete2')->name('delete2');
    });
    Route::group(['prefix' => 'user'], function () {
        Route::get('list', 'admin\AdminController@getuserList');
        Route::get('add', 'admin\AdminController@getuserAdd');
        Route::get('edit', 'admin\AdminController@getuserEdit');
    });
    Route::group(['prefix' => 'orders'], function () {
        route::get('order', 'admin\ordercontroller@getorder');
        Route::get('delete/{order_id?}', 'admin\ordercontroller@deleteorder');
        route::get('detail/{order_id?}', 'admin\ordercontroller@orderitems');
        Route::post('confirm_status', 'admin\cartcontroller@confirmstatus');
        // Route::get('tinh-trang/cho-xu-ly', 'admin\ordercontroller@choxuly'); // 1
        // Route::get('tinh-trang/dang-giao-hang', 'admin\ordercontroller@danggiaohang'); // 2
        // Route::get('tinh-trang/da-giao', 'admin\ordercontroller@dagiao'); //3
        // Route::get('tinh-trang/da-huy', 'admin\ordercontroller@dahuy'); //4
        Route::get('my-order', 'admin\ordercontroller@myorder');

    });
});

// //login
Route::get('sigup', 'LoginController@GetSigup');
Route::post('sigup', 'LoginController@PostSigup');
Route::get('authlogin', 'LoginController@GetLogin');
Route::post('authlogin', 'LoginController@PostLogin')->name('login');
// làm 1 route để log out
Route::get('/logout', function() {
    Auth::logout();
    return redirect("/");
})->name('logout');




Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
