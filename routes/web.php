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

Auth::routes();


  
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/', function () {
    return redirect()->route('items.index');
});

Route::resource('users', 'UserController');

// プロフィール編集
Route::get('/profile/edit','UserController@edit')->name('users.edit');
// 更新
Route::patch('/profile','UserController@update')->name('users.update');



Route::resource('items', 'ItemController');



// 県
Route::resource('prefectures', 'PrefectureController');

// 　お気に入り
Route::resource('likes', 'LikeController')->only([
  'index', 'store', 'destroy'
]);
Route::patch('/items/{item}/toggle_like','ItemController@toggleLike')->name('items.toggle_like');
// 検索機能
Route::get('searchproduct', 'ItemController@searchItems')->name('items.search');
// パスワード変更
Route::get('/password/change', 'ChangePasswordController@showChangePasswordForm')->name('passwords.form');
Route::post('/password/change', 'ChangePasswordController@ChangePassword')->name('passwords.change');

//入力ページ
Route::get('/contacts', 'ContactController@index')->name('contacts.index');
//確認ページ
Route::post('/contacts/confirm', 'ContactController@confirm')->name('contacts.confirm');
//送信完了ページ
Route::post('/contacts/thanks', 'ContactController@send')->name('contacts.send');

//ゲストユーザーログイン
Route::get('guest', 'Auth\LoginController@guestLogin')->name('login.guest');

// 会社詳細ページ
Route::get('/companies', 'CompanyController@index')->name('companies.index');