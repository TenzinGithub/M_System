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


Route::get('/table', function () {
    return view('table');
});

Route::get('about',[
    'as' => 'about', 
    'uses' => 'PagesController@getAbout'
]);


Route::get('contact',[
    'as' => 'contact', 
'uses' => 'PagesController@getContact'
]);


Route::get('staffinfo',[
    'as' => 'staffinfo', 
'uses' => 'PagesController@getStaffinfo'
]);

Route::get('studentinfo',[
    'as' => 'studentinfo', 
'uses' => 'PagesController@getStudentinfo'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
