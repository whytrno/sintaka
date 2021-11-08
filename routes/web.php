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
Route::get('events', 'HomeController@events')->name('events');
Route::get('destinations', 'HomeController@destinations')->name('destinations');
Route::get('destination/type/{destinationtype}', 'HomeController@type')->name('destination.type');
Route::get('destination/shows/{destinationtype}', 'HomeController@destinationShow')->name('destination.shows');
Route::get('event/shows/{event}', 'HomeController@eventShow')->name('event.shows');
Route::post('event/search', 'HomeController@eventSearch')->name('event.search');
Route::resource('/', HomeController::class);

Route::get('admin/events', 'EventController@admin')->name('admin.events');
Route::get('admin/addEvent', 'EventController@create')->name('admin.addEvent');
Route::get('admin/editEvent/{event}', 'EventController@edit')->name('admin.editEvent');
Route::get('admin/destroyEvent/{event}', 'EventController@destroy')->name('admin.destroyEvent');
Route::resource('event', EventController::class);

Route::get('admin/destinations', 'DestinationController@admin')->name('admin.destinations');
Route::get('admin/addDestination', 'DestinationController@create')->name('admin.addDestination');
Route::get('admin/editDestination/{destination}', 'DestinationController@edit')->name('admin.editDestination');
Route::get('admin/destroyDestination/{destination}', 'DestinationController@destroy')->name('admin.destroyDestination');
Route::resource('destination', DestinationController::class);

Route::get('admin/videos', 'VideoController@index')->name('admin.videos');
Route::get('admin/addVideo', 'VideoController@create')->name('admin.addVideo');
Route::post('admin/storeVideo', 'VideoController@store')->name('admin.storeVideo');
Route::get('admin/destroyVideo/{video}', 'VideoController@destroy')->name('admin.destroyVideo');

Route::get('admin/imageDestination/{destination}', 'DestinationController@imageDestination')->name('admin.imageDestination');
Route::get('admin/addDestinationImage/{destination}', 'DestinationController@addDestinationImage')->name('admin.addDestinationImage');
Route::post('admin/storeDestinationImage', 'DestinationController@storeDestinationImage')->name('admin.storeDestinationImage');
Route::get('admin/destroyDestinationImage/{destinationimage}', 'DestinationController@destroyDestinationImage')->name('admin.destroyDestinationImage');

Route::get('admin/testimonis', 'TestimoniController@index')->name('admin.testimonis');
Route::get('admin/addTestimoni', 'TestimoniController@create')->name('admin.addTestimoni');
Route::post('admin/storeTestimoni', 'TestimoniController@store')->name('admin.storeTestimoni');
Route::get('admin/editTestimoni/{testimoni}', 'TestimoniController@edit')->name('admin.editTestimoni');
Route::post('admin/updateTestimoni/{testimoni}', 'TestimoniController@update')->name('admin.updateTestimoni');
Route::get('admin/destroyTestimoni/{testimoni}', 'TestimoniController@destroy')->name('admin.destroyTestimoni');

Route::get('login', 'AdminController@login')->name('login');
Route::post('admin/login', 'AdminController@actionlogin')->name('admin.login');

Route::get('admin/editSlider/{slider}', 'SliderController@editSlider')->name('admin.editSlider');
Route::post('admin/updateSlider/{slider}', 'SliderController@updateSlider')->name('admin.updateSlider');
Route::get('admin/destroySlider/{slider}', 'SliderController@destroySlider')->name('admin.destroySlider');
Route::get('admin/addSlider', 'SliderController@addSlider')->name('admin.addSlider');
Route::post('admin/storeSlider', 'SliderController@storeSlider')->name('admin.storeSlider');

Route::post('admin/changeLogo', 'AdminController@changeLogo')->name('admin.changeLogo');
Route::post('admin/updateSetting/{setting}', 'AdminController@updateSetting')->name('admin.updateSetting');
Route::resource('admin', AdminController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
