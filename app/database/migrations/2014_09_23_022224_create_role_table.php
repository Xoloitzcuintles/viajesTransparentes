<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roles', function($table)
	    {
	        $table->increments('id');
	        $table->string('role', 15)->unique();
	    });
	    DB::table('roles')->insert(array(
		    array('role' => 'admin'),
		    array('role' => 'servidor'),
		    array('role' => 'ciudadano'),
		));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
