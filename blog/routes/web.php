<?php

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

Route::get('/', function () {
    return view('home');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/contacts', function(){
	return view('contacts');
});

Route::get('/about', function(){
	return view('about');
});


Route::get('/car_fleets_cars', function(){
	$cars = \App\Cars::all();

	$car_fleets = \App\Car_fleets::all();

	$cars->car_fleets()->attach($car_fleets->id);

	$car_fleets->cars()->attach($cars->id);
});

Route::get('/cars', function(){
	$cars = \App\Cars::with('car_fleets')->get();

	return view('/cars.index', compact('cars'));
});

Route::get('/dashboard', function(){
	$cars = \App\Cars::with('car_fleets')->get();

	return view('/dashboard', compact('cars'));
});

Route::get('/car_fleets', function(){
	$car_fleets = \App\Car_fleets::with('cars')->get();

	return view('/car_fleets.show', compact('car_fleets'));
});


Route::resource('cars', 'CarsController');

Route::resource('car_fleets', 'CarFleetsController');

Route::resource('users', 'UserController');



Route::get('/dashboard', 'DashboardController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
