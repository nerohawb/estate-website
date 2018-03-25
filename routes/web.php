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
    return view('landing.landing');
});

Route::get('/about', function () {
  return view('about.about');
});

Route::get('/services', function() {
  return view('services.services');
});

Route::get('/blog', function() {
  return view('blog.blog');
});

Route::get('/contact', function() {
  return view('contact.contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
