<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCiudadOrigenDestinoToPasaje extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pasaje', function(Blueprint $table)
		{
			$table->integer('ciudad_origen_id');
			$table->integer('ciudad_destino_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pasaje', function(Blueprint $table)
		{
			$table->integer('ciudad_origen_id');
			$table->integer('ciudad_destino_id');
		});
	}

}
