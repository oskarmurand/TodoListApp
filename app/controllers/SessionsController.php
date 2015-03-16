<?php

class SessionsController extends \BaseController {


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// Validate
		$input = Input::all();

		$attempt = Auth::attempt([
			'email' => $input['email'],
			'password' => $input['password']
			]);

		if ($attempt) return Redirect::intended('/')->with('flash_message', 'You have been logged in!')->with('flash_message_color', 'alert-success');

		return Redirect::back()->with('flash_message', 'Invalid credentials!')->withInput()->with('flash_message_color', 'alert-danger');
	}





	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();
		return Redirect::intended('login')->with('flash_message', 'You have been logged out!')->with('flash_message_color', 'alert-info');
	}


}
