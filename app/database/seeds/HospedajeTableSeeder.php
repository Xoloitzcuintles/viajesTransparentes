<?php

class HospedajeTableSeeder extends Seeder {

    public function run()
    {
        DB::table('hospedaje')->delete();

        $hospedaje = Hospedaje::create(array('fecha_inicio'=>'2014-10-01',
											'fecha_fin'=>'2014-10-05',
											'inst_hospedaje'=>'IFAI',
											'costo'=>'2500',
											'hotel'=>'Marriot'
											));
        $viaticos = Viatico::where('id','=','1')->get();
        foreach($viaticos as $viatico){
        	$viatico->hospedajes()->attach($hospedaje->id)->withTimestamps();
        }
        $hospedaje = Hospedaje::create(array('fecha_inicio'=>'2014-09-15',
											'fecha_fin'=>'2014-09-17',
											'inst_hospedaje'=>'PGR',
											'costo'=>'1500',
											'hotel'=>'Baja Inn'
											));
        $viatico = Viatico::where('id','=','2')->get();
        foreach($viaticos as $viatico){
        	$viatico->hospedajes()->attach($hospedaje->id)->withTimestamps();
        }
        $hospedaje = Hospedaje::create(array('fecha_inicio'=>'2013-01-01',
											'fecha_fin'=>'2013-01-07',
											'inst_hospedaje'=>'IFAI',
											'costo'=>'3500',
											'hotel'=>'Otro Hotel'
											));
        $viatico = Viatico::where('id','=','3')->get();
        foreach($viaticos as $viatico){
        	$viatico->hospedajes()->attach($hospedaje->id)->withTimestamps();
        }
        $hospedaje = Hospedaje::create(array('fecha_inicio'=>'2014-08-01',
											'fecha_fin'=>'2014-08-05',
											'inst_hospedaje'=>'Otro',
											'costo'=>'2500',
											'hotel'=>'Misión'
											));
        $viatico = Viatico::where('id','=','4')->get();
        foreach($viaticos as $viatico){
        	$viatico->hospedajes()->attach($hospedaje->id)->withTimestamps();
        }
        $hospedaje = Hospedaje::create(array('fecha_inicio'=>'2014-10-01',
											'fecha_fin'=>'2014-10-05',
											'inst_hospedaje'=>'IFAI',
											'costo'=>'5500',
											'hotel'=>'Holiday Inn'
											));
        $viatico = Viatico::where('id','=','5')->get();
        foreach($viaticos as $viatico){
        	$viatico->hospedajes()->attach($hospedaje->id)->withTimestamps();
        }
    }

}

