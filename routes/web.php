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
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('appraise','AppraisalController@create')->name('get_appraise');
Route::post('appraise','AppraisalController@store')->name('post_appraise');
route::get('profile',function(){
    return view('profile');
})->name('profile');

route::get('appraise',function(){
    return view('appraise');
})->name('appraise');
