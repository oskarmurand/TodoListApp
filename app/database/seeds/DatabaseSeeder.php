<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('taskTableSeeder');
		$this->command->info('tasks table seeded.');
		$this->call('userTableSeeder');
		$this->command->info('users table seeded.');
	}

}
