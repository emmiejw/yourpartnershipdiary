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

use App\Http\Controllers\alertDiary;
use App\Admin;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['web']], function () {

    Auth::routes();

    Route::get('/', function() {
        return redirect('/register');
    });

    Route::resource('/diaries', 'alertDiaryController');

    Route::get('/help', 'HelpController@help')->name('help');

    Route::get('/report', 'ReportController@index')->name('report');

        Route::group(['middleware'=>'admin'], function(){

            Route::get('/admin', 'AdminController@index')->name('admin.dashboard');

            Route::get('/admin/diary', 'AdminController@diary')->name('client.report');

            Route::get('/admin/diary/{user_id}', 'AdminController@search')->name('search');

            Route::resource('/admin/trials', 'TrialsController');

            Route::get('/admin/trials/{dog_name}/report', 'trialsReportController@index')->name('trial.report');

            Route::resource('/admin/users', 'userController');

//            Route::get('/admin/users', 'usersController@index')->name('clients');
//
//            Route::get('/admin/users/{id}/edit', 'usersController@edit')->name('clients.edit');


        });

});
