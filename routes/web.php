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

// トップ
Route::get('/','PagesController@index');
// 新規登録・ログイン
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// 現在地検索
Route::get('/search', 'MapViewController@search');
// ナビゲーション
Route::get('/navigation', 'GetDataController@getNavigationData');
// カードリスト表示
Route::get('/data', 'GetDataController@refinePrefectures');
// 範囲検索(非同期)
Route::get('/range', 'GetDataController@getRangeData');
// カード追加
Route::get('/getcard', 'ObtainDataController@cardGet');

Route::get('/cardlist', 'PagesController@cardlist');   //検索カード一覧
Route::get('/obtaincardlist', 'PagesController@obtaincardlist');   //入手カード一覧
Route::get('/cardDetail', 'GetDataController@getDetail');   //カード詳細
Route::get('/trophylist', 'PagesController@trophylist');   //トロフィー一覧
Route::get('/trophydetail', 'PagesController@trophydetail');   //トロフィー詳細
Route::get('/configuration', 'PagesController@configuration');   //設定



