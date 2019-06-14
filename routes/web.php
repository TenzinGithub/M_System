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

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/table', function () {
    return view('table');
});

Route::get('about',[
    'as' => 'about', 
    'uses' => 'PagesController@getAbout'
]);
Route::get('missionvission',[
    'as' => 'missionvission', 
'uses' => 'PagesController@getMissionvission'
]);

Route::get('teachingstaffinfo',[
    'as' => 'teachingstaffinfo', 
'uses' => 'PagesController@getTeachingstaffinfo'
]);

Route::get('non-teachingstaffinfo',[
    'as' => 'non-teachingstaffinfo', 
'uses' => 'PagesController@getNon-teachingstaffinfo'
]);

Route::get('boardingstudent',[
    'as' => 'boardingstudent', 
'uses' => 'PagesController@getBoardingstudent'
]);

Route::get('dayschoolstudent',[
    'as' => 'dayschoolstudent', 
'uses' => 'PagesController@getDayschoolstudent'
]);


Route::get('announcement',[
    'as' => 'announcement', 
'uses' => 'PagesController@getAnnouncement'
]);
Route::get('gallery',[
    'as' => 'gallery', 
'uses' => 'PagesController@getGallery'
]);

Route::get('contact',[
    'as' => 'contact', 
'uses' => 'PagesController@getContact'
]);



