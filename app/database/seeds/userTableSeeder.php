<?php

class usertableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();

		UserModel::create(array(
			'givenname' => 'Oskar',
			'lastname' => 'Murand',
			'email' => 'oskar@todolistapp.local',
			'password' => 'password',
		));

		UserModel::create(array(
			'givenname' => 'Karel',
			'lastname' => 'Pirn',
			'email' => 'karel@todolistapp.local',
			'password' => 'monkey',
		));

		UserModel::create(array(
			'givenname' => 'Siiri',
			'lastname' => 'Suss',
			'email' => 'siiri@todolistapp.local',
			'password' => '123123',
		));

	}

}
