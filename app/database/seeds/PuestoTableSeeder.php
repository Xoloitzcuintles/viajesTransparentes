<?php

class PuestoTableSeeder extends Seeder {

    public function run()
    {
        DB::table('puestos')->delete();

		Puesto::create(array('nombre'=>'SECRETARIO PARTICULAR DE PONENCIA', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'MC03')->first()->id));
		Puesto::create(array('nombre'=>'JEFE DE DEPARTAMENTO', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'OC1')->first()->id));
		Puesto::create(array('nombre'=>'SUBDIRECTOR DE AREA', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'NC1')->first()->id));
		Puesto::create(array('nombre'=>'DIRECTOR DE AREA', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'MC2')->first()->id));
		Puesto::create(array('nombre'=>'SUBDIRECTOR DE AREA', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'NC2')->first()->id));
		Puesto::create(array('nombre'=>'DIRECTOR DE AREA', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'MC1')->first()->id));
		Puesto::create(array('nombre'=>'ENLACE', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'PC2')->first()->id));
		Puesto::create(array('nombre'=>'ENLACE', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'PC3')->first()->id));
		Puesto::create(array('nombre'=>'DIRECTOR GENERAL', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'KB1')->first()->id));
		Puesto::create(array('nombre'=>'SUBDIRECTOR DE AREA', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'NC3')->first()->id));
		Puesto::create(array('nombre'=>'JEFE DE DEPARTAMENTO', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'OC2')->first()->id));
		Puesto::create(array('nombre'=>'ENLACE', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'PC1')->first()->id));
		Puesto::create(array('nombre'=>'ENLACE', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'PA3')->first()->id));
		Puesto::create(array('nombre'=>'JEFE DE DEPARTAMENTO', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'OC3')->first()->id));
		Puesto::create(array('nombre'=>'JEFE DE DEPARTAMENTO', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'OB2')->first()->id));
		Puesto::create(array('nombre'=>'DIRECTOR GENERAL', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'KB2')->first()->id));
		Puesto::create(array('nombre'=>'ENLACE', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'PA1')->first()->id));
		Puesto::create(array('nombre'=>'COORDINADOR', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'KA2')->first()->id));
		Puesto::create(array('nombre'=>'SUBDIRECTOR DE AREA', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'NA1')->first()->id));
		Puesto::create(array('nombre'=>'CONTRALOR', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'KA02')->first()->id));
		Puesto::create(array('nombre'=>'COMISIONADO PRESIDENTE / COMISIONADOS', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'HB1')->first()->id));
		Puesto::create(array('nombre'=>'DIRECTOR GENERAL', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'KB3')->first()->id));
		Puesto::create(array('nombre'=>'ENLACE DE PONENCIA / PROYECTISTA', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'OC02')->first()->id));
		Puesto::create(array('nombre'=>'JEFE DE DEPARTAMENTO DE PONENCIA', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'NB3')->first()->id));
		Puesto::create(array('nombre'=>'SUBDIRECTOR DE PONENCIA', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'MB2')->first()->id));
		Puesto::create(array('nombre'=>'SECRETARIO DE ACUERDOS Y PONENCIA / DIRECTOR DE PONENCIA', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'MC3')->first()->id));
		Puesto::create(array('nombre'=>'CHOFER', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'OB02')->first()->id));
		Puesto::create(array('nombre'=>'SECRETARIA', 'remuneracion_id'=>Remuneracion::where('grupo_jerarquico', '=', 'OC002')->first()->id));

    }

}
