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

Route::get('/', 'HomeController@index')->name('home');






//Route::get('/{lol?}', function () {
//    return view('welcome');
//});
//
//Route::match(['get', 'post'], '/hello', function () {
//    return 'hi there';
//});
//
//Route::get('lol/{id?}', function ($id) {
//    return 'lol '.$id;
//})->name('home');
//

//Route::get('user/{id}', function ($id) {
//    return 'User '.$id;
//});


////dashboard
//Route::get('dashboard/{userId}', function ($user_id) {
//    return 'Dashboard'. $user_id;
//});

//Transaction
//Route:get('transaction/{userId}/{type}', function ($user_id,$type) {
//    return 'Transacation Income or Expense type'. $user_id. ' '.$type;
//});

//Route:get('transaction/{userId}/{type}/add', function () {
//    return 'Transacation Income or Expense type';
//});

//category
//Route:get('category1/{userId}', function ($user_id) {
//    return 'category'. $user_id;
//});

////History
//Route:get('history/{userId}', function ($user_id) {
//    return 'History'. $user_id;
//});

