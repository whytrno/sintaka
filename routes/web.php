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

Route::get('destination/type/{destinationtype}', 'DestinationController@type')->name('destination.type');
Route::resource('destination', DestinationController::class);

Route::get('admin/events', 'AdminController@events')->name('admin.events');
Route::get('admin/addEvent', 'AdminController@addEvent')->name('admin.addEvent');
Route::post('admin/addEvent', 'AdminController@storeEvent')->name('admin.addEvent');
Route::get('admin/editEvent/{event}', 'AdminController@editEvent')->name('admin.editEvent');
Route::post('admin/editEventProccess/{event}', 'AdminController@editEventProccess')->name('admin.editEventProccess');
Route::get('admin/destroyEvent/{event}', 'AdminController@destroyEvent')->name('admin.destroyEvent');

Route::get('admin/destinations', 'AdminController@destinations')->name('admin.destinations');
Route::get('admin/destinationAyam/{destination}', 'AdminController@destinationAyam')->name('admin.destinationAyam');
Route::get('admin/addDestination', 'AdminController@addDestination')->name('admin.addDestination');
Route::post('admin/addDestination', 'AdminController@storeDestination')->name('admin.addDestination');
Route::get('admin/editDestination/{destination}', 'AdminController@editDestination')->name('admin.editDestination');
Route::post('admin/editDestinationProccess/{destination}', 'AdminController@editDestinationProccess')->name('admin.editDestinationProccess');
Route::get('admin/destroyDestination/{destination}', 'AdminController@destroyDestination')->name('admin.destroyDestination');

Route::get('admin/videos', 'VideoController@index')->name('admin.videos');

Route::get('admin/imageDestination/{destination}', 'AdminController@imageDestination')->name('admin.imageDestination');
Route::get('admin/addDestinationImage/{destination}', 'AdminController@addDestinationImage')->name('admin.addDestinationImage');
Route::post('admin/storeDestinationImage', 'AdminController@storeDestinationImage')->name('admin.storeDestinationImage');
Route::get('admin/destroyDestinationImage/{destinationimage}', 'AdminController@destroyDestinationImage')->name('admin.destroyDestinationImage');

Route::resource('admin', AdminController::class);
