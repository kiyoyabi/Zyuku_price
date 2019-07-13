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

Route::get('/chugaku','JugmentController@chugaku')->name('jugments.chugaku');
Route::post('/chugaku/course1','SyougakuController@course1')->name('chugakus.course1');

Route::get('/syougaku','JugmentController@syougaku')->name('jugments.syougaku');
Route::post('/syougaku/course1','SyougakuController@course1')->name('syougakus.course1');
Route::post('/syougaku/cal','SyougakuController@cal')->name('syougakus.cal');

Route::get('/koukou','JugmentController@koukou')->name('jugments.koukou');
Route::post('/koukou/course1','SyougakuController@course1')->name('koukous.course1');
