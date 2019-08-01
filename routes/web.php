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

Route::get('/','Auth\LoginController@loginform')->name('login');
Route::group([ 'middleware' => 'auth'], function()
{
    // Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/dashboard','DashboardController@index')->name('home');
    // Route::get('/logout','Auth\LoginController@logout')->name('logout');

    //Childeren Information Routes//
    Route::get('parent-list','ChildrenInfoController@index')->name('children.index');
    Route::get('children-info/create','ChildrenInfoController@create')->name('children.create');
    Route::post('children-info/store','ChildrenInfoController@store')->name('children.store');
    Route::get('children-info/edit/{id}','ChildrenInfoController@edit')->name('children.edit');
    Route::post('children-info/update/{id}','ChildrenInfoController@update')->name('children.update');
    Route::get('children-info/delete/{id}','ChildrenInfoController@destroy');
    // Route::get('children-info/preview/{id}','ChildrenInfoController@preview')->name('children.preview');
    //End of Children Information Routes//

    //Vaccination Route//
    Route::post('vaccn-info/filter','VaccinationController@filterSearch');
    Route::get('vaccn-info','VaccinationController@index')->name('vaccination.index');
    Route::get('vaccn-info/create','VaccinationController@create')->name('vaccination.create');
    Route::post('vaccn-info/store','VaccinationController@store')->name('vaccination.store');
    Route::get('vaccn-info/edit/{id}','VaccinationController@edit')->name('vaccination.edit');
    Route::post('vaccn-info/update/{id}','VaccinationController@update')->name('vaccination.update');
    Route::get('vaccin-info/delete/{id}','VaccinationController@delete')->name('vaccination.delete');
    //End of Vaccination Route//

    //Complain Management Route//
    Route::post('complain/filter','ComplainMgmtController@filterSearch');
    Route::get('complain','ComplainMgmtController@index')->name('complain.index');
    Route::get('complain/create','ComplainMgmtController@create')->name('complain.create');
    Route::post('complain/store','ComplainMgmtController@store')->name('complain.store');
    Route::get('complain/edit/{id}','ComplainMgmtController@edit')->name('complain.edit');
    Route::post('complain/update/{id}','ComplainMgmtController@update')->name('complain.update');
    Route::get('complain/delete/{id}','ComplainMgmtController@delete')->name('complain.delete');
    //End of Complain Management route//

    //Report Route//
    Route::get('report','ReportController@index')->name('report.index');
    //End of report route//

});