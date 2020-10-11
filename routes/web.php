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

// TOPページ
Route::get('/', 'TopController@index');
// 選手情報ページ
Route::get('/player', 'PlayerController@index');
// Blogページ
Route::get('/blog', 'BlogController@index');
// Blog詳細ページ
Route::get('/blog/detail/{id}', 'BlogController@detail');
// 試合ページ
Route::get('/game', 'GameController@index');
// 試合結果ページ
Route::get('/game/result', 'GameController@result');

Auth::routes();

Route::get('/cms', 'cms\TopController@index')->middleware('auth');
Route::get('/cms/player', 'cms\PlayerInfoController@index')->middleware('auth');
Route::get('/cms/game/schedule', 'cms\GameScheduleInfoController@index')->middleware('auth');
Route::get('/cms/game/result', 'cms\GameResultInfoController@index')->middleware('auth');
Route::get('/cms/blog', 'cms\BlogController@index')->middleware('auth');

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
    // 試合結果削除(管理画面)
    Route::post('/cms/game/result/delete/{id}', 'cms\GameResultInfoController@delete');

    // ブログ投稿画面表示(管理画面)
    Route::get('/cms/blog/create', 'cms\BlogController@create_index');
    // ブログ投稿(管理画面)
    Route::post('/cms/blog/confirm', 'cms\BlogController@create');
    // ブログ投稿内容削除(管理画面)
    Route::post('/cms/blog/delete/{id}', 'cms\BlogController@delete');
});
