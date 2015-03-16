<?php

class taskTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('tasks')->delete();

		task::create(array(
			'author' => 'Chris Sevilleja',
			'text' => 'Look I am a test task.'
		));

		task::create(array(
			'author' => 'Nick Cerminara',
			'text' => 'This is going to be super crazy.'
		));

		task::create(array(
			'author' => 'Holly Lloyd',
			'text' => 'I am a master of Laravel and Angular.'
		));
	}

}
