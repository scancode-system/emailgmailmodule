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

Route::prefix('emailgmail')->middleware('auth')->group(function() {
    Route::post('{order}/send', 'EmailGmailController@send')->name('emailgmail.send');
});


Route::prefix('setting_email_gmail')->middleware('auth')->group(function() {
	Route::put('', 'SettingEmailGmailController@update')->name('setting_email_gmail.update');
});
