<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('RemuneracionTableSeeder');
		$this->call('CargoTableSeeder');
		$this->call('PuestoTableSeeder');
		$this->call('UnidadAdministrativaTableSeeder');
		$this->call('CountryTableSeeder');
		$this->call('StateTableSeeder');
		$this->call('CityTableSeeder');
		$this->call('TipoComisionTableSeeder');
		$this->call('MecanismoOrigenTableSeeder');
		$this->call('InstGeneraTableSeeder');
		$this->call('CompaniaTransporteTableSeeder');
		$this->call('TemaTableSeeder');
		$this->call('ServidoresTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('ViaticoTableSeeder');
		$this->call('HospedajeTableSeeder');
		$this->call('EventoTableSeeder');
		$this->call('PasajeTableSeeder');
		$this->call('ViajeTableSeeder');

	}

}
