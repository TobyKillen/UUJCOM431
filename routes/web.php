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


// Route::get('/', function () {
//     return view('index');
// });
//
// Route::get('/About', function () {
//     return view('about');
// });
//
// Route::get('/Store', function () {
//     return view('store');
// });
//
// Route::get('/Login', function () {
//     return view('login');
// });
//
// Route::get('/Signup', function () {
//     return view('signup');
// });
//
//
// Route::get('/Contact', function () {
//     return view('contact');
// });


Route::get('/', 'MainController@index');
Route::resource('books', 'BookController');

?>
