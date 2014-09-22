<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServidoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servidores', function($table)
	    {
	        $table->increments('id');
	        $table->string('nombre', 90);
	        $table->string('apellidoPaterno', 90);
	        $table->string('apellidoMaterno', 90);
	        $table->string('correoElectronico', 255);
	        $table->integer('puesto_id');
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
		Schema::drop('servidores');
	}

}
