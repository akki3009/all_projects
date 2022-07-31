<?php

use Illuminate\Support\Facades\Route;


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

/////////////////////////////////////////// ADMIN ROUTES ///////////////////////////////////////////
Route::group(['prefix' => 'admin', 'namespace' => '\App\Http\Controllers\Backend', 'middleware' => []], function () {

	// Without Login
	Route::get('login', ['uses' => 'AuthController@login'])->name('admin.login');
	Route::post('submit-login', ['uses' => 'AuthController@loginSubmit'])->name('admin.submit.login');
	Route::get('logout', ['uses' => 'AuthController@logout'])->name('admin.logout');

	// With Login
	Route::group(['prefix' => '', 'middleware' => ['admin']], function () {

		// Dashboard
		Route::get('', ['uses' => 'DashboardController@index'])->name('admin.dashboard');

		Route::group(['prefix' => 'beneficiary'], function () {
			Route::any('', ['uses'=>'BeneficiaryController@index'])->name('admin.beneficiary.index');
			Route::get('add', ['uses'=>'BeneficiaryController@add'])->name('admin.beneficiary.add');
			Route::get('edit/{id}', ['uses'=>'BeneficiaryController@edit'])->name('admin.beneficiary.edit');
			Route::post('save/{id}', ['uses'=>'BeneficiaryController@save'])->name('admin.beneficiary.save');
			Route::post('delete', ['uses'=>'BeneficiaryController@delete'])->name('admin.beneficiary.delete');
			Route::any('check-unique', ['uses'=>'BeneficiaryController@checkUnique'])->name('admin.beneficiary.check-unique');
		});

		Route::group(['prefix' => 'advertiser'], function () {
			Route::any('', ['uses'=>'AdvertiserController@index'])->name('admin.advertiser.index');
			Route::get('add', ['uses'=>'AdvertiserController@add'])->name('admin.advertiser.add');
			Route::get('edit/{id}', ['uses'=>'AdvertiserController@edit'])->name('admin.advertiser.edit');
			Route::post('save/{id}', ['uses'=>'AdvertiserController@save'])->name('admin.advertiser.save');
			Route::post('delete', ['uses'=>'AdvertiserController@delete'])->name('admin.advertiser.delete');
			Route::any('check-unique', ['uses'=>'AdvertiserController@checkUnique'])->name('admin.advertiser.check-unique');
		});
	});
});
/////////////////////////////////////////// ADMIN ROUTES ///////////////////////////////////////////


/////////////////////////////////////////// FRONT ROUTES ///////////////////////////////////////////
Route::group(['prefix' => '', 'namespace' => '\App\Http\Controllers\Front', 'middleware' => []], function () {
	//Route::get('', ['uses' => 'CommonController@index'])->name('home');
	Route::get('',['uses'=>'BenificiaryController@index'])->name('home-main');

	Route::group(['prefix' => 'bfc'], function () {
		Route::get('',['uses'=>'BenificiaryController@index'])->name('home');
		Route::get('/about',['uses'=>'BenificiaryController@about'])->name('about');
		Route::get('/contact',['uses'=>'BenificiaryController@contact'])->name('contact');
		Route::get('/privacy',['uses'=>'BenificiaryController@privacy'])->name('privacy');
		Route::get('/terms',['uses'=>'BenificiaryController@terms'])->name('terms');
		Route::get('/faqs',['uses'=>'BenificiaryController@faqs'])->name('faqs');
		Route::get('/login',['uses'=>'BenificiaryController@login'])->name('login');
		Route::get('/advertiser-detail',['uses'=>'BenificiaryController@advertiserDetail'])->name('advertiser-detail');
		Route::get('/browse',['uses'=>'BenificiaryController@browse'])->name('browse');
		Route::get('/dashboard',['uses'=>'BenificiaryController@dashboard'])->name('dashboard');
		Route::get('/signup',['uses'=>'BenificiaryController@signup'])->name('signup');
		Route::get('/change-password',['uses'=>'BenificiaryController@changePassword'])->name('change-password');
		Route::get('/chats',['uses'=>'BenificiaryController@chats'])->name('chats');
		Route::get('/create-new-ad-request',['uses'=>'BenificiaryController@createNewAdRequest'])->name('create-new-ad-request');
		Route::get('/my-ads',['uses'=>'BenificiaryController@myAds'])->name('my-ads');
		Route::get('/invites',['uses'=>'BenificiaryController@invites'])->name('invites');
		Route::get('/edit-ad-request',['uses'=>'BenificiaryController@editAdRequest'])->name('edit-ad-request');
		Route::get('/forget-password',['uses'=>'BenificiaryController@forgetPassword'])->name('forget-password');
		Route::get('/reset-password/{token}', 'BenificiaryController@getToken');
		Route::get('/reset-password', ['uses'=>'BenificiaryController@resetPassword'])->name('reset-password');
		Route::get('/offers',['uses'=>'BenificiaryController@offers'])->name('offers');
		Route::get('/profile',['uses'=>'BenificiaryController@profile'])->name('profile');
		Route::get('/favorite-advertisers',['uses'=>'BenificiaryController@favoriteAdvertisers'])->name('favorite-advertisers');
		Route::get('/invite-adviertiser',['uses'=>'BenificiaryController@inviteAdviertiser'])->name('invite-adviertiser');
		Route::get('/notifications',['uses'=>'BenificiaryController@notifications'])->name('notifications');
		Route::get('/otp-verify',['uses'=>'BenificiaryController@otpVerify'])->name('otp-verify');
		Route::get('/view-contract',['uses'=>'BenificiaryController@viewContract'])->name('view-contract');
		Route::get('/view-details',['uses'=>'BenificiaryController@viewDetails'])->name('view-details');
		Route::get('/web-service',['uses'=>'BenificiaryController@webService'])->name('web-service');


	});
	Route::group(['prefix' => 'adv', 'as' => 'adv.'], function ()  {
		Route::get('',['uses'=>'AdvertiserController@index'])->name('home');
		Route::get('/about',['uses'=>'AdvertiserController@about'])->name('about');
		Route::get('/contact',['uses'=>'AdvertiserController@contact'])->name('contact');
		Route::get('/privacy',['uses'=>'AdvertiserController@privacy'])->name('privacy');
		Route::get('/terms',['uses'=>'AdvertiserController@terms'])->name('terms');
		Route::get('/faqs',['uses'=>'AdvertiserController@faqs'])->name('faqs');
		Route::get('/login',['uses'=>'AdvertiserController@login'])->name('login');
		Route::get('/advertiser-detail',['uses'=>'AdvertiserController@advertiserDetail'])->name('advertiser-detail');
		Route::get('/beneficiary-details',['uses'=>'AdvertiserController@beneficiaryDetail'])->name('beneficiary-details');
		Route::get('/browse',['uses'=>'AdvertiserController@browse'])->name('browse');
		Route::get('/dashboard',['uses'=>'AdvertiserController@dashboard'])->name('dashboard');
		Route::get('/earning',['uses'=>'AdvertiserController@earning'])->name('earning');
		Route::get('/signup',['uses'=>'AdvertiserController@signup'])->name('signup');
		Route::get('/change-password',['uses'=>'AdvertiserController@changePassword'])->name('change-password');
		Route::get('/chats',['uses'=>'AdvertiserController@chats'])->name('chats');
		Route::get('/create-new-ad-request',['uses'=>'AdvertiserController@createNewAdRequest'])->name('create-new-ad-request');
		Route::get('/my-ads',['uses'=>'AdvertiserController@myAds'])->name('my-ads');
		Route::get('/invites',['uses'=>'AdvertiserController@invites'])->name('invites');
		Route::get('/edit-ad-request',['uses'=>'AdvertiserController@editAdRequest'])->name('edit-ad-request');
		Route::get('/forgot-password',['uses'=>'AdvertiserController@forgotPassword'])->name('forgot-password');
		Route::get('/reset-password/{token}', 'AdvertiserController@getToken');
		Route::get('/reset-password', ['uses'=>'AdvertiserController@resetPassword'])->name('reset-password');
		Route::get('/offers',['uses'=>'AdvertiserController@offers'])->name('offers');
		Route::get('/profile',['uses'=>'AdvertiserController@profile'])->name('profile');
		Route::get('/favorite-advertisers',['uses'=>'AdvertiserController@favoriteAdvertisers'])->name('favorite-advertisers');
		Route::get('/invite-adviertiser',['uses'=>'AdvertiserController@inviteAdviertiser'])->name('invite-adviertiser');
		Route::get('/notifications',['uses'=>'AdvertiserController@notifications'])->name('notifications');
		Route::get('/otp-verify',['uses'=>'AdvertiserController@otpVerify'])->name('otp-verify');
		Route::get('/standing-contract',['uses'=>'AdvertiserController@standingContract'])->name('standing-contract');
		Route::get('/view-contract',['uses'=>'AdvertiserController@viewContract'])->name('view-contract');
		Route::get('/view-details',['uses'=>'AdvertiserController@viewDetails'])->name('view-details');
		Route::get('/web-service',['uses'=>'AdvertiserController@webService'])->name('web-service');


	});
});
/////////////////////////////////////////// FRONT ROUTES ///////////////////////////////////////////
Route::resource('sample', 'ProjectController');