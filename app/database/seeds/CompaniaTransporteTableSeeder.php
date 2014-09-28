<?php

class CompaniaTransporteTableSeeder extends Seeder {

    public function run()
    {
        DB::table('compania_transporte')->delete();

		CompaniaTransporte::create(array('name'=>'Aeroméxico'));
		CompaniaTransporte::create(array('name'=>'Volaris'));
		CompaniaTransporte::create(array('name'=>'Interjet'));
		CompaniaTransporte::create(array('name'=>'ADO'));
		CompaniaTransporte::create(array('name'=>'Autotransportes ABC'));
		CompaniaTransporte::create(array('name'=>'Primera Plus'));
		CompaniaTransporte::create(array('name'=>'No disponible'));

	}
}




