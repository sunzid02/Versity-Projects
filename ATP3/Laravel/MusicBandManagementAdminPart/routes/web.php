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

/*Route::get('/band', function () {
    //return resource_path('views');
    return redirect()->route('login.index');

});*/

Route::get('/', function () {
    //return resource_path('views');
    return redirect()->route('login.index');

});

//Route::get('/band');
//############################ Band ##########################################################################################

Route::get('/band/login','LoginController@index')->name('login.index');
Route::post('/band/login','LoginController@verify')->name('login.verify');

Route::get('/band/logout','LogoutController@index')->name('logout.index');

Route::get('/band/login/home','HomeController@index')->name('home.index');

Route::get('/band/login/bandd','bandController@index')->name('band.index');

Route::get('/band/login/bandd/add','bandController@create')->name('band.create');
Route::post('/band/login/bandd/add','bandController@insert')->name('band.insert');

Route::get('/band/login/bandd/edit/{bid}','bandController@edit')->name('band.edit');
Route::post('/band/login/bandd/edit/{bid}','bandController@update')->name('band.update');

Route::get('/band/login/bandd/delete/{bid}','bandController@delete')->name('band.delete');
Route::post('/band/login/bandd/delete/{bid}','bandController@destroy')->name('band.destroy');

//############################ Concert ##########################################################################################
Route::get('/band/login/bandd/concert','bandController@lpconcert')->name('band.lpconcert');

Route::get('/band/login/bandd/concert/{bandName}','ConcertController@create')->name('concert.create');
Route::post('/band/login/bandd/concert/{bandName}','ConcertController@insert')->name('concert.insert');

Route::get('/band/login/bandd/concert/edit/{concertNo}','ConcertController@edit')->name('concert.edit');
Route::post('/band/login/bandd/concert/edit/{concertNo}','ConcertController@update')->name('concert.update');

Route::get('/band/login/bandd/concert/delete/{concertNo}','ConcertController@delete')->name('concert.delete');
Route::post('/band/login/bandd/concert/delete/{concertNo}','ConcertController@destroy')->name('concert.destroy');

//############################ Report ##########################################################################################
Route::get('/band/login/report', 'ReportController@index')->name('report.index');


//############################ Protik Starts ##########################################################################################

Route::get('/band/login/bandd/linkinpark/concert/ticket/{cid}', 'TicketController@index')->name('ticket.book');
Route::post('/band/login/bandd/linkinpark/concert/ticket/{cid}', 'TicketController@store')->name('ticket.store');

Route::get('/band/login/bandd/linkinpark/concert/ticket/print/{mob}', 'TicketController@print')->name('ticket.print');
