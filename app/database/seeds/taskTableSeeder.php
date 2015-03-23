<?php

class taskTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('tasks')->delete();

		task::create(array(
			'task' => 'Pet the cats',
			'description' => 'Make sure they are purring.'
		));

		task::create(array(
			'task' => 'Clean up room',
			'description' => 'Take out the trash.'
		));

		task::create(array(
			'task' => 'Study Chinese',
			'description' => 'Learn how to order a mail order bride.'
		));
		task::create(array(
			'task' => 'Wash the dog',
			'description' => 'Dont get wet or fleas.'
		));
	}

}
