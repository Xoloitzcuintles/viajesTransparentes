<?php

class ViaticoTableSeeder extends Seeder {

    public function run()
    {
        DB::table('viatico')->delete();

        Viatico::create(array('gasto'=>'5000',
								'comprobado'=>'4500',
								'sin_comprobar'=>'500',
								'devuelto'=>'0',
								'descripcion'=>'Viatico de este viaje'));
        Viatico::create(array('gasto'=>'6000',
								'comprobado'=>'5000',
								'sin_comprobar'=>'500',
								'devuelto'=>'500',
								'descripcion'=>'Viatico nuevo.'));
        Viatico::create(array('gasto'=>'7000',
								'comprobado'=>'6000',
								'sin_comprobar'=>'1000',
								'devuelto'=>'0',
								'descripcion'=>'Descripción del viático'));
        Viatico::create(array('gasto'=>'4000',
								'comprobado'=>'3800',
								'sin_comprobar'=>'200',
								'devuelto'=>'0',
								'descripcion'=>'Otro viático'));
        Viatico::create(array('gasto'=>'3000',
								'comprobado'=>'2000',
								'sin_comprobar'=>'1000',
								'devuelto'=>'1000',
								'descripcion'=>'Viatico de este viaje'));
    }

}





