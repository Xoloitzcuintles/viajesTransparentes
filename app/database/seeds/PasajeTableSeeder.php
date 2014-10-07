<?php

class PasajeTableSeeder extends Seeder {

    public function run()
    {
        DB::table('pasaje')->delete();

        $pasaje = Pasaje::create(array('cubre_pasaje'=>'IFAI',
							'tipo_pasaje'=>'Aéreo',
							'numero_viaje'=>'651CDC',
							'fecha'=>'2014-10-01',
							'gasto'=>'2200',
							'tipo'=>'ida',
							'compania_id'=>'1',
							'ciudad_origen_id'=>'1',
							'ciudad_destino_id'=>'2'));
		$eventos = Evento::where('id','=','1')->get();
        foreach($eventos as $evento){
        	$evento->pasajes()->attach($pasaje->id)->withTimestamps();
        }
        $pasaje = Pasaje::create(array('cubre_pasaje'=>'IFAI',
							'tipo_pasaje'=>'Aéreo',
							'numero_viaje'=>'984DFG',
							'fecha'=>'2014-10-05',
							'gasto'=>'2200',
							'tipo'=>'regreso',
							'compania_id'=>'1',
							'ciudad_origen_id'=>'2',
							'ciudad_destino_id'=>'1'));
		$eventos = Evento::where('id','=','1')->get();
        foreach($eventos as $evento){
        	$evento->pasajes()->attach($pasaje->id)->withTimestamps();
        }

        /* Evento 2 */
        $pasaje = Pasaje::create(array('cubre_pasaje'=>'IFAI',
							'tipo_pasaje'=>'Aéreo',
							'numero_viaje'=>'234JKB',
							'fecha'=>'2014-09-15',
							'gasto'=>'1500',
							'tipo'=>'ida',
							'compania_id'=>'2',
							'ciudad_origen_id'=>'1',
							'ciudad_destino_id'=>'3'));
		$eventos = Evento::where('id','=','2')->get();
        foreach($eventos as $evento){
        	$evento->pasajes()->attach($pasaje->id)->withTimestamps();
        }
        $pasaje = Pasaje::create(array('cubre_pasaje'=>'IFAI',
							'tipo_pasaje'=>'Aéreo',
							'numero_viaje'=>'546DFG',
							'fecha'=>'2014-09-17',
							'gasto'=>'1500',
							'tipo'=>'regreso',
							'compania_id'=>'2',
							'ciudad_origen_id'=>'3',
							'ciudad_destino_id'=>'1'));
		$eventos = Evento::where('id','=','2')->get();
        foreach($eventos as $evento){
        	$evento->pasajes()->attach($pasaje->id)->withTimestamps();
        }

        /* Evento 3 */
        $pasaje = Pasaje::create(array('cubre_pasaje'=>'IFAI',
							'tipo_pasaje'=>'Aéreo',
							'numero_viaje'=>'678DFG',
							'fecha'=>'2013-01-01',
							'gasto'=>'3200',
							'tipo'=>'ida',
							'compania_id'=>'3',
							'ciudad_origen_id'=>'2',
							'ciudad_destino_id'=>'4'));
		$eventos = Evento::where('id','=','3')->get();
        foreach($eventos as $evento){
        	$evento->pasajes()->attach($pasaje->id)->withTimestamps();
        }
        $pasaje = Pasaje::create(array('cubre_pasaje'=>'IFAI',
							'tipo_pasaje'=>'Aéreo',
							'numero_viaje'=>'674GTH',
							'fecha'=>'2013-01-07',
							'gasto'=>'3600',
							'tipo'=>'regreso',
							'compania_id'=>'3',
							'ciudad_origen_id'=>'4',
							'ciudad_destino_id'=>'2'));
		$eventos = Evento::where('id','=','3')->get();
        foreach($eventos as $evento){
        	$evento->pasajes()->attach($pasaje->id)->withTimestamps();
        }
        
        /* Evento 4 */
        $pasaje = Pasaje::create(array('cubre_pasaje'=>'IFAI',
							'tipo_pasaje'=>'Aéreo',
							'numero_viaje'=>'976XCV',
							'fecha'=>'2014-08-01',
							'gasto'=>'2700',
							'tipo'=>'ida',
							'compania_id'=>'1',
							'ciudad_origen_id'=>'1',
							'ciudad_destino_id'=>'5'));
		$eventos = Evento::where('id','=','4')->get();
        foreach($eventos as $evento){
        	$evento->pasajes()->attach($pasaje->id)->withTimestamps();
        }
        $pasaje = Pasaje::create(array('cubre_pasaje'=>'IFAI',
							'tipo_pasaje'=>'Aéreo',
							'numero_viaje'=>'643TGH',
							'fecha'=>'2013-08-05',
							'gasto'=>'2500',
							'tipo'=>'regreso',
							'compania_id'=>'1',
							'ciudad_origen_id'=>'5',
							'ciudad_destino_id'=>'1'));
		$eventos = Evento::where('id','=','4')->get();
        foreach($eventos as $evento){
        	$evento->pasajes()->attach($pasaje->id)->withTimestamps();
        }
        
        /* Evento 5 */
        $pasaje = Pasaje::create(array('cubre_pasaje'=>'IFAI',
							'tipo_pasaje'=>'Aéreo',
							'numero_viaje'=>'345WAS',
							'fecha'=>'2013-10-01',
							'gasto'=>'6000',
							'tipo'=>'ida',
							'compania_id'=>'1',
							'ciudad_origen_id'=>'1',
							'ciudad_destino_id'=>'7'));
		$eventos = Evento::where('id','=','5')->get();
        foreach($eventos as $evento){
        	$evento->pasajes()->attach($pasaje->id)->withTimestamps();
        }
        $pasaje = Pasaje::create(array('cubre_pasaje'=>'IFAI',
							'tipo_pasaje'=>'Aéreo',
							'numero_viaje'=>'651WER',
							'fecha'=>'2013-10-05',
							'gasto'=>'6300',
							'tipo'=>'regreso',
							'compania_id'=>'1',
							'ciudad_origen_id'=>'7',
							'ciudad_destino_id'=>'1'));
		$eventos = Evento::where('id','=','5')->get();
        foreach($eventos as $evento){
        	$evento->pasajes()->attach($pasaje->id)->withTimestamps();
        }
    }

}
