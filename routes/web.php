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
Route::get('infos', 'HomeController@infos')->name('infos');
Route::get('about', 'HomeController@about')->name('about');
Route::get('arts', 'HomeController@arts')->name('arts');
Route::get('destinations', 'HomeController@destinations')->name('destinations');
Route::get('destination/type/{destinationtype}', 'HomeController@type')->name('destination.type');
Route::get('destination/shows/{destination}', 'HomeController@destinationShow')->name('destination.shows');
Route::get('event/shows/{event}', 'HomeController@eventShow')->name('event.shows');
Route::get('info/shows/{info}', 'HomeController@infoShow')->name('info.shows');
Route::post('event/search', 'HomeController@eventSearch')->name('event.search');
Route::post('info/search', 'HomeController@infoSearch')->name('info.search');
Route::resource('/', HomeController::class);

Route::get('admin/events', 'EventController@admin')->name('admin.events');
Route::get('admin/activeEvents', 'EventController@active')->name('admin.activeEvents');
Route::get('admin/inActiveEvents', 'EventController@history')->name('admin.inActiveEvents');
Route::get('admin/addEvent', 'EventController@create')->name('admin.addEvent');
Route::get('admin/editEvent/{event}', 'EventController@edit')->name('admin.editEvent');
Route::get('admin/destroyEvent/{event}', 'EventController@destroy')->name('admin.destroyEvent');
Route::resource('event', EventController::class);

Route::get('admin/infos', 'InformationController@admin')->name('admin.infos');
Route::get('admin/addInfo', 'InformationController@create')->name('admin.addInfo');
Route::post('admin/storeInfo', 'InformationController@store')->name('admin.storeInfo');
Route::get('admin/editInfo/{info}', 'InformationController@edit')->name('admin.editInfo');
Route::post('admin/updateInfo/{info}', 'InformationController@update')->name('admin.updateInfo');
Route::get('admin/destroyInfo/{info}', 'InformationController@destroy')->name('admin.destroyInfo');
Route::resource('info', InformationController::class);

Route::get('admin/users', 'UserController@index')->name('admin.users');
Route::get('admin/addUser', 'UserController@create')->name('admin.addUser');
Route::post('admin/storeUser', 'UserController@store')->name('admin.storeUser');
Route::get('admin/editUser/{user}', 'UserController@edit')->name('admin.editUser');
Route::get('admin/destroyUser/{user}', 'UserController@destroy')->name('admin.destroyUser');
Route::post('admin/updateUser/{user}', 'UserController@update')->name('admin.updateUser');
Route::resource('user', UserController::class);

Route::get('admin/destinations', 'DestinationController@admin')->name('admin.destinations');
Route::get('admin/addDestination', 'DestinationController@create')->name('admin.addDestination');
Route::get('admin/editDestination/{destination}', 'DestinationController@edit')->name('admin.editDestination');
Route::get('admin/destroyDestination/{destination}', 'DestinationController@destroy')->name('admin.destroyDestination');
Route::resource('destination', DestinationController::class);

Route::get('admin/videos', 'VideoController@index')->name('admin.videos');
Route::get('admin/addVideo', 'VideoController@create')->name('admin.addVideo');
Route::post('admin/storeVideo', 'VideoController@store')->name('admin.storeVideo');
Route::get('admin/destroyVideo/{video}', 'VideoController@destroy')->name('admin.destroyVideo');

Route::get('admin/arts', 'ArtController@index')->name('admin.arts');
Route::get('admin/addArt', 'ArtController@create')->name('admin.addArt');
Route::post('admin/storeArt', 'ArtController@store')->name('admin.storeArt');
Route::get('admin/destroyArt/{art}', 'ArtController@destroy')->name('admin.destroyArt');

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

Route::get('admin/addTeam', 'TeamController@create')->name('admin.addTeam');
Route::post('admin/storeTeam', 'TeamController@store')->name('admin.storeTeam');
Route::get('admin/editTeam/{team}', 'TeamController@edit')->name('admin.editTeam');
Route::post('admin/updateTeam/{team}', 'TeamController@update')->name('admin.updateTeam');
Route::get('admin/destroyTeam/{team}', 'TeamController@destroy')->name('admin.destroyTeam');

Route::get('login', 'AdminController@login')->name('login');
Route::post('admin/login', 'AdminController@actionlogin')->name('admin.login');

Route::get('admin/editSlider/{slider}', 'SliderController@editSlider')->name('admin.editSlider');
Route::post('admin/updateSlider/{slider}', 'SliderController@updateSlider')->name('admin.updateSlider');
Route::get('admin/destroySlider/{slider}', 'SliderController@destroySlider')->name('admin.destroySlider');
Route::get('admin/addSlider', 'SliderController@addSlider')->name('admin.addSlider');
Route::post('admin/storeSlider', 'SliderController@storeSlider')->name('admin.storeSlider');

Route::post('admin/changeLogo', 'AdminController@changeLogo')->name('admin.changeLogo');
Route::post('admin/updateSetting/{setting}', 'AdminController@updateSetting')->name('admin.updateSetting');
Route::post('admin/updateAbout/{about}', 'AdminController@updateAbout')->name('admin.updateAbout');
Route::resource('admin', AdminController::class);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
