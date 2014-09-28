<?php

class InstGeneraTableSeeder extends Seeder {

    public function run()
    {
        DB::table('inst_genera')->delete();

		InstGenera::create(array('name'=>'DIRECCIÓN GENERAL DE CAPACITACIÓN; PROMOCIÓN Y RELACIONES INSTITUCIONALES'));
		InstGenera::create(array('name'=>'Comisión Estatal para la Transparencia y el Acceso a la Información pública de Durango y la COMAIP'));
		InstGenera::create(array('name'=>'Instituto Nacional para el Federalismo y el Desarrollo municipal y el Gobierno del Estado de Puebla'));
		InstGenera::create(array('name'=>'COMAIP'));
		InstGenera::create(array('name'=>'Área General de Asuntos Jurídicos'));
		InstGenera::create(array('name'=>'No disponible'));
		InstGenera::create(array('name'=>'Hospital Civil de Guadalajara'));
		InstGenera::create(array('name'=>'Secretaría Ejecutiva'));
		InstGenera::create(array('name'=>'Casa del Migrante de Saltillo'));
		InstGenera::create(array('name'=>'Secretaría de Protección de Datos'));
		InstGenera::create(array('name'=>'Conferencia Internacional de Autoridades de Protección de Datos y Privacidad'));
		InstGenera::create(array('name'=>'El Presidente del Consejo para la Transparencia; extendió una invitación al Comisionado Presidente GLR'));
		InstGenera::create(array('name'=>'Secretaría General'));
		InstGenera::create(array('name'=>'Universidad Autónoma de Puebla'));
		InstGenera::create(array('name'=>'Canacintra'));
		InstGenera::create(array('name'=>'Dirección Genereal de Verificación'));
		InstGenera::create(array('name'=>'Direccion General de Asuntos Juridicos'));
		InstGenera::create(array('name'=>'Instituto de Transparencia y Acceso a la Informacion Publica del Estado de Nayarit'));
		InstGenera::create(array('name'=>'IACIP'));
		InstGenera::create(array('name'=>'Direccion General de Capacitacion; Promocion y Relaciones Institucionales'));
		InstGenera::create(array('name'=>'eCOM-LAC'));
		InstGenera::create(array('name'=>'CEFAB'));
		InstGenera::create(array('name'=>'Organo Interno de Control'));
		InstGenera::create(array('name'=>'Dirreccion General de Capacitacion; Promociones y Relaciones Institucionales'));
		InstGenera::create(array('name'=>'Direccion General de Comunicación Social y Difusion'));

	}
}