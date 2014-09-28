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
		$this->call('UsersTableSeeder');
		$this->call('CargoTableSeeder');
		$this->call('PuestoTableSeeder');
		$this->call('UnidadAdministrativaTableSeeder');
		$this->call('CountryTableSeeder');
		//$this->call('StateTableSeeder');
		//$this->call('CityTableSeeder');
	}

}
