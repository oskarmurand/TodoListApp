<?php

// =============================================
// HOME PAGE ===================================
// =============================================
Route::get('/', function()
{
	return View::make('index');
})->before('auth');

Route::get('index', function()
{
	return View::make('index');
})->before('auth');


// =============================================
// REGISTRATION PAGE ===========================
// =============================================

Route::get('register', 'RegistrationController@create');
Route::resource('registration', 'RegistrationController');

// =============================================
// AUTHENTICATION PAGE =========================
// =============================================
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController');

// =============================================
// POFILE PAGE =================================
// =============================================
/*Route::get('profile', function()
{
	return "Welcome. Your email address is " . Auth::user()->email;
})->before('auth');*/

// =============================================
// =============================================
// API ROUTES ==================================
// =============================================
// =============================================
Route::group(array('prefix' => 'api'), function() {

	// since we will be using this just for CRUD, we won't need create and edit
	// Angular will handle both of those forms
	// this ensures that a user can't access api/create or api/edit when there's nothing there
	Route::resource('tasks', 'taskController',
		array('except' => array('create', 'edit', 'update')));
});

// =============================================
// CATCH ALL ROUTE =============================
// =============================================
// all routes that are not home or api will be redirected to the frontend
// this allows angular to route them
/* App::missing(function($exception)
{
	return View::make('index');
}); */
