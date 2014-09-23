<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUnidadAdministrativaToServidores extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('servidores', function(Blueprint $table)
		{
			$table->integer('unidad_administrativa_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('servidores', function(Blueprint $table)
		{
			//
		});
	}

}
