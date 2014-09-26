<?php

class PuestoTableSeeder extends Seeder {

    public function run()
    {
        DB::table('puestos')->delete();

        Puesto::create(array('id'=>1,'nombre'=>' COMISIONADO'));
		Puesto::create(array('id'=>2,'nombre'=>' DIRECCION GENERAL DE ADMINISTRACION'));
		Puesto::create(array('id'=>3,'nombre'=>' DIRECCION GENERAL DE ANALISIS NORMATIVO Y EVALUACION DE LA INFORMACION'));
		Puesto::create(array('id'=>4,'nombre'=>' DIRECCION GENERAL DE ASUNTOS INTERNACIONALES'));
		Puesto::create(array('id'=>5,'nombre'=>' DIRECCION GENERAL DE ASUNTOS JURIDICOS'));
		Puesto::create(array('id'=>6,'nombre'=>' DIRECCION GENERAL DE AUTORREGULACION'));
		Puesto::create(array('id'=>7,'nombre'=>' DIRECCION GENERAL DE CAPACITACION PROMOCION Y RELACIONES INSTITUCIONALES'));
		Puesto::create(array('id'=>8,'nombre'=>' DIRECCION GENERAL DE COMUNICACION SOCIAL Y DIFUSION'));
		Puesto::create(array('id'=>9,'nombre'=>' DIRECCION GENERAL DE COORDINACION DE POLITICAS DE ACCESO'));
		Puesto::create(array('id'=>10,'nombre'=>' DIRECCION GENERAL DE COORDINACION Y VIGILANCIA DE LA ADMINISTRACION PUBLICA FEDERAL'));
		Puesto::create(array('id'=>11,'nombre'=>' DIRECCION GENERAL DE GESTION DE LA INFORMACION Y ESTUDIOS'));
		Puesto::create(array('id'=>12,'nombre'=>' DIRECCION GENERAL DE NORMATIVIDAD CONSULTA Y ATENCION REGIONAL'));
		Puesto::create(array('id'=>13,'nombre'=>' DIRECCION GENERAL DE SUSTANCIACION Y SANCION'));
		Puesto::create(array('id'=>14,'nombre'=>' DIRECCION GENERAL DE TECNOLOGIAS DE LA INFORMACION'));
		Puesto::create(array('id'=>15,'nombre'=>' DIRECCION GENERAL DE VERIFICACION'));
		Puesto::create(array('id'=>16,'nombre'=>' PLENO'));
		Puesto::create(array('id'=>17,'nombre'=>' SECRETARIA DE ACCESO A LA INFORMACION'));
		Puesto::create(array('id'=>18,'nombre'=>' SECRETARIA DE PROTECCION DE DATOS PERSONALES'));
		Puesto::create(array('id'=>19,'nombre'=>' SECRETARIA GENERAL'));
		Puesto::create(array('id'=>20,'nombre'=>' SECRETARIA TECNICA DEL PLENO'));
    }

}