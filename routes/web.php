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
    return view('index');
});

Auth::routes(['verify' => true]);
Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');




Route::get('/home', 'HomeController@index')->name('home');


/*notice*/
Route::resource('notices', 'NoticeController');
Route::resource('notices.noticeComments', 'NoticeCommentController', ['only' => 'store']);


/*introduce*/
Route::resource('introduces', 'IntroduceController');

/*apply*/
Route::resource('applies', 'ApplyController');

/*free*/
Route::resource('frees', 'FreeController');
Route::resource('frees.freeComments' ,'FreeCommentController', ['only' => 'store']);
