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
  return redirect()->Route('login.index');
});


Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@verify')->name('login.verify');

Route::post('/logout','LogoutController@index')->name('logout.index');
Route::get('/logout','LogoutController@index')->name('logout.index');

Route::get('/home','HomeController@index')->name('home.index');
Route::post('/home','HomeController@index')->name('home.index');

Route::get('/accounts','AccountController@index')->name('account.index');
Route::get('/accounts/details/{id}','AccountController@details')->name('account.details');
Route::get('/accounts/create','AccountController@create')->name('account.create');
Route::post('/accounts/create','AccountController@store')->name('account.store');

Route::get('/accounts/edit/{id}','AccountController@edit')->name('account.edit');
Route::post('/accounts/edit/{id}','AccountController@update')->name('account.update');


Route::get('/accounts/delete/{id}','AccountController@delete')->name('account.delete');
Route::post('/accounts/delete/{id}','AccountController@destroy')->name('account.destroy');


//Route::resource('/accTypes','AccTypesController');


// Route::get('/testt',function(){
//   return view('testt.hola');
// });
//
// //Route::get('/home','testNameController@userName');
//
// //naming a route with array, in 'as' u will save the route name u want to print
// Route::get('/home',['as'=>'testNC.userName','uses'=>'testNameController@userName']);
//
// //naming a route with name
// Route::get('/student','StudentController@index')->name('student.index');
//
//
// Route::post('/student/display','StudentController@display');
// Route::get('/student/details/{idd}/{name}','StudentController@details');
//
// Route::get('/student/list','StudentController@studentList')->name('student.studentList');
// Route::get('/student/edit/{identity}','StudentController@studentEdit')->name('student.studenttEdit');// edit a error martase eida dekh
//
// /*
// Route::get('users',['uses' =>'UserController@index']);
// Route::get('users/create',['uses' => 'UserController@create']);
// Route::post('users',['uses'=>'UserController@strore']);
// Route::get('users', function () {
//
//     $users = [
//       '0' => [
//         'name'=>'zia',
//       ],
//       '1' => [
//         'name'=>'zayed',
//         'age'=>'18'
//       ],
//     ];
//     return $users;
// });
// */
