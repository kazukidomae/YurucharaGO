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

// 新規登録・ログイン
Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
// トップ
Route::get('/','PagesController@index')->middleware('auth');
// 現在地検索
Route::get('/search', 'MapViewController@search')->middleware('auth');
//入手カード一覧
Route::get('/obtaincardlist', 'CollectionController@cardGet')->middleware('auth');
//入手トロフィー
Route::get('/trophylist', 'ObtainDataController@trophyGet')->middleware('auth');
// 設定
Route::get('/configuration', 'PagesController@configuration')->middleware('auth');

// 都道府県カード一覧
Route::get('/data', 'GetDataController@refinePrefectures')->middleware('datafillter');
//カード詳細
Route::get('/cardDetail', 'GetDataController@getDetail')->middleware('getdatafillter');
// ナビゲーション
Route::get('/navigation', 'GetDataController@getNavigationData')->middleware('getdatafillter');
// 範囲検索(非同期)
Route::get('/range', 'GetDataController@getRangeData')->middleware('rangefillter');
// カード入手
Route::get('/getcard', 'ObtainDataController@cardGet');

//トロフィー詳細
Route::get('/trophydetail', 'PagesController@trophydetail')->middleware('auth');   //トロフィー詳細



