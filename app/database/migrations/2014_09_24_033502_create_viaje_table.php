<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViajeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('viaje', function($table)
		{
			$table->increments('id');
	        $table->longText('ur');
	        $table->text('tipo_rep',45);
	        $table->text('consecutivo',45);
	        $table->integer('servidor_id');
			$table->text('tipo_viaje',45);
			$table->text('acuerdo',90);
			$table->text('oficio',45);
	        $table->float('tarifa_diaria');
	        $table->text('moneda',15);
	        $table->integer('tema_id');
	        $table->integer('tipo_comision_id');
	        $table->integer('mecanismo_origen_id');
	        $table->integer('inst_genera_id');
	        $table->date('fecha_inicio_part');
	        $table->date('fecha_fin_part');
	        $table->longText('motivo');
	        $table->longText('antecedente');
	        $table->longText('actividad');
	        $table->longText('resultado');
	        $table->longText('contribucion_ifai');
	        $table->longText('observaciones');
	        $table->text('url_comunicado',255);
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
		Schema::drop('viaje');
	}

}
