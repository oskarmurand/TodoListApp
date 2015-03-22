<?php

class taskController extends \BaseController {

	/**
	 * Send back all tasks as JSON
	 *
	 * @return Response
	 */
	public function index()
	{
		return Response::json(task::get());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		task::create(array(
			'task' => Input::get('task'),
			'description' => Input::get('description')
		));

		return Response::json(array('success' => true));
	}


	/**
	 * Return the specified resource using JSON
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Response::json(task::find($id));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		task::destroy($id);
		return Response::json(task::find($id));
		//return Response::json(array('success' => true));
	}


}
