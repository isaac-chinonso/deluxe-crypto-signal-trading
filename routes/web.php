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

Route::get('/', 'Frontend\PageController@index');

Route::get('/about', 'Frontend\PageController@about');

Route::get('/FAQ', 'Frontend\PageController@faq');

Route::get('/our-plan', 'Frontend\PageController@plan');

Route::get('/services', 'Frontend\PageController@service');

Route::get('/login', 'Frontend\PageController@login')->name('login');

Route::get('/forget-password', 'Frontend\PageController@resetpassword')->name('forget.password.get');

Route::get('/reset-password/{token}', 'Auth\ResetPasswordController@showResetPasswordForm')->name('reset.password.get');

Route::post('/forget-password', 'Auth\ResetPasswordController@submitForgetPasswordForm')->name('forget.password.post');

Route::post('/reset-password', 'Auth\ResetPasswordController@submitResetPasswordForm')->name('reset.password.post');


Route::get('/register', 'Frontend\PageController@register');

Route::post('/sigin', 'Auth\UserController@signin')->name('signin');

Route::get('/logout', 'Auth\UserController@logout')->name('logout');

Route::post('/savelogin', 'Auth\UserController@savelogin')->name('savelogin');

Route::group(['middleware' => 'auth', 'prefix' => 'user', 'before' => 'user'], function () {

    Route::get('/dashboard', 'User\PageController@dashboard')->name('userdasboard');

    Route::get('/activatesystemuser/{id}', 'Auth\UserController@activatesystemuser')->name('activatesystemuser');

    Route::get('/activate-account', 'User\PageController@activate')->name('activate');

    Route::get('/activation-successful', 'User\PageController@activatesuccess')->name('activatesuccess');

    Route::get('/withdrawal-info', 'User\PageController@withdrawinfo');

    Route::post('/update-btc-withdrawal-info/{id}', 'User\PostController@savebtcinfo')->name('updatebtcwithdrawinfo');

    Route::post('/update-eth-withdrawal-info/{id}', 'User\PostController@saveethinfo')->name('updateethwithdrawinfo');

    Route::post('/update-ada-withdrawal-info/{id}', 'User\PostController@saveadainfo')->name('updateadawithdrawinfo');

    Route::get('/notification', 'User\PageController@notification');

    Route::get('/support', 'User\PageController@support');

    Route::post('/send-support', 'User\PostController@savesupport');

    Route::get('/tradinghistory', 'User\PageController@tradinghistory');

    Route::get('/transactionhistory', 'User\PageController@transactionhistory')->name('usertransactionhistory');

    Route::get('/deposit', 'User\PageController@deposit')->name('userdeposit');

    Route::get('/new-deposit', 'User\PageController@newdeposit');

    Route::post('/save-deposit', 'User\PostController@savedeposit');

    Route::get('/withdraw', 'User\PageController@withdraw');

    Route::post('/request-withdrawal', 'User\PostController@savewithdraw');

    Route::get('/packages', 'User\PageController@plan');

    Route::post('update-password', 'User\SettingController@store')->name('change.password');

    Route::get('/change-password', 'User\SettingController@setting');

});

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'before' => 'admin'], function () {

    Route::get('/dashboard', 'Admin\PageController@dashboard')->name('admindashboard');

    Route::get('/withdraw-info', 'Admin\PageController@withdrawinfo');

    Route::get('/users-info', 'Admin\PageController@users');

    Route::get('/activate-user/{id}', 'Admin\PostController@activateuser')->name('activateuser');

    Route::get('/deactivate-user/{id}', 'Admin\PostController@deactivateuser')->name('deactivateuser');

    Route::get('/pending-deposit', 'Admin\PageController@pendingdeposit');

    Route::get('/approve-deposit/{id}', 'Admin\PostController@approvedeposit')->name('approvedeposit');

    Route::get('/pending-withdrawal', 'Admin\PageController@pendingwithdrawal');

    Route::get('/approve-withdraw/{id}', 'Admin\PostController@approvewithdraw')->name('approvewithdraw');

    Route::get('/confirm-withdrawal', 'Admin\PageController@confirmwithdrawal');

    Route::get('/confirm-deposit', 'Admin\PageController@confirmdeposit');

    Route::get('/support', 'Admin\PageController@support');

});