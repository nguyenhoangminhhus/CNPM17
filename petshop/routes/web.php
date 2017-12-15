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
//Hiển thị
Route::get('/', [
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);

Route::get('dang-ky', [
	'as'=>'dang-ky',
	'uses'=>'PageController@getDangky'
]);

Route::get('dang-nhap', [
	'as'=>'dang-nhap',
	'uses'=>'PageController@getDangnhap'
]);

Route::get('quen-mat-khau', [
	'as'=>'quen-mat-khau',
	'uses'=>'PageController@getForgotpass'
]);

Route::get('thong-tin', [
	'as'=>'thong-tin',
	'uses'=>'PageController@getThongtin'
]);

Route::get('credit-card', [
	'as'=>'credit-card',
	'uses'=>'PageController@getCreditcard'
]);

Route::get('doi-mat-khau', [
	'as'=>'doi-mat-khau',
	'uses'=>'PageController@getChangepass'
]);

Route::get('lien-he', [
	'as'=>'lien-he',
	'uses'=>'PageController@getContact'
]);

Route::get('sua-thong-tin-tai-khoan', [
	'as'=>'sua-thong-tin-tai-khoan',
	'uses'=>'PageController@getEditinfor'
]);

Route::get('giup-do', [
	'as'=>'giup-do',
	'uses'=>'PageController@getHelp'
]);

Route::get('thong-tin-tai-khoan', [
	'as'=>'thong-tin-tai-khoan',
	'uses'=>'PageController@getInfor'
]);

Route::get('thong-tin-don-hang', [
	'as'=>'thong-tin-don-hang',
	'uses'=>'PageController@getInforbill'
]);

Route::get('danh-sach-don-hang', [
	'as'=>'danh-sach-don-hang',
	'uses'=>'PageController@getListbill'
]);

Route::get('dich-vu', [
	'as'=>'dich-vu',
	'uses'=>'PageController@getMarketplace'
]);

Route::get('thanh-toan', [
	'as'=>'thanh-toan',
	'uses'=>'PageController@getPayment'
]);

Route::get('chinh-sach-bao-mat', [
	'as'=>'chinh-sach-bao-mat',
	'uses'=>'PageController@getPrivacy'
]);

Route::get('san-pham', [
	'as'=>'san-pham',
	'uses'=>'PageController@getSignup'
]);

Route::get('so-do-website', [
	'as'=>'so-do-website',
	'uses'=>'PageController@getSitemap'
]);

Route::get('gia-tri-cot-loi', [
	'as'=>'gia-tri-cot-loi',
	'uses'=>'PageController@getValues'
]);

Route::get('khuyen-mai', [
	'as'=>'khuyen-mai',
	'uses'=>'PageController@getOffers'
]);

//hành động
Route::post('dang-ky', [
	'as'=>'dang-ky',
	'uses'=>'PageController@postDangky'
]);

Route::post('dang-nhap', [
	'as'=>'dang-nhap',
	'uses'=>'PageController@postDangnhap'
]);

Route::get('dang-xuat', [
	'as'=>'dang-xuat',
	'uses'=>'PageController@postDangxuat'
]);
