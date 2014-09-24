<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospedajeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hospedaje', function($table)
		{
			$table->increments('id');
	        $table->date('fecha_inicio');
	        $table->date('fecha_fin');
	        $table->string('inst_hospedaje','90');
	        $table->float('costo');
	        $table->string('hotel',255);
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
		Schema::drop('hospedaje');
	}

}
