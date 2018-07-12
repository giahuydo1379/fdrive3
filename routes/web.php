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

Auth::routes();

Route::get('/home', 'admin\HomeController@index')->name('home');
Route::group([ 'prefix' => '/admin', 'middleware' => 'auth'], function() {


	Route::get('/home', 'admin\HomeController@index');
	Route::get('/feddback/{id}',['as'=>'feedback.show','uses'=>'admin\HomeController@show']);


	//Route::resource('/users,'admin\UserController');


	Route::get('/roles',['as'=>'roles.index','uses'=>'admin\RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
	Route::get('/roles/create',['as'=>'roles.create','uses'=>'admin\RoleController@create','middleware' => ['permission:role-create']]);
	Route::post('/roles/create',['as'=>'roles.store','uses'=>'admin\RoleController@store','middleware' => ['permission:role-create']]);
	Route::get('/roles/{id}',['as'=>'roles.show','uses'=>'admin\RoleController@show']);
	Route::get('/roles/{id}/edit',['as'=>'roles.edit','uses'=>'admin\RoleController@edit','middleware' => ['permission:role-edit']]);
	Route::patch('/roles/{id}',['as'=>'roles.update','uses'=>'admin\RoleController@update','middleware' => ['permission:role-edit']]);
	Route::get('/roles/delete/{id}',['as'=>'roles.destroy','uses'=>'admin\RoleController@destroy','middleware' => ['permission:role-delete']]);


	Route::get('/users',['as'=>'users.index','uses'=>'admin\UserController@index','middleware' => ['permission:role-list|user-create|user-edit|user-delete']]);
	Route::get('/users/create',['as'=>'users.create','uses'=>'admin\UserController@create','middleware' => ['permission:user-create']]);
	Route::post('/users/create',['as'=>'users.store','uses'=>'admin\UserController@store','middleware' => ['permission:user-create']]);
	Route::get('/users/{id}',['as'=>'users.show','uses'=>'admin\UserController@show','middleware' => ['permission:role-list|user-create|user-edit|user-delete']]);
	Route::get('/users/{id}/edit',['as'=>'users.edit','uses'=>'admin\UserController@edit','middleware' => ['permission:user-edit']]);
	Route::patch('/users/{id}',['as'=>'users.update','uses'=>'admin\UserController@update','middleware' => ['permission:user-edit']]);
	Route::get('/users/delete/{id}',['as'=>'users.destroy','uses'=>'admin\UserController@destroy','middleware' => ['permission:user-delete']]);

	Route::get('/itemCRUD2',['as'=>'itemCRUD2.index','uses'=>'admin\ItemCRUD2Controller@index','middleware' => ['permission:item-list|item-create|item-edit|item-delete']]);
	Route::get('/itemCRUD2/create',['as'=>'itemCRUD2.create','uses'=>'admin\ItemCRUD2Controller@create','middleware' => ['permission:item-create']]);
	Route::post('/itemCRUD2/create',['as'=>'itemCRUD2.store','uses'=>'admin\ItemCRUD2Controller@store','middleware' => ['permission:item-create']]);
	Route::get('/itemCRUD2/{id}',['as'=>'itemCRUD2.show','uses'=>'admin\ItemCRUD2Controller@show']);
	Route::get('/itemCRUD2/{id}/edit',['as'=>'itemCRUD2.edit','uses'=>'admin\ItemCRUD2Controller@edit','middleware' => ['permission:item-edit']]);
	Route::patch('/itemCRUD2/{id}',['as'=>'itemCRUD2.update','uses'=>'admin\ItemCRUD2Controller@update','middleware' => ['permission:item-edit']]);
	Route::delete('/itemCRUD2/{id}',['as'=>'itemCRUD2.destroy','uses'=>'admin\ItemCRUD2Controller@destroy','middleware' => ['permission:item-delete']]);

	Route::get('/post',['as'=>'post.index','uses'=>'admin\PostController@index','middleware' => ['permission:post-list|post-create|post-edit|post-delete']]);
	Route::get('/post/create',['as'=>'post.create','uses'=>'admin\PostController@create','middleware' => ['permission:post-create']]);
	Route::post('/post/create',['as'=>'post.store','uses'=>'admin\PostController@store','middleware' => ['permission:post-create']]);
	Route::get('/post/category',['as'=>'post.showcate','uses'=>'admin\PostController@showCate']);
	Route::get('/post/{id}/edit',['as'=>'post.edit','uses'=>'admin\PostController@edit','middleware' => ['permission:post-edit']]);
	Route::patch('/post/{id}',['as'=>'post.update','uses'=>'admin\PostController@update','middleware' => ['permission:post-edit']]);
	Route::get('/post/notactive',['as'=>'post.notactive','uses'=>'admin\PostController@notActive','middleware' => ['permission:post-list|post-create|post-edit|post-delete']]);
	Route::get('/post/deleted',['as'=>'post.deleted','uses'=>'admin\PostController@getDeleted','middleware' => ['permission:post-list|post-create|post-edit|post-delete']]);
	Route::get('/post/restore/{id}',['as'=>'post.restore','uses'=>'admin\PostController@restore','middleware' => ['permission:post-restore']]);

	
	Route::get('/post/{id}',['as'=>'post.destroy','uses'=>'admin\PostController@destroy','middleware' => ['permission:post-delete']]);


	Route::get('profile', 'admin\ProfileController@getProfile');

    Route::post('profile/update', 'admin\ProfileController@profileUpdate');
	
	
	Route::group(['middleware' => 'locale'], function() {
		Route::get('change-language/{language}', 'admin\HomeController@changeLanguage')
			->name('user.change-language');
	});

});

Route::get('', function () {
	if (Session::has('locale')) {
		App::setLocale(Session::get('locale'));
	}
	return view('welcome');
});

Route::get('language/{locale}', function ($locale) {
	Session::put('locale', $locale);
	return redirect()->back();
});
Route::get('site-register', 'Auth\RegisterController@siteRegister');
Route::post('site-register', 'Auth\RegisterController@siteRegisterPost');

// Route::get('/kinhdoanh', ['as'=>'kinhdoanh','uses'=>'admin\KinhDoanhController@index','middleware' => ['permission:kinhdoanh']]);
// Route::get('/kythuat',['as'=>'kythuat','uses'=>'admin\KythuatController@index','middleware' => ['permission:kithuat']]);

// Route::get('/kinhdoanh','admin\KinhDoanhController@index')->middleware('permission:kinhdoanh');
// Route::get('/kythuat','admin\KythuatController@index')->middleware('permission:kithuat');



//Route::get('timestamp','admin\AjaxController@timestamp');
Route::get('tim-kiem','HomeController@Search');
Route::get('gioi-thieu',['as'=>'introduce','uses'=>'frontend\PostController@getViewIntroduce']);
Route::get('gioi-thieu/san-pham/dich-vu-luu-tru-f-drive',['as'=>'introduce_service','uses'=>'frontend\PostController@getViewIntroduceService']);

Route::get('bang-gia',['as'=>'pricelist','uses'=>'frontend\PostController@getViewpricelist']);
Route::get('lien-he',['as'=>'contact','uses'=>'frontend\PostController@getViewContact']);
Route::get('trang-chu',['as'=>'home','uses'=>'frontend\PostController@getViewHome']);
Route::get('tin-tuc',['as'=>'news','uses'=>'frontend\PostController@getViewNews']);
//Route::get('tin-tuc2',['as'=>'tin-tuc2','uses'=>'frontend\PostController@getViewChitiet']);
Route::get('tin-tuc/{title}-{id}.html',['as'=>'detail','uses'=>'frontend\PostController@getViewDetails'])
->where(['title' => '[0-9a-zA-Z-]+', 'id' => '[0-9]+']);
Route::get('quy-dinh/dieu-khoan-su-dung.html',['as'=>'term','uses'=>'frontend\FooterController@getViewTerm']);
Route::get('quy-dinh/chinh-sach-bao-mat.html',['as'=>'privacy_policy','uses'=>'frontend\FooterController@getViewPrivacyPolicy']);
Route::get('hoi-dap/huong-dan-thanh-toan.html',['as'=>'payment_guide','uses'=>'frontend\FooterController@getViewPaymentGuide']);
Route::get('hoi-dap.html',['as'=>'qa','uses'=>'frontend\FooterController@getViewQa']);
Route::get('ho-tro-ky-thuat.html',['as'=>'support','uses'=>'frontend\FooterController@getViewSupportTechnical']);
Route::post('ho-tro-ky-thuat2.html',['as'=>'post_support','uses'=>'frontend\FooterController@postSupportTechnical']);


Route::get('tin-tuc{id}',['as'=>'breadcumbBanner','uses'=>'frontend\PostController@getBreadcumbDetailNew']);


Route::get('lien-he',['as'=>'contact','uses'=>'frontend\PostController@getViewContact']);
Route::post('mail',['as'=>'postmail','uses'=>'frontend\FooterController@postEmail']);
Route::post('/post/detail/{id}',['as'=>'post.detail','uses'=>'admin\PostController@getDetail']);
