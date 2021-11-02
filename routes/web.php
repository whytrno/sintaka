<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\EventController;

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
Route::get('videos', 'HomeController@videos')->name('videos');
Route::resource('/', HomeController::class);

Route::post('event/search', 'EventController@search')->name('event.search');
Route::resource('event', EventController::class);

Route::get('destination/type/{destination}', 'DestinationController@type')->name('destination.type');
Route::resource('destination', DestinationController::class);
