<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('givenname', 50);
			$table->string('lastname', 50);
			$table->string('email', 50);
			$table->string('password', 60);
			$table->string('password_temp')->nullable();
			$table->string('resetcode')->nullable();
			$table->tinyInteger('isActive')->nullable()->default(1);
			$table->tinyInteger('isDel')->nullable();
			$table->timestamp('last_login')->nullable();
			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
