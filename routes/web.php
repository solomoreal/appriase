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
})->name('landing');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('appraise/{id}','AppraisalController@create')->name('get_appraise');
Route::post('appraise','AppraisalController@store')->name('post_appraise');
Route::get('profile/{id}','AppraisalController@show')->name('profile');
Route::get('edit_profile/{id}','AppraisalController@edit')->name('edit_profile');
Route::post('edit_profile','AppraisalController@update')->name('post_edit_profile');
Route::get('appraisal_list','AppraisalController@appraisalList')->name('appraisal_list');


