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
    return view('photographyWebsite');
});

Route::auth();
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function() {
    //Route::post('toggledeliver/{orderId}','OrderController@toggledeliver')->name('toggle.deliver');

    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');


    Route::resource('Companies','CompanyController');
    Route::resource('packages','PackageController');
    Route::get('admin/Companies','CompanyController@index');
    Route::resource('user','userController');
    Route::get('/Orders/{type?}','OrderController@orders');
    Route::POST('admin/toggledeliver/{orderId}','OrderController@toggledeliver')->name('toggle.deliver');
    //Route::get('admin/Companies/create','CompanyController@create');
   // Route::resource('category','CategoriesController');
   // Route::get('orders/{type?}','OrderController@Orders');
});

Route::get('/dreamWeaver','dreamWeaverController@index');
Route::get('/iap','iapController@index');
Route::get('/weddingDiary','weddingDiaryController@index');
Route::resource('UserOrders','userOrderController');
Route::resource('profile','profileController');

Route::get('/pictures',function (){
    return view('Picture.pictures');
});

Route::get('/Password','userPasswordController@password');
Route::POST('/changePassword','userPasswordController@updatePassword');
