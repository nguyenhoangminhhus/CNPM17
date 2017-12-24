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

Route::get('Admin', [
	'as'=>'Admin',
	'middleware' => 'auth',
	'uses'=>'PageController@getIndex_Admin'
]);

Route::get('Admin/add-address', [
	'as'=>'add-address',
	'uses'=>'PageController@getAdd_address'
]);

Route::get('Admin/add-category', [
	'as'=>'add-category',
	'uses'=>'PageController@getAdd_category'
]);

Route::get('Admin/add-product', [
	'as'=>'add-product',
	'uses'=>'PageController@getAdd_product'
]);

Route::get('Admin/add-sale', [
	'as'=>'add-sale',
	'uses'=>'PageController@getAdd_sale'
]);

Route::get('Admin/add-slide', [
	'as'=>'add-slide',
	'uses'=>'PageController@getAdd_slide'
]);


Route::get('Admin/change-address', [
	'as'=>'change-address',
	'uses'=>'PageController@getChange_address'
]);

Route::get('Admin/change-category', [
	'as'=>'change-category',
	'uses'=>'PageController@getChange_category'
]);

Route::get('Admin/change-pass', [
	'as'=>'change-pass',
	'uses'=>'PageController@getChange_pass'
]);

Route::get('Admin/change-product', [
	'as'=>'change-product',
	'uses'=>'PageController@getChange_product'
]);

Route::get('Admin/change-sale', [
	'as'=>'change-sale',
	'uses'=>'PageController@getChange_sale'
]);

Route::get('Admin/change-slide', [
	'as'=>'change-slide',
	'uses'=>'PageController@getChange_slide'
]);

Route::get('Admin/edit-profile', [
	'as'=>'edit-profile',
	'uses'=>'PageController@getEdit_profile'
]);

Route::get('Admin/forgot-pass', [
	'as'=>'forgot-pass',
	'uses'=>'PageController@getForgot_pass'
]);

Route::get('Admin/list-address', [
	'as'=>'list-address',
	'uses'=>'PageController@getList_address'
]);

Route::get('Admin/list-bill', [
	'as'=>'list-bill',
	'uses'=>'PageController@getList_bill'
]);

Route::get('Admin/list-category', [
	'as'=>'list-category',
	'uses'=>'PageController@getList_category'
]);


Route::get('Admin/list-inbox', [
	'as'=>'list-inbox',
	'uses'=>'PageController@getList_inbox'
]);

Route::get('Admin/list-product', [
	'as'=>'list-product',
	'uses'=>'PageController@getList_product'
]);

Route::get('Admin/list-sale', [
	'as'=>'list-sale',
	'uses'=>'PageController@getList_sale'
]);

Route::get('Admin/list-slide', [
	'as'=>'list-slide',
	'uses'=>'PageController@getList_slide'
]);

Route::get('Admin/list-user', [
	'as'=>'list-user',
	'uses'=>'PageController@getList_user'
]);

Route::get('Admin/login', [
	'as'=>'login-admin',
	'uses'=>'PageController@getLogin_admin'
]);

Route::post('dang-nhap-admin', [
	'as'=>'dang-nhap-admin',
	'uses'=>'PageController@postDangnhap_admin'
]);

Route::get('Admin/list-inbox', [
	'as'=>'list-inbox',
	'uses'=>'PageController@getList_inbox'
]);

Route::get('Admin/list-product', [
	'as'=>'list-product',
	'uses'=>'PageController@getList_product'
]);

Route::get('Admin/list-sale', [
	'as'=>'list-sale',
	'uses'=>'PageController@getList_sale'
]);

Route::get('Admin/list-slide', [
	'as'=>'list-slide',
	'uses'=>'PageController@getList_slide'
]);

Route::get('Admin/list-user', [
	'as'=>'list-user',
	'uses'=>'PageController@getList_user'
]);

Route::get('Admin/login', [
	'as'=>'login-admin',
	'uses'=>'PageController@getLogin_admin'
]);


Route::get('Admin/profile', [
	'as'=>'profile-admin',
	'uses'=>'PageController@getProfile_admin'
]);

Route::get('Admin/reply-inbox', [
	'as'=>'reply-inbox',
	'uses'=>'PageController@getReply_inbox'
]);

Route::get('Admin/view-inbox', [
	'as'=>'view-inbox',
	'uses'=>'PageController@getView_inbox'
]);




Route::get('Admin/change-address', [
	'as'=>'change-address',
	'uses'=>'PageController@getChange_address'
]);

Route::get('Admin/change-category', [
	'as'=>'change-category',
	'uses'=>'PageController@getChange_category'
]);

Route::get('Admin/change-pass', [
	'as'=>'change-pass',
	'uses'=>'PageController@getChange_pass'
]);

Route::get('Admin/change-product', [
	'as'=>'change-product',
	'uses'=>'PageController@getChange_product'
]);

Route::get('Admin/change-sale', [
	'as'=>'change-sale',
	'uses'=>'PageController@getChange_sale'
]);

Route::get('Admin/change-slide', [
	'as'=>'change-slide',
	'uses'=>'PageController@getChange_slide'
]);

Route::get('Admin/edit-profile', [
	'as'=>'edit-profile',
	'uses'=>'PageController@getEdit_profile'
]);

Route::get('Admin/forgot-pass', [
	'as'=>'forgot-pass',
	'uses'=>'PageController@getForgot_pass'
]);

Route::get('Admin/list-address', [
	'as'=>'list-address',
	'uses'=>'PageController@getList_address'
]);

Route::get('Admin/list-bill', [
	'as'=>'list-bill',
	'uses'=>'PageController@getList_bill'
]);

Route::get('Admin/list-category', [
	'as'=>'list-category',
	'uses'=>'PageController@getList_category'
]);

Route::get('Admin/list-inbox', [
	'as'=>'list-inbox',
	'uses'=>'PageController@getList_inbox'
]);

Route::get('Admin/list-product', [
	'as'=>'list-product',
	'uses'=>'PageController@getList_product'
]);

Route::get('Admin/list-sale', [
	'as'=>'list-sale',
	'uses'=>'PageController@getList_sale'
]);

Route::get('Admin/list-slide', [
	'as'=>'list-slide',
	'uses'=>'PageController@getList_slide'
]);

Route::get('Admin/list-user', [
	'as'=>'list-user',
	'uses'=>'PageController@getList_user'
]);

Route::get('login', [
	'as'=>'login-admin',
	'uses'=>'PageController@getLogin_admin'
]);

Route::get('Admin/profile', [
	'as'=>'profile-admin',
	'uses'=>'PageController@getProfile_admin'
]);

Route::get('Admin/reply-inbox', [
	'as'=>'reply-inbox',
	'uses'=>'PageController@getReply_inbox'
]);

Route::get('Admin/view-inbox', [
	'as'=>'view-inbox',
	'uses'=>'PageController@getView_inbox'
]);




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



Route::post('quen-mat-khau', [
	'as'=>'quen-mat-khau',
	'uses'=>'PageController@postForgotpass'
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

Route::get('chi-tiet-san-pham/{id}'	, [
	'as'=>'chi-tiet-san-pham',
	'uses'=>'PageController@getProduct'
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

Route::get('loai-san-pham/{type}', [
	'as'=>'loai-san-pham',
	'uses'=>'PageController@getCategory'
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


Route::post('lien-he',[
	'as'=>'lien-he',
	'uses'=>'PageController@postContact'
 ]);

Route::get('search',[
	'as'=>'search',
	'uses' =>'PageController@getSearch'

]);
Route::get('mua-hang/{id}/{name}',[
	'as' => 'mua-hang',
	'uses' => 'PageController@muahang'
]);



Route::get('gio-hang', [
	'as'=>'gio-hang',
	'uses'=>'PageController@getGiohang'
]);

Route::get('xoa-sp-giohang/{id}', [
	'as' => 'xoa-sp-giohang',
	'uses' => 'PageController@xoaspgiohang'
]);

Route::get('cap-nhat/{id}/{qty}',[
	'as' => 'cap-nhat',
	'uses' => 'PageController@capnhatgiohang'
]);


Route::post('dat-hang', [
	'as' => 'dat-hang',
	'uses' => 'PageController@dathang'
]);

Route::get('danh-sach-don-hang', [
	'as'=>'danh-sach-don-hang',
	'uses'=>'PageController@getListbill'
]);
Route::post('customer-bill',[
	'as' => 'customer-bill',
	'uses' =>'PageController@custListbill'
]);





