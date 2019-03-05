<?php
Route::get('/',function(){
  return redirect()->route('login');
});

Route::group(['middleware' => 'auth'], function(){
	Route::get('/user', function(){
		return view('page.user');
	})->middleware('user')->name('user');

	Route::get('/admin', function(){
		return view('page.admin');
	})->middleware('admin')->name('admin');
});

//auth laravel
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
