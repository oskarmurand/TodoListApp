<?php

class RegistrationController extends \BaseController {

	/**
	* Registration form
	*
	* @var RegistrationForm
	*/
	/*private $registrationForm;

	function __construct(RegistrationForm $registrationForm)
	{
		$this->registrationForm = $registrationForm;
	}*/

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('registration.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('registration.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$user = UserModel::create(Input::only('givenname', 'lastname', 'email', 'password'));

		Auth::login($user);

		return Redirect::intended('/');

		//====================================================//

    // process the form here

    // create the validation rules ------------------------
    /*$rules = array(
        //'name'             => 'required',                        // just a normal required validation
        'email'            => 'required|email|unique:users',     // required and must be unique in the users table
        'password'         => 'required',
        'password_confirm' => 'required|same:password'           // required and has to match the password field
    );

    // do the validation ----------------------------------
    // validate against the inputs from our form
    $validator = Validator::make(Input::all(), $rules);

    // check if the validator failed -----------------------
    if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('register')
            ->withErrors($validator);

    } else {
        // validation successful ---------------------------

				$user = UserModel::create(Input::only('email', 'password'));

				Auth::login($user);

				return Redirect::intended('/');

    }*/
	}




	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('registration.show');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('registration.edit');
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
	public function destroy($id)
	{
		//
	}


}
