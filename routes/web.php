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

Route::get('/', function () {
    return view('welcome');
});
Route::get('index',['as'=>'trang-chu','uses'=>'PageController@getIndex']);
Route::get('loai-san-pham',['as'=>'loaisanpham','uses'=>'PageController@getLoaiSP']);
Route::get('chi-tiet-san-pham',['as'=>'chitietsanpham','uses'=>'PageController@getChiTietSP']);
Route::get('gioi-thieu',['as'=>'gioithieu','uses'=>'PageController@getGioiThieu']);
Route::get('thong-tin-don-hang',['as'=>'thongtindonhang','uses'=>'PageController@getThongTinDH']);
Route::get('lien-he',['as'=>'lienhe','uses'=>'PageController@getLienHe']);
Route::get('dang-nhap',['as'=>'dangnhap','uses'=>'PageController@getDangNhap']);
Route::get('dang-ky',['as'=>'dangky','uses'=>'PageController@getDangKy']);
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'product'],function() {
		Route::get('list',['as'=>'admin.product.list','uses'=>'ProductController@getList']);
		Route::get('add',['as'=>'admin.product.getAdd','uses'=>'ProductController@getAdd']);
		Route::post('add',['as'=>'admin.product.postAdd','uses'=>'ProductController@postAdd']);
		Route::get('edit/{id}',['as'=>'admin.product.getEdit','uses'=>'ProductController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.product.postEdit','uses'=>'ProductController@postEdit']);
		Route::get('delete/{id}',['as'=>'admin.product.getDelete','uses'=>'ProductController@getDelete']);

	});
	Route::group(['prefix'=>'category'],function() {
		Route::get('list',['as'=>'admin.cate.list','uses'=>'CateController@getList']);
		Route::get('add',['as'=>'admin.cate.getAdd','uses'=>'CateController@getAdd']);
		Route::post('add',['as'=>'admin.cate.postAdd','uses'=>'CateController@postAdd']);
		Route::get('edit/{id}',['as'=>'admin.cate.getEdit','uses'=>'CateController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.cate.postEdit','uses'=>'CateController@postEdit']);
		Route::get('delete/{id}',['as'=>'admin.cate.getDelete','uses'=>'CateController@getDelete']);
	});
	Route::group(['prefix'=>'user'],function() {
		Route::get('list',['as'=>'admin.user.list','uses'=>'UserController@getList']);
		Route::get('add',['as'=>'admin.user.getAdd','uses'=>'UserController@getAdd']);
		Route::post('add',['as'=>'admin.user.postAdd','uses'=>'UserController@postAdd']);
		Route::get('edit/{id}',['as'=>'admin.user.getEdit','uses'=>'UserController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.user.postEdit','uses'=>'UserController@postEdit']);
		Route::get('delete/{id}',['as'=>'admin.user.getDelete','uses'=>'UserController@getDelete']);
	});
});
