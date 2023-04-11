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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/instructs', 'App\Http\Controllers\InstructController@index')->name('instruct.index');

Route::get('/instructs/create', 'App\Http\Controllers\InstructController@create')->name('instruct.create');

Route::post('/instructs', 'App\Http\Controllers\InstructController@store')->name('instruct.store');
Route::get('/instructs/{instruct}', 'App\Http\Controllers\InstructController@show')->name('instruct.show');
Route::get('/instructs/{instruct}/edit', 'App\Http\Controllers\InstructController@edit')->name('instruct.edit');
Route::patch('/instructs/{instruct}', 'App\Http\Controllers\InstructController@update')->name('instruct.update');
Route::delete('/instructs/{instruct}', 'App\Http\Controllers\InstructController@destroy')->name('instruct.delete');

Route::get('/instructs/update', 'App\Http\Controllers\InstructController@update');
Route::get('/instructs/delete', 'App\Http\Controllers\InstructController@delete');

Route::get('/main', 'App\Http\Controllers\MainController@index')->name('main.index');
Route::get('/contacts', 'App\Http\Controllers\ContactController@index')->name('contact.index');
Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about.index');


