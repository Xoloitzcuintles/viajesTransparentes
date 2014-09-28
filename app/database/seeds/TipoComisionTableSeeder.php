<?php

class TipoComisionTableSeeder extends Seeder {

    public function run()
    {
        DB::table('tipo_comision')->delete();

		TipoComision::create(array('name'=>'Participación en evento público'));
		TipoComision::create(array('name'=>'Reunión de trabajo'));
		TipoComision::create(array('name'=>'Asuntos legales'));
		TipoComision::create(array('name'=>'Impartir conferencia'));
		TipoComision::create(array('name'=>'Impartir capacitación'));
		TipoComision::create(array('name'=>'Notificación'));
		TipoComision::create(array('name'=>'Recibir capacitación'));
		TipoComision::create(array('name'=>'Verificación'));
		TipoComision::create(array('name'=>'Seguimiento a averiguacion previa'));
		TipoComision::create(array('name'=>'Participar como Testigo de honor en convenio de colaboracion'));
		TipoComision::create(array('name'=>'Asistencia a capacitador'));
		TipoComision::create(array('name'=>'Participacion en evento publico'));
		TipoComision::create(array('name'=>'Impartir capacitacion'));
		TipoComision::create(array('name'=>'Logistica'));
		TipoComision::create(array('name'=>'Recibir capacitacion'));
		TipoComision::create(array('name'=>'Cobertura informativa'));

    }

}
