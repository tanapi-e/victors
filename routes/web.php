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

Auth::routes();

Route::get('/cms', 'cms\TopController@index')->middleware('auth');
Route::get('/cms/player', 'cms\PlayerInfoController@index')->middleware('auth');
Route::get('/cms/game/schedule', 'cms\GameScheduleInfoController@index')->middleware('auth');
Route::get('/cms/game/result', 'cms\GameResultInfoController@index')->middleware('auth');

Route::group(['middleware' => ['web']], function () {
    // 選手情報登録(管理画面)
    Route::post('/cms/player/confirm', 'cms\PlayerInfoController@create');
    // 選手情報一覧表示(管理画面)
    Route::get('/cms/player/list', 'cms\PlayerInfoController@getPlayerList');
    // 選手情報削除(管理画面)
    Route::post('/cms/player/delete/{id}', 'cms\PlayerInfoController@delete');

    // 試合予定登録(管理画面)
    Route::post('/cms/game/schedule/confirm', 'cms\GameScheduleInfoController@create');
    // 試合予定一覧取得(管理画面)
    Route::get('/cms/game/schedule/list', 'cms\GameScheduleInfoController@getGameSchedule');
    // 試合予定削除(管理画面)
    Route::post('/cms/game/schedule/delete/{id}', 'cms\GameScheduleInfoController@delete');

    // 試合結果登録(管理画面)
    Route::post('/cms/game/result/confirm', 'cms\GameResultInfoController@update');
    // 試合結果登録画面表示(管理画面)
    Route::get('/cms/game/result/update/{id}', 'cms\GameResultInfoController@edit_index');
});
