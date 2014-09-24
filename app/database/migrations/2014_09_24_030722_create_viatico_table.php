<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViaticoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('viatico', function($table)
		{
			$table->increments('id');
	        $table->float('gasto');
	        $table->float('comprobado');
	        $table->float('sin_comprobar');
	        $table->float('devuelto');
	        $table->string('descripcion',255);
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
		Schema::drop('viatico');
	}

}
