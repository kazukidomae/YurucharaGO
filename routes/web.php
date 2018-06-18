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
Route::get('/navigation', 'MapViewController@navigation');
// カードリスト表示
Route::get('/data', 'GetDataController@refinePrefectures');

Route::get('/cardlist', 'PagesController@cardlist');   //検索カード一覧
Route::get('/obtaincardlist', 'PagesController@obtaincardlist');   //入手カード一覧
Route::get('/carddetail', 'PagesController@carddetail');   //カード詳細
Route::get('/trophylist', 'PagesController@trophylist');   //トロフィー一覧
Route::get('/trophydetail', 'PagesController@trophydetail');   //トロフィー詳細
Route::get('/configuration', 'PagesController@configuration');   //設定
