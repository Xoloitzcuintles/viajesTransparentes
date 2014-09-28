<?php

class MecanismoOrigenTableSeeder extends Seeder {

    public function run()
    {
        DB::table('mecanismo_origen')->delete();

		MecanismoOrigen::create(array('name'=>'Requerimiento de UR'));
		MecanismoOrigen::create(array('name'=>'Invitación'));
		MecanismoOrigen::create(array('name'=>'No Disponible'));

	}
}

