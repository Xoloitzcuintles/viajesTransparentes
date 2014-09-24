<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cargos', function($table)
	    {
	        $table->increments('id');
	        $table->string('nombre',90);
	        $table->string('clave',45);
			$table->integer('cargo_id')->default(null)->nullable();
	    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cargos');
	}

}
