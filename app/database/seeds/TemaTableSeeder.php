<?php

class TemaTableSeeder extends Seeder {

    public function run()
    {
        DB::table('tema')->delete();

        Tema::create(array('name'=>'VINCLACION CON ESTADOS Y MUNICIPIOS'));
        Tema::create(array('name'=>'POLÍTICAS DE ACCESO A LA INFORMACIÓN'));
        Tema::create(array('name'=>'Vinculación con Estados y Municipios'));
        Tema::create(array('name'=>'Supervisión; Vigilancia; Verificación y Sanciones'));
        Tema::create(array('name'=>'Capacitación y Cultura de la Transparencia'));
        Tema::create(array('name'=>'Normatividad de Datos Personales'));
        Tema::create(array('name'=>'Asuntos Internacionales'));
        Tema::create(array('name'=>'Supervision, Vigilancia, Verificacion y Sanciones'));
        Tema::create(array('name'=>'Vinculacion con Estados y Municipios'));
        Tema::create(array('name'=>'Capacitacion y Cultura de la Transparencia'));
        Tema::create(array('name'=>'Proteccion de Datos'));
    }

}
