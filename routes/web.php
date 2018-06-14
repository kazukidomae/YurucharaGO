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
Route::get('/','PagesController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 現在地検索
Route::get('/search', 'MapViewController@search');

// カードリスト表示

//Route::get('/data', 'GetDataController@carddata');

//仮でルーティング
Route::view('/cardlist', 'cardlist');   //検索カード一覧
Route::view('/obtaincardlist', 'obtaincardlist');   //入手カード一覧
Route::view('/carddetail', 'carddetail');   //カード詳細
Route::view('/trophylist', 'trophylist');   //トロフィー一覧
Route::view('/trophydetail', 'trophydetail');   //トロフィー詳細
Route::view('/configuration', 'configuration');   //設定
