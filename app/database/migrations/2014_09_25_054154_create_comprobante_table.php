<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprobanteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comprobante', function($table)
		{
			$table->increments('id');
			$table->date('fecha');
			$table->string('concepto',90);
			$table->float('importe');
			$table->integer('justificacion');
			$table->timestamps();
		});
		Schema::create('viatico_comprobante', function($table)
		{
			$table->increments('id');
			$table->integer('viatico_id');
			$table->integer('comprobante_id');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comprobante');
		Schema::drop('viatico_comprobante');
	}

}
