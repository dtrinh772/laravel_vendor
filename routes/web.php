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

use App\Products;

Auth::routes();

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about-us'); // trang giới thiệu
});

Route::get('/selling-products',function(){
    return view('selling-products'); // trang sản phẩm nổi bật
});


Route::group(['prefix' => 'admin'], function(){

    Route::get('/dashboard', [
       'as' => 'admin.dashboard',
       'uses' => 'AdminController@dashboard'
    ])->middleware('auth:admin');


    Route::get('/login', function(){
        return view('admin.login');
    })->name('admin.login');


    Route::post('/login', [
        'as' => 'admin.login.submit',
        'uses' => 'AuthAdmin\AuthAdminController@postLogin'
    ]);

    Route::get('/logout', [
        'as' => 'admin.logout',
        'uses' => 'AuthAdmin\AuthAdminController@logout'
    ]);

    Route::get('/brands/', [
        'as' => 'admin.brands',
        'uses' => 'AdminController@showFormbrands'
    ])->middleware('auth:admin');

});

Route::group(['prefix' => 'admin'], function(){ // xử lý sản phẩm trong admin

    Route::get('/products/', [
        'as' => 'admin.products',
        'uses' => 'AdminController@showProduct'
    ])->middleware('auth:admin');

    Route::get('/products/create', [
        'as' => 'admin.products.create',
        'uses' => 'AdminController@showFormCreate'
    ])->middleware('auth:admin');

    Route::post('/products/create', [
        'as' => 'create.products.submitForm',
        'uses' => 'AdminController@createProducts'
    ]);

    Route::get('product/{id}/edit', [
        'as' => 'admin.edit.product',
        'uses' => 'AdminController@showFormEditProduct'
    ]);

    Route::put('/product/update/{id}', [
        'as' => 'edit.products.submitForm',
        'uses' => 'AdminController@updateProduct'
    ]);

    Route::get('products/delete', [
        'as' => 'admin.ajaxDeleteById',
        'uses' => 'AdminController@ajaxDeleteById'
    ]);

});

Route::group(['prefix' => 'admin'], function(){ // xử lý thể loại trong admin

        Route::get('/categories/', [
            'as' => 'admin.categories',
            'uses' => 'AdminController@showFormCategories'
        ])->middleware('auth:admin');

        Route::post('/add/categories/', [
            'as' => 'admin.addCategories',
            'uses' => 'AdminController@addCategories'
        ]);
});
