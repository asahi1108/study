<?php

use App\Http\Controllers\StoryController;
use Illuminate\Support\Facades\Route;

use App\Models\Post;

use App\Models\User;

use App\Models\Address;

use App\Models\Division;

use App\Models\Story;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/' , 'HomeController@index');

// これはqiitaのやつ

Route::group(['prefix'=>'story'], function () {
  Route::get('index', 'StoryController@index')->name('story.index');
  Route::get('create', 'StoryController@create')->name('story.create');
  Route::post('store', 'StoryController@store')->name('story.store');
  Route::get('show/{id}', 'StoryController@show')->name('story.show');
  Route::get('edit/{id}', 'StoryController@edit')->name('story.edit');
  Route::post('update/{id}', 'StoryController@update')->name('story.update');
  Route::post('destroy/{id}', 'StoryController@destroy')->name('story.destroy');
});

