<?php

class ViajeTableSeeder extends Seeder {

    public function run()
    {
        DB::table('viaje')->delete();

        $viaje = Viaje::create(array('ur'=>'Dirección General de Capacitación; Promoción y Relaciones Institucionales',
							'tipo_rep'=>'Alto nivel',
							'consecutivo'=>'2013.N.0013',
							'servidor_id'=>'1',
							'tipo_viaje'=>'Nacional',
							'acuerdo'=>'No disponible',
							'oficio'=>'IFAI/SG/043/2013',
							'moneda'=>'MXN',
							'tema_id'=>'1',
							'tipo_comision_id'=>'1',
							'mecanismo_origen_id'=>'1',
							'inst_genera_id'=>'1',
							'fecha_inicio_part'=>'2014-10-01',
							'fecha_fin_part'=>'2014-10-05',
							'motivo'=>'Motivo del viaje',
							'antecedente'=>'Antecedentes para realizar el viaje',
							'actividad'=>'Actividad realizada en el viaje',
							'resultado'=>'Resultado del viaje',
							'contribucion_ifai'=>'Como contribuye al IFAI este viaje',
							'observaciones'=>'Las observaciones del viaje',
							'url_comunicado'=>'http://www.ejemplo.com',));
        $viaje->eventos()->attach('1');

        $viaje = Viaje::create(array('ur'=>'Dirección General de Tecnologías de la Información',
							'tipo_rep'=>'Técnico',
							'consecutivo'=>'2013.N.0009',
							'servidor_id'=>'1',
							'tipo_viaje'=>'Nacional',
							'acuerdo'=>'No disponible',
							'oficio'=>'IFAI/DGAJ/055/13',
							'moneda'=>'MXN',
							'tema_id'=>'2',
							'tipo_comision_id'=>'1',
							'mecanismo_origen_id'=>'2',
							'inst_genera_id'=>'2',
							'fecha_inicio_part'=>'2014-09-15',
							'fecha_fin_part'=>'2014-09-17',
							'motivo'=>'Motivo del viaje',
							'antecedente'=>'Antecedentes para realizar el viaje',
							'actividad'=>'Actividad realizada en el viaje',
							'resultado'=>'Resultado del viaje',
							'contribucion_ifai'=>'Como contribuye al IFAI este viaje',
							'observaciones'=>'Las observaciones del viaje',
							'url_comunicado'=>'http://www.ejemplo.com',));
        $viaje->eventos()->attach('2');

        $viaje = Viaje::create(array('ur'=>'COMAIP',
							'tipo_rep'=>'Alto nivel',
							'consecutivo'=>'2013.N.0001',
							'servidor_id'=>'2',
							'tipo_viaje'=>'Nacional',
							'acuerdo'=>'No disponible',
							'oficio'=>'IFAI/ATZ/001/2013',
							'moneda'=>'MXN',
							'tema_id'=>'3',
							'tipo_comision_id'=>'2',
							'mecanismo_origen_id'=>'1',
							'inst_genera_id'=>'6',
							'fecha_inicio_part'=>'2013-01-01',
							'fecha_fin_part'=>'2013-01-07',
							'motivo'=>'Motivo del viaje',
							'antecedente'=>'Antecedentes para realizar el viaje',
							'actividad'=>'Actividad realizada en el viaje',
							'resultado'=>'Resultado del viaje',
							'contribucion_ifai'=>'Como contribuye al IFAI este viaje',
							'observaciones'=>'Las observaciones del viaje',
							'url_comunicado'=>'http://www.ejemplo.com',));
        $viaje->eventos()->attach('3');

        $viaje = Viaje::create(array('ur'=>'Área General de Asuntos Jurídicos',
							'tipo_rep'=>'Alto nivel',
							'consecutivo'=>'2013.N.0007',
							'servidor_id'=>'3',
							'tipo_viaje'=>'Internacional',
							'acuerdo'=>'No disponible',
							'oficio'=>'IFAI/SG-008/13',
							'moneda'=>'USD',
							'tema_id'=>'4',
							'tipo_comision_id'=>'6',
							'mecanismo_origen_id'=>'2',
							'inst_genera_id'=>'5',
							'fecha_inicio_part'=>'2014-08-01',
							'fecha_fin_part'=>'2014-08-05',
							'motivo'=>'Motivo del viaje',
							'antecedente'=>'Antecedentes para realizar el viaje',
							'actividad'=>'Actividad realizada en el viaje',
							'resultado'=>'Resultado del viaje',
							'contribucion_ifai'=>'Como contribuye al IFAI este viaje',
							'observaciones'=>'Las observaciones del viaje',
							'url_comunicado'=>'http://www.ejemplo.com',));
        $viaje->eventos()->attach('4');

        $viaje = Viaje::create(array('ur'=>'Área General de Asuntos Jurídicos',
							'tipo_rep'=>'Alto nivel',
							'consecutivo'=>'2012.I.0001',
							'servidor_id'=>'4',
							'tipo_viaje'=>'Internacional',
							'acuerdo'=>'ACT-PUB/15/08/2012.04.06',
							'oficio'=>'IFAI/SG/DGCPRI/079/2013',
							'moneda'=>'USD',
							'tema_id'=>'5',
							'tipo_comision_id'=>'8',
							'mecanismo_origen_id'=>'1',
							'inst_genera_id'=>'15',
							'fecha_inicio_part'=>'2014-10-01',
							'fecha_fin_part'=>'2014-10-05',
							'motivo'=>'Motivo del viaje',
							'antecedente'=>'Antecedentes para realizar el viaje',
							'actividad'=>'Actividad realizada en el viaje',
							'resultado'=>'Resultado del viaje',
							'contribucion_ifai'=>'Como contribuye al IFAI este viaje',
							'observaciones'=>'Las observaciones del viaje',
							'url_comunicado'=>'http://www.ejemplo.com',));
        $viaje->eventos()->attach('5');
    }

}
