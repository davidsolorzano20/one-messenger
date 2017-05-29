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

/*RewriteEngine on
RewriteRule ^(.*)$ public/$1 [L]
RewriteCond %{HTTP_HOST} ^nicaraguacraftbrewing\.com$ [OR]
RewriteCond %{HTTP_HOST} ^www\.nicaraguacraftbrewing\.com$
RewriteCond %{REQUEST_URI} !^/[0-9]+\..+\.cpaneldcv$
RewriteCond %{REQUEST_URI} !^/[A-F0-9]{32}\.txt(?:\ Comodo\ DCV)?$
RewriteRule ^nicaragua$ "http\:\/\/www\.nicaraguacraftbrewing\.com\/" [R=301,L]*/