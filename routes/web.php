<?php

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

Route::get('/', function (){
    return view('welcome');
}
);
Route::get('/interests', 'InterestController@index')->name('interests.index');
Route::get('/interests/create', 'InterestController@create')->name('interests.create');
Route::post('/interests', 'InterestController@store')->name('interests.store');
Route::get('/interests/{interest}', 'InterestController@show')->name('interests.show');
Route::get('/interests/{interest}/edit', 'InterestController@edit')->name('interests.edit');
Route::put('/interests/{interest}', 'InterestController@update')->name('interests.update');
Route::delete('/interests/{interest}', 'InterestController@destroy')->name('interests.destroy');
