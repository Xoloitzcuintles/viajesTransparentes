<?php

class EventoTableSeeder extends Seeder {

    public function run()
    {
        DB::table('evento')->delete();

        Evento::create(array('name'=>'Congreso X de Transparencia',
							'url'=>'http://www.congresotransparencia.com',
							'viatico_id'=>'1',
							'ciudad_id'=>'1',
							'tipo_viaje'=>'Nacional'));
        Evento::create(array('name'=>'Forum de gobierno abierto',
							'url'=>'http://www.gobiernoabierto.com',
							'viatico_id'=>'2',
							'ciudad_id'=>'2',
							'tipo_viaje'=>'Nacional'));
        Evento::create(array('name'=>'International open goverment congress',
							'url'=>'http://www.internationalgvmtcongress.com',
							'viatico_id'=>'3',
							'ciudad_id'=>'3',
							'tipo_viaje'=>'Internacional'));
        Evento::create(array('name'=>'Another conference',
							'url'=>'http://www.conference.com',
							'viatico_id'=>'4',
							'ciudad_id'=>'4',
							'tipo_viaje'=>'Internacional'));
        Evento::create(array('name'=>'Canadian transparence congress',
							'url'=>'http://www.canadatransparence.com',
							'viatico_id'=>'5',
							'ciudad_id'=>'5',
							'tipo_viaje'=>'Internacional'));
    }

}

