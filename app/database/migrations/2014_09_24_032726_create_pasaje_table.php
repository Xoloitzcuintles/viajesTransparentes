<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasajeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pasaje', function($table)
		{
			$table->increments('id');
	        $table->text('cubre_pasaje',255);
	        $table->text('tipo_pasaje',45);
	        $table->text('numero_viaje',45);
	        $table->date('fecha');
	        $table->float('gasto');
	        $table->string('tipo',45);
	        $table->integer('compania_id');
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
		Schema::drop('pasaje');
	}

}
