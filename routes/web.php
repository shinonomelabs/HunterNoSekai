<?php

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
    return view('front.home');
});
Route::get('admin', function(){
    return view('admin.index');
});
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shop', 'HomeController@shop')->name('shop');
Route::get('/category/{id}', 'HomeController@showCates');
Route::get('/productdetail/{id}', 'HomeController@singlepro');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('cart/addItem/{id}','CartController@addItem');
Route::put('/cart/update/{id}','CartController@update');
Route::get('/cart/remove/{id}','CartController@destroy');
Route::get('cart/checkout','CoController@index');



/**/
Route::group(['middleware'=>'auth'],function(){
    Route::get('/profile', 'ProfileController@index')->name('profil');
    Route::get('/wishlist', 'HomeController@View_wishList')->name('wishlist');
    Route::post('addtoWishlist', 'HomeController@addWishlist')->name('addtoWishlist');
    Route::get('/removeWishList/{id}', 'HomeController@removeWishlist');
});
Auth::routes();


Route::group(['prefix'=>'admin','middleware'=>['auth','admin']], function(){
    Route::get('/',function(){
        return view('admin.index');
    });
    Route::resource('product','ProductController');
    Route::resource('category','CategoriesController');

});

