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
Route::get('Admin/login', [
	'as'=>'login-admin',
	'uses'=>'PageController@getLogin_admin'
]);

Route::post('dang-nhap-admin', [
	'as'=>'dang-nhap-admin',
	'uses'=>'PageController@postDangnhap_admin'
]);

Route::get('dang-xuat-admin', [
	'as'=>'dang-xuat-admin',
	'uses'=>'PageController@postDangxuat_admin'
]);


Route::group(['prefix'=>'Admin', 'middleware'=>'adminLogin'], function(){
	Route::get('/', [
		'as'=>'Admin',
		'uses'=>'PageController@getIndex_Admin'
	]);

	Route::get('add-address', [
		'as'=>'add-address',
		'uses'=>'PageController@getAdd_address'
	]);

	Route::get('add-category', [
		'as'=>'add-category',
		'uses'=>'PageController@getAdd_category'
	]);

	Route::get('add-product', [
		'as'=>'add-product',
		'uses'=>'PageController@getAdd_product'
	]);

	Route::get('add-sale', [
		'as'=>'add-sale',
		'uses'=>'PageController@getAdd_sale'
	]);

	Route::get('add-slide', [
		'as'=>'add-slide',
		'uses'=>'PageController@getAdd_slide'
	]);

	Route::get('change-address', [
		'as'=>'change-address',
		'uses'=>'PageController@getChange_address'
	]);

	Route::get('change-category', [
		'as'=>'change-category',
		'uses'=>'PageController@getChange_category'
	]);

	Route::get('change-pass', [
		'as'=>'change-pass',
		'uses'=>'PageController@getChange_pass'
	]);

	Route::get('change-product/{id}', [
		'as'=>'change-product',
		'uses'=>'PageController@getChange_product'
	]);

	Route::get('change-sale', [
		'as'=>'change-sale',
		'uses'=>'PageController@getChange_sale'
	]);

	Route::get('change-slide', [
		'as'=>'change-slide',
		'uses'=>'PageController@getChange_slide'
	]);

	Route::get('edit-profile', [
		'as'=>'edit-profile',
		'uses'=>'PageController@getEdit_profile'
	]);


	Route::get('list-address', [
		'as'=>'list-address',
		'uses'=>'PageController@getList_address'
	]);

	Route::get('list-bill', [
		'as'=>'list-bill',
		'uses'=>'PageController@getList_bill'
	]);

	Route::get('list-category', [
		'as'=>'list-category',
		'uses'=>'PageController@getList_category'
	]);

	Route::get('list-inbox', [
		'as'=>'list-inbox',
		'uses'=>'PageController@getList_inbox'
	]);

	Route::get('list-product', [
		'as'=>'list-product',
		'uses'=>'PageController@getList_product'
	]);

	Route::get('list-sale', [
		'as'=>'list-sale',
		'uses'=>'PageController@getList_sale'
	]);

	Route::get('list-slide', [
		'as'=>'list-slide',
		'uses'=>'PageController@getList_slide'
	]);

	Route::get('list-user', [
		'as'=>'list-user',
		'uses'=>'PageController@getList_user'
	]);

	Route::get('profile', [
		'as'=>'profile-admin',
		'uses'=>'PageController@getProfile_admin'
	]);

	Route::get('reply-inbox', [
		'as'=>'reply-inbox',
		'uses'=>'PageController@getReply_inbox'
	]);

	Route::get('view-inbox', [
		'as'=>'view-inbox',
		'uses'=>'PageController@getView_inbox'
	]);

	Route::get('list-bill',[
		'as' => 'list-bill',
		'uses' => 'PageController@getList_bill'
	]);

	Route::get('get-add-category',[
		'as' => 'get-add-category',
		'uses' => 'PageController@getAdd_category'
	]);

	Route::post('post-add-category',[
		'as' => 'post-add-category',
		'uses' => 'PageController@postAdd_category'
	]);

	Route::post('post-add-product',[
		'as' => 'post-add-product',
		'uses' => 'PageController@postAdd_product'
	]);

	Route::post('post-update-product',[
		'as' => 'post-update-product',
		'uses' => 'PageController@postUpdate_product'
	]);
});



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

Route::post('doi-mat-khau', [
	'as'=>'doi-mat-khau',
	'uses'=>'PageController@postChangepass'
]);

Route::get('lien-he', [
	'as'=>'lien-he',
	'uses'=>'PageController@getContact'
]);

Route::get('sua-thong-tin-tai-khoan', [
	'as'=>'sua-thong-tin-tai-khoan',
	'uses'=>'PageController@getEditinfor'
]);

Route::post('sua-thong-tin-tai-khoan', [
	'as'=>'sua-thong-tin-tai-khoan',
	'uses'=>'PageController@postEditinfor'
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

Route::get('san-pham/{id}', [
	'as'=>'san-pham',
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

Route::get('san-pham-khuyen-mai/{type}', [
	'as'=>'san-pham-khuyen-mai',
	'uses'=>'PageController@getSale'
]);

Route::get('kich-hoat', [
	'as'=>'kich-hoat',
	'uses'=>'PageController@getActive'
]);

//hành động
Route::post('dang-ky', [
	'as'=>'dang-ky',
	'uses'=>'PageController@postDangky'
]);

Route::post('kich-hoat', [
	'as'=>'kich-hoat',
	'uses'=>'PageController@postActive'
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

Route::post('emailsale', [
	'as'=>'emailsale',
	'uses'=>'PageController@postEmailsale'
]);



Route::get('gio-hang', [
	'as'=>'gio-hang',
	'uses'=>'PageController@getGiohang'
]);

Route::get('test', function()
{
    dd(Config::get('mail'));
});