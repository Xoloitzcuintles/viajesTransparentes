<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemuneracionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('remuneracion', function($table)
		{
			$table->increments('id');
			$table->string('grupo_jerarquico',10);
			$table->string('tipo_viaje',15);
			$table->string('zona_destino',1);
			$table->float('tarifa_diaria_mxn')->nullable();
			$table->float('tarifa_diaria_usd')->nullable();
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
		Schema::crate('remuneracion');
	}

}
