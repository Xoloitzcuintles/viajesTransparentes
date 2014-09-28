<?php

class UnidadAdministrativaTableSeeder extends Seeder {

    public function run()
    {
        DB::table('unidadAdministrativa')->delete();

	    UnidadAdministrativa::create(array('nombre'=>'AUXILIAR DE COORDINACION'));
		UnidadAdministrativa::create(array('nombre'=>'Comisionado'));
		UnidadAdministrativa::create(array('nombre'=>'DIRECCIÓN GENERAL DE AUTORREGULACIÓN'));
		UnidadAdministrativa::create(array('nombre'=>'DIRECCIÓN GENERAL DE TECNOLOGÍAS DE LA INFORMACIÓN'));
		UnidadAdministrativa::create(array('nombre'=>'DIRECCIÓN GENERAL DE VERIFICACIÓN'));
		UnidadAdministrativa::create(array('nombre'=>'DIRECCIÓN GENERAL DE ANÁLISIS NORMATIVO Y EVALUACIÓN DE LA INFORMACIÓN'));
		UnidadAdministrativa::create(array('nombre'=>'SECRETARÍA DE ACCESO A LA INFORMACIÓN'));
		UnidadAdministrativa::create(array('nombre'=>'DIRECCIÓN GENERAL DE ASUNTOS INTERNACIONALES'));
		UnidadAdministrativa::create(array('nombre'=>'DIRECCIÓN GENERAL DE COORDINACIÓN Y VIGILANCIA DE LA ADMINISTRACIÓN PÚBLICA FEDERAL'));
		UnidadAdministrativa::create(array('nombre'=>'DIRECCIÓN GENERAL DE GESTION DE LA INFORMACIÓN Y ESTUDIOS'));
		UnidadAdministrativa::create(array('nombre'=>'DIRECCIÓN GENERAL DE CAPACITACIÓN  PROMOCIÓN Y RELACIONES INSTITUCIONALES'));
		UnidadAdministrativa::create(array('nombre'=>'DIRECCIÓN GENERAL DE ADMINISTRACIÓN'));
		UnidadAdministrativa::create(array('nombre'=>'DIRECCIÓN GENERAL DE NORMATIVIDAD CONSULTA Y ATENCIÓN REGIONAL'));
		UnidadAdministrativa::create(array('nombre'=>'SECRETARÍA DE PROTECCIÓN DE DATOS PERSONALES'));
		UnidadAdministrativa::create(array('nombre'=>'PLENO'));
		UnidadAdministrativa::create(array('nombre'=>'DIRECCIÓN GENERAL DE COORDINACIÓN DE POLÍTICAS DE ACCESO'));
		UnidadAdministrativa::create(array('nombre'=>'DIRECCIÓN GENERAL DE SUSTANCIACIÓN Y SANCIÓN'));
		UnidadAdministrativa::create(array('nombre'=>'SECRETARÍA GENERAL'));
		UnidadAdministrativa::create(array('nombre'=>'SECRETARÍA TÉCNICA DEL PLENO'));
		UnidadAdministrativa::create(array('nombre'=>'DIRECCIÓN GENERAL DE COMUNICACIÓN SOCIAL Y DIFUSIÓN'));
		UnidadAdministrativa::create(array('nombre'=>'DIRECCIÓN GENERAL DE ASUNTOS JURÍDICOS'));
    }

}